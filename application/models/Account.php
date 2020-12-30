<?php
class Account extends CI_Model
{
    function insertNewUser($photo)
    {

        $role = $this->input->post('role');
        $nama = $this->input->post('nama');
        $nrp = $this->input->post('nrp');
        $no_hp = $this->input->post('no_hp');
        $departemen = $this->input->post('departemen');
        $alamat = $this->input->post('alamat');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = MD5($this->input->post('password'));

        //membuat record baru di tabel users  
        $thequery = "INSERT INTO member (username, password, nama,
                    nrp, email, no_hp, departemen, alamat, photo) 
                    VALUES ('$username', '$password', '$nama', '$nrp',
                    '$email', '$no_hp', '$departemen', '$alamat', '$photo')";
        $this->db->query($thequery);
        $id_user =  $this->db->insert_id();

        return $id_user;
    }

    function masukIn(){
        $username = $this->input->post('username');
        $password = MD5($this->input->post('password'));

        $thequery = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
        $res = $this->db->query($thequery);
        $users = $res->result_array();
        if (count($users) > 0) {
            // kembalikan ID-user pertama
            return $users;
        }
        
        return [];   
    }

    public function getAllUser(){
        $q="SELECT * FROM `member` WHERE role = 1";
        $res = $this->db->query($q);
        return $res->result_array();

    }
}