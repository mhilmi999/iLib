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
		$this->load->model("Account");

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
				'Home/daftar',
				array('msg' => $msg)
			);
			return FALSE;
		}

		$config['upload_path']          = './photos/pemustaka/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$config['max_size']             = 10000;
		$new_name = time().'_'.$_FILES['photo']['name'];
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('photo')) {   //berhasil upload
			$data = array('upload_data' => $this->upload->data($new_name));
			$this->Account->insertNewUser($config['file_name']);	
			$this->load->view('Home/header');
        	$this->load->view('Home/landingPage');
        	$this->load->view('Home/footer');
		}else{ // gagal uploads
			echo $this->upload->display_errors();
		}
		
	}
	
	public function masuk(){
		$this->load->view('Home/masuk');
	}

	public function masukIn(){
		$this->load->helper(array('url', 'security'));
		$this->load->model('account');
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules(
			'username',
			'Username',
			'trim|min_length[2]|max_length[128]|xss_clean'
		);
		$this->form_validation->set_rules(
			'katasandi',
			'Kata Sandi',
			'trim|min_length[2]|max_length[128]|xss_clean'
		);

		$res = $this->form_validation->run();

		if ($res == FALSE) { // Cek kalau salah

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username/Password Invalid</div>');
			$this->load->view(
				'Home/masuk',
				array('msg' => 'Username/Password is incorrect!')
			);
		}
		$users = $this->account->masukIn();

		if (sizeof($users) <= 0) {
			
			//kembali ke halaman login
			$this->load->view(
				'Home/masuk',
				array('msg' => 'Username/Password is incorrect!')
			);
		} else {

			//inisialisasi session
			$sess_array = array(
				'id_user' => $users[0]['id_member'],
				'namalengkap' => $users[0]['nama'],
				'username' => $users[0]['username'],
				'role' => $users[0]['role'],
				'password'   => $users[0]['password'],
				'email' => $users[0]['email'],
				'no_hp' => $users[0]['no_hp'],
				'departemen' => $users[0]['departemen'],
				'alamat' => $users[0]['alamat'],
				'photo' => $users[0]['photo'],
				'nrp' => $users[0]['nrp']
			);
			//var_dump($sess_array);
			//die();
			$this->session->set_userdata('logged_in', $sess_array);
			//ke halaman welcome page yang bersesuaian
			//			$peran= $this->account->getPeranUser($id_user);
			switch ($users[0]['role']) {
				case 1:
					redirect('PemustakaCtl');
					break;
				case 2:
					redirect('PustakawanCtl');
					break;
				default:
					redirect('Home');
					break;
			}
		}
	}

	public function keluarIn(){
		$session_data = $this->session->userdata('logged_in');
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect("Home");
	}
}