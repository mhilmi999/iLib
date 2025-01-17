<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PustakawanCtl extends CI_Controller {

     public function index(){
        $this->load->model('Account');
        $Info = $this->Account->getAllUser();
        $session_data = $this->session->userdata('logged_in');
        // var_dump($userInfo);
        // die();
        $this->load->view('Pustakawan/header');
        $this->load->view('Pustakawan/index', array(
            "user" => $Info
        ));   
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

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('photo')) {   //berhasil upload
			$data = array('upload_data' => $this->upload->data($new_name));
			$this->Buku->tambahBuku($config['file_name']);	
            $session_data = $this->session->userdata('logged_in');
            $this->katalogBuku();
		    }else{ // gagal uploads
			echo $this->upload->display_errors();
            }
    }
    
    public function katalogBuku(){
        $this->load->helper(array('url', 'security'));
		$this->load->model('Buku');
        $this->load->library(array('form_validation'));
        $data['buku']=$this->Buku->getBuku();
        $this->load->view('Pustakawan/header');
        $this->load->view('Pustakawan/katalogBuku', $data);
        $this->load->view('Pustakawan/footer');
        
    }

    public function reqPinjamMasuk(){
        $this->load->model('Buku');
        $session_data = $this->session->userdata('logged_in');
        $peminjaman = $this->Buku->peminjaman();
        $getReqPinjam = $this->Buku->getReqPinjam();
        foreach ($peminjaman as $a){    
            $d=strtotime("now");
            $a2=strtotime($a['tgl_kembali']);
            if ($d > is_null($a2) == FALSE  && $a['status'] > 0){
                $diff=$d-$a2;
                $diff=(date("d",$diff));
                $a['denda']=($diff)*500;
                $c=$this->Buku->tambahDenda($a['id_pinjam'], $a['denda']);
            }
        }
        $peminjaman = $this->Buku->peminjaman();
        
        $this->load->view('Pustakawan/header');
        $this->load->view('Pustakawan/reqPinjamMasuk', array(
            "nama" => $session_data['namalengkap'],
            "peminjaman" => $peminjaman,
            "reqPinjam" => $getReqPinjam
        ));
        $this->load->view('Pustakawan/footer');

    }

    public function setujuiPinjam($id_pinjam){
        
        $this->load->model('Buku');
        $status = 1;
        $pinjemin = $this->Buku->setujuPinjamkan($id_pinjam,$status);
        if(!$pinjemin){
            echo "<script>alert('Gagal Meminjamkan')</script>";
            redirect('PustakawanCtl/reqPinjamMasuk');
        }else{
            echo "<script>alert('Berhasil Mememesankan Buku ')</script>";
            redirect('PustakawanCtl/reqPinjamMasuk');
        }
    }

    public function mulaiPinjam($id_pinjam){
        $this->load->model('Buku');
        $jumlahBuku = $this->Buku->cekJumlahBukuDipinjam($id_pinjam);
        
        $jumlah = $jumlahBuku[0]['COUNT(t1.id_buku)'];

        $kirimWaktu = $this->Buku->mulaiWaktuPinjam($id_pinjam, $jumlah);

        
        if($kirimWaktu == TRUE){
            echo "Dipinjamkan";
            $_SESSION['flash']='Dipinjamkan';
            redirect('PustakawanCtl/reqPinjamMasuk');
            //$this->reqPinjamMasuk();
        }else{
            echo "Belum berhasil";
            $this->reqPinjamMasuk();
        }
    }

}