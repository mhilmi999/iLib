<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemustakaCtl extends CI_Controller {

    public function index(){
        $session_data = $this->session->userdata('logged_in');
        //var_dump($session_data['namalengkap']);
        //die();
        $this->load->view('Pemustaka/header');
        $this->load->view('Pemustaka/index', array(
            "nama" => $session_data['namalengkap'],
            "photo" => $session_data['photo']
        ));
        $this->load->view('Pemustaka/footer');
    }
    
    public function kartuAnggota(){
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('Pemustaka/header');
        //var_dump($session_data);
        $this->load->view('Pemustaka/kartuAnggota', array(
            "nama" => $session_data['namalengkap'],
            "photo" => $session_data['photo'],
            "no_hp" => $session_data['no_hp'],
            "departemen" => $session_data['departemen'],
            "nrp" => $session_data['nrp'],
            "role" => $session_data['role']
        ));
        //$this->load->view('Pemustaka/footer');   
    }
    
    public function cetakKartu(){
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('Pemustaka/cetak', array(
            "nama" => $session_data['namalengkap'],
            "photo" => $session_data['photo'],
            "nrp" => $session_data['nrp'],
            "no_hp" => $session_data['no_hp'],
            "departemen" => $session_data['departemen'],
            "role" => $session_data['role']

        ));
    }

    public function katalogBuku(){
        $this->load->helper(array('url', 'security'));
        $this->load->model('Buku');
        $this->load->library(array('form_validation'));
        $data['buku']=$this->Buku->getBuku();
        $this->load->view('Pemustaka/header');
        //var_dump($buku);
        $this->load->view('Pemustaka/katalogBuku', $data);
        $this->load->view('Pemustaka/footer');
        
    }

    public function keranjangBuku($id_buku=-1){
        if (!isset($_SESSION['cart']) && $id_buku != -1){
            $this->session->set_userdata(array("cart"=>array($id_buku)));
        }else if($id_buku != -1){
            array_push($_SESSION['cart'], $id_buku);
        }
        //var_dump($_SESSION['cart']);
        //die;
        $this->load->model('Buku');
        $data['buku']=$this->Buku->getBuku();
        $this->load->view('Pemustaka/header');
        //var_dump($buku);
        $this->load->view('Pemustaka/keranjangBuku', $data);
        $this->load->view('Pemustaka/footer');
    }
}