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

    function getReqPinjam(){
        $thequery = "SELECT t1.* , t2.id_detail, t2.id_buku, t3.nama, t4.nama_buku FROM peminjaman t1 JOIN detail_peminjaman t2 
                    ON t1.id_pinjam = t2.id_pinjam LEFT JOIN member t3 ON t1.id_member = t3.id_member LEFT JOIN buku t4 
                    ON t2.id_buku = t4.id_buku";
        $res = $this->db->query($thequery);
        return $res->result_array();
    }

    function peminjaman(){
        $thequery = "SELECT t1.*, t2.nama FROM peminjaman as t1 LEFT JOIN member as t2 ON t1.id_member=t2.id_member";
        $res = $this->db->query($thequery);
        return $res->result_array();
    }

    function getDetailPinjaman($id_pinjam){
        $thequery = "SELECT * FROM peminjaman WHERE id_pinjam = $id_pinjam";
        $res = $this->db->query($thequery);
        return $res->result_array();
    }

    function setujuPinjamkan($id_pinjam, $status){
        $thequery = "UPDATE peminjaman SET `status` = $status WHERE `id_pinjam` = $id_pinjam";
        $this->db->query($thequery);    
        return TRUE;
    }

    function cekJumlahBukuDipinjam($id_pinjam){
        $q = "SELECT COUNT(t1.id_buku) FROM detail_peminjaman t1 JOIN buku t2 ON t1.id_pinjam = $id_pinjam WHERE t1.id_buku = t2.id_buku";
        $res = $this->db->query($q);
        return $res->result_array();
    
    }

    function mulaiWaktuPinjam($id_pinjam, $jumlah){
        $q = "UPDATE peminjaman SET `tgl_pinjam` = NOW(), `tgl_kembali` = DATE_ADD(NOW(), INTERVAL $jumlah WEEK), `status`=2  WHERE `id_pinjam` = $id_pinjam";
        $this->db->query($q);
        return TRUE;
    }

    function tambahDenda($id_pinjam, $denda){
        $q = "UPDATE peminjaman SET denda = $denda WHERE id_pinjam = $id_pinjam";
        $this->db->query($q);
        return TRUE;
    }
    
    function peminjamanUser($id_member=-1){
        $q="SELECT t1.*, t2.nama FROM peminjaman as t1 JOIN member as t2 on (t1.id_member=$id_member && t2.id_member=$id_member) ";
        $res=$this->db->query($q);
        return $res->result_array();    
    }

    function detailPinjam($id_member){
        $q = "SELECT t1.* , t2.id_detail, t2.id_buku, t3.nama, t4.nama_buku FROM peminjaman t1 JOIN detail_peminjaman t2 ON t1.id_pinjam = t2.id_pinjam JOIN member t3 ON (t1.id_member=$id_member && t3.id_member=$id_member) LEFT JOIN buku t4 ON t2.id_buku = t4.id_buku ";
        $res = $this->db->query($q);
        return $res->result_array();
    }
}