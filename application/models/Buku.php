<?php
class Buku extends CI_Model
{
    function getAuthor(){
        $thequery = "SELECT * FROM author";
        $res = $this->db->query($thequery);
        return $res->result_array();
    }

    function tambahBuku(){
        $id_author = $this->input->post('id_author');
        $nama_buku = $this->input->post('nama_buku');
        $stock = $this->input->post('stock');
        $penerbit = $this->input->post('penerbit');
        $klasifikasi = $this->input->post('klasifikasi');
        $tahun = $this->input->post('tahun');
        
        $thequery = "INSERT INTO 
        buku (id_author, nama_buku, amountTotal, penerbit, klasifikasi, tahun)
        VALUES ('$id_author', '$nama_buku', '$stock',
                 '$penerbit', '$klasifikasi', '$tahun')";
        $res = $this->db->query($thequery);
    }

}