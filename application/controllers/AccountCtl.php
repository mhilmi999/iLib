<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountCtl extends CI_Controller {


    public function daftar(){

        $this->load->view('Home/daftar');
    }
    
    public function daftarIn(){
		$this->load->helper(array('form', 'url', 'security'));
		$this->load->model('account');
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'trim|min_length[2]|max_length[128]|xss_clean'
        );

		$this->form_validation->set_rules(
			'nrp',
			'NRP',
			'trim|min_length[2]|max_length[128]|xss_clean'
        );

		$this->form_validation->set_rules(
			'no_hp',
			'no_hp',
			'trim|min_length[5]|max_length[128]|xss_clean'
        );
        
		$this->form_validation->set_rules(
			'username',
			'Username',
			'trim|min_length[4]|max_length[128]|xss_clean'
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'trim|min_length[4]|max_length[128]|xss_clean'
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|min_length[2]|max_length[128]|xss_clean'
		);

		$res = $this->form_validation->run();
		if ($res == FALSE) {
			$msg = validation_errors();
			$this->load->view(
				'daftar',
				array('msg' => $msg)
			);
			return FALSE;
		}



		$config['upload_path']          = './photos/pemustaka/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = '2048';
		

		$new_name = time().$_FILES['photo']['name'];
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('photo')) {   //gagal upload
			var_dump($config);
			die();
			$error = array('error' => $this->upload->display_errors());
			//$this->load->view('common/header');
			$this->load->view('daftar', $error);
			//$this->load->view('common/footer');
			return;
		}

		//berhasil upload
		$data = array('upload_data' => $this->upload->data());
		$id_user = $this->account->insertNewUser($config['file_name']);
		$this->load->view('common/header');
		$this->load->view('signup_success');
		$this->load->view('common/footer');
		return;
    }
}