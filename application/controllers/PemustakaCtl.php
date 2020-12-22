<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemustakaCtl extends CI_Controller {

    public function index(){
        $session_data = $this->session->userdata('logged_in');
        //var_dump($session_data['namalengkap']);
        //die();
        $this->load->view('Pemustaka/index', array(
            "nama" => $session_data['namalengkap'],
            "photo" => $session_data['photo']
        ));
    }
}