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
        $this->load->view('Pustakawan/header');
        $this->load->view('Pustakawan/tambahBuku', array(
            "author" => $author
        ));
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
        $this->Buku->tambahBuku();
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('Pustakawan/header');
        $this->load->view('Pustakawan/index',array(
            "nama" => $session_data['namalengkap'],
            "photo" => $session_data['photo'])
        );
        $this->load->view('Pustakawan/footer');
        
    }
    
    public function katalogBuku(){
        $this->load->helper(array('url', 'security'));
		$this->load->model('Buku');
        $this->load->library(array('form_validation'));
        
    }
}