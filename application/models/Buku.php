<?php
class Buku extends CI_Model
{
    function getAuthor(){
        $thequery = "SELECT * FROM author";
        $res = $this->db->query($thequery);
        return $res->result_array();
    }

    function getBuku(){
        $thequery = "SELECT t1.*, t2.nama_author FROM buku t1 JOIN author t2 ON t1.id_author=t2.id_author ";
        $res = $this->db->query($thequery);
        return $res->result_array();
    }

    function tambahBuku($photo){
        $id_author = $this->input->post('id_author');
        $nama_buku = $this->input->post('nama_buku');
        $stock = $this->input->post('stock');
        $penerbit = $this->input->post('penerbit');
        $klasifikasi = $this->input->post('klasifikasi');
        $tahun = $this->input->post('tahun');
        
        $thequery = "INSERT INTO 
        buku (id_author, nama_buku, cover_book, amountTotal, penerbit, klasifikasi, tahun)
        VALUES ('$id_author', '$nama_buku','$photo' , '$stock',
                 '$penerbit', '$klasifikasi', '$tahun')";
        $res = $this->db->query($thequery);
    }

    function reqPinjam(){
        $session_data = $this->session->userdata('logged_in');
        //var_dump($session_data['id_user']);
        //die;
        $member=$session_data['id_user'];
        $thequery = "INSERT INTO peminjaman (id_member) VALUES ('$member')";
        $this->db->query($thequery);
        $id_pinjam = $this->db->insert_id();
        for ($index=0; $index < count($_SESSION['cart']); $index++){
            if (isset($_SESSION['cart'][$index])){
                $jujursayakecewa=$_SESSION['cart'][$index];
                $thequery2 = "INSERT INTO detail_peminjaman (id_pinjam, id_buku) VALUES ('$id_pinjam', '$jujursayakecewa')";
                $this->db->query($thequery2);
            }
        }
        unset($_SESSION['cart']);
        return $id_pinjam;
    }

}