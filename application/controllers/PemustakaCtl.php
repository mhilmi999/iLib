<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemustakaCtl extends CI_Controller {
    
    public function index(){
        $this->load->view('Pemustaka/index');
    }
}