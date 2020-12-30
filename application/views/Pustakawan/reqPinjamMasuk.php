<style>
    th{
        text-align:center;
    }
    td{
        text-align:center;
    }
</style>

<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Pustakawan</h2>
            <ol>
                <li><a href="index.html" style="color: #ba4148;">Pinjam Buku</a></li>
                <li>Pustakawan</li>
            </ol>
        </div>
        <?php if (isset($_SESSION['flash'])){?>
                <br><div class="alert alert-success" role="alert"><?=$_SESSION['flash'];unset($_SESSION['flash']);?></div>
            <?php } ?>
        <br>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold " style="color: #ba4148;">Daftar Peminjam Buku</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="background-color: #17b7ce; color: white">
                                            <th>Nama Peminjam </th>
                                            <th>Judul Buku</th>
                                            <th>Status</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Denda</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        foreach ($peminjaman as $r){
                                        
                                        ?>
                                            <tr>
                                                <!-- LOGIKA NAMA YANG AKAN DIPINJAM -->                                                
                                                <td>
                                                <?php $flag=0; foreach ($reqPinjam as $s){
                                                    //echo $r['tgl_pinjam'];die();
                                                    if ($s['id_member']==$r['id_member'] && $flag==0){?>
                                                    <?= $r['nama'];?>
                                                        
                                                    <?php $flag=1; }
                                                }?>
                                                </td>
                                                <!-- LOGIKA NAMA YANG AKAN DIPINJAM -->


                                                <!-- LOGIKA TAMPILKAN BUKU APA SAJA YANG DIPINJAM -->
                                                <td style="text-align: left;">
                                                <?php foreach ($reqPinjam as $s){
                                                    if ($s['id_member']==$r['id_member'] && $s['id_pinjam']==$r['id_pinjam']){?>
                                                        <li><?php echo $s['nama_buku'];?></li>
                                                    <?php }
                                                }?>
                                                </td>
                                                <!-- LOGIKA TAMPILKAN BUKU APA SAJA YANG DIPINJAM -->
                                                
                                                
                                                
                                                <!-- LOGIKA STATUS PEMINJAMAN -->
                                                <?php if ($r['status'] == 0) : ?>
                                                <td>
                                                    <a class="btn btn-primary" style="background-color:#ba4148; border:none;" href="<?= base_url(). 'index.php/PustakawanCtl/setujuiPinjam/' .$r['id_pinjam'];?>"> 
                                                    Butuh Persetujuan
                                                    </a>
                                                </td>
                                                <?php elseif ($r['status'] == 1) : ?>
                                                    <?php if($r['tgl_pinjam'] == NULL) :?>
                                                        <td>
                                                            Menunggu Buku diambil
                                                        </td>
                                                    <?php else: ?>
                                                        <td>
                                                            Sedang Dipinjam
                                                        </td>
                                                    <?php endif;?>
                                                <?php elseif ($r['status'] == 2) : ?>
                                                <td>
                                                    Sudah diambil
                                                </td>
                                                <?php elseif ($r['status'] == 3) : ?>
                                                <td>
                                                    Lewat tenggat waktu
                                                </td>
                                                <?php elseif ($r['status'] == 4) : ?>
                                                <td>
                                                    Sudah Mengembalikan
                                                </td>    
                                                <?php endif;?>
                                                <!-- LOGIKA STATUS PEMINJAMAN -->



                                                <!-- LOGIKA TANGGAL PEMINJAMAN -->
                                                <?php if ($r['tgl_pinjam'] == NULL && $r['status'] == 0 ) : ?> 
                                                                <td>
                                                                    Belum disetujui
                                                                </td>
                                                <?php elseif ($r['tgl_pinjam'] == NULL && $r['status'] == 1) : ?>
                                                                <td>
                                                                    <a class="btn btn-primary" style="background-color:#ba4148; border:none;" href="<?= base_url(). 'index.php/PustakawanCtl/mulaiPinjam/'.$r['id_pinjam'] ;?>"> 
                                                                    Ambil Buku?
                                                                    </a>
                                                                </td>        
                                                <?php else : ?>
                                                            <td>
                                                                <?= date('d/m/Y',strtotime($r['tgl_pinjam']));?>
                                                            </td>
                                                <?php endif;?>
                                                <!-- LOGIKA TANGGAL PEMINJAMAN -->

                                                

                                                <!-- LOGIKA TANGGAL KEMBALI -->
                                                <?php if($r['tgl_kembali'] == NULL) : ?>
                                                <td>
                                                    Belum disetujui
                                                </td>
                                                <?php else : ?>
                                                    <td>
                                                        <?= date('d/m/Y',strtotime($r['tgl_kembali']));?>
                                                    </td>
                                                <?php endif;?>



                                                <!-- LOGIKA DENDA -->                                                
                                                <?php if ($r['denda'] == NULL && $r['tgl_pinjam'] == NULL)  :?>
                                                <td>
                                                    Belum ada
                                                </td>
                                                <?php else : ?>
                                                    <td>
                                                        
                                                        Rp<?= number_format($r['denda'],2);?>
                                                    </td>
                                                <?php endif;?>
                                            </tr>
                                            
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    </div>

</section>
