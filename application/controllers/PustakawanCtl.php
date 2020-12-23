<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PustakawanCtl extends CI_Controller {
     public function index(){
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('Pustakawan/header');
        $this->load->view('Pustakawan/index',array(
            "nama" => $session_data['namalengkap'],
            "photo" => $session_data['photo'])
        );
        $this->load->view('Pustakawan/footer');
    }
    
    public function tambahBuku(){
        $this->load->model('Buku');
        $author = $this->Buku->getAuthor();
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('Pustakawan/header');
        $this->load->view('Pustakawan/tambahBuku', array(
            "author" => $author,
            "nama" => $session_data['namalengkap']
        ));
        $this->load->view('Pustakawan/footer');
    }
    
    public function menambahBuku(){
        $this->load->helper(array('url', 'security'));
		$this->load->model('Buku');
		$this->load->library(array('form_validation'));
        
        $this->form_validation->set_rules(
            'nama_buku',
			'nama_buku',
			'trim|min_length[1]|max_length[128]|xss_clean'
		);
		$this->form_validation->set_rules(
            'penerbit',
			'penerbit',
			'trim|min_length[5]|max_length[128]|xss_clean'
		);
		$this->form_validation->set_rules(
            'klasifikasi',
			'klasifikasi',
			'trim|min_length[4]|max_length[128]|xss_clean'
		);
		$this->form_validation->set_rules(
            'tahun',
			'tahun',
			'trim|min_length[4]|max_length[128]|xss_clean'
		);
        
        $res = $this->form_validation->run();
        
        if ($res == FALSE) { // Cek kalau salah
            
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username/Password Invalid</div>');
			$this->load->view(
                'Pustakawan/tambahBuku',
				array('msg' => 'Username/Password is incorrect!')
			);
        }
        
        $config['upload_path']          = './photos/pustakawan/coverbuku/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$config['max_size']             = 10000;
		$new_name = time().'_'.$_FILES['photo']['name'];
		$config['file_name'] = $new_name;

        //var_dump($config);
        //die();
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('photo')) {   //berhasil upload
			$data = array('upload_data' => $this->upload->data($new_name));
			$this->Buku->tambahBuku($config['file_name']);	
			$session_data = $this->session->userdata('logged_in');
            $this->load->view('Pustakawan/header');
            $this->load->view('Pustakawan/index',array(
                "nama" => $session_data['namalengkap'],
                "photo" => $session_data['photo'])
            );
            $this->load->view('Pustakawan/footer');
		    }else{ // gagal uploads
			echo $this->upload->display_errors();
            }
        
        
        
    }
    
    public function katalogBuku(){
        $this->load->helper(array('url', 'security'));
		$this->load->model('Buku');
        $this->load->library(array('form_validation'));
        $buku=$this->Buku->getBuku();
        $this->load->view('Pustakawan/header');
        $this->load->view('Pustakawan/katalogBuku', array("buku"=>$buku));
        $this->load->view('Pustakawan/footer');
        
    }
}