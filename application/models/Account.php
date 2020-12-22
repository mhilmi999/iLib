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
        $password = $this->input->post('password');


        //membuat record baru di tabel users  
        $thequery = "INSERT INTO member (nama, username, password,
                    email,nrp, no_hp, departemen, alamat, photo) 
                    VALUES ('$nama', '$nrp', '$no_hp', '$departemen',
                    '$alamat', '$username', '$email', '$password', '$photo')";
        $this->db->query($thequery);
        $id_user =  $this->db->insert_id();

        return $id_user;
    }
}