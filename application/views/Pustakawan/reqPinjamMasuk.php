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
                                        <tr>
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
                                            <td>
                                                <?php $flag=0;foreach ($reqPinjam as $s){
                                                    
                                                    if ($s['id_member']==$r['id_member'] && $flag==0){?>
                                                    <?= $r['nama'];?>
                                                        
                                                    <?php $flag=1; }
                                                }?>
                                                </td>

                                                <td>
                                                <?php foreach ($reqPinjam as $s){
                                                    if ($s['id_member']==$r['id_member'] && $s['id_pinjam']==$r['id_pinjam']){?>
                                                        <li><?php echo $s['nama_buku'];?></li>
                                                    <?php }
                                                }?>
                                                        
                                                </td>
                                                <!-- LOGIKA STATUS PEMINJAMAN -->
                                                <?php if ($r['status'] == 0) : ?>
                                                <td>
                                                    Membutuhkan Persetujuan
                                                    <a class="btn btn-primary" style="background-color:#ba4148; border:none;" href="<?= base_url(). 'index.php/PustakawanCtl/setujuiPinjam/' .$r['id_pinjam'];?>"> 
                                                        Setuju 
                                                    </a>
                                                </td>
                                                <?php elseif ($r['status'] == 1) : ?>
                                                <td>
                                                    Dipinjam
                                                </td>
                                                <?php elseif ($r['status'] == 2) : ?>
                                                <td>
                                                    Deadline kembali
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

                                                <!-- LOGIKA TANGGAL PEMINJAMAN -->
                                                <?php if ($r['tgl_pinjam'] == NULL) : ?>
                                                <td>
                                                    Belum disetujui
                                                </td>
                                                <?php else : ?>
                                                    <td>
                                                        BLM BUAT LOGIC TANGGAL PINJAM
                                                    </td>
                                                <?php endif;?>

                                                <!-- LOGIKA TANGGAL KEMBALI -->
                                                <?php if($r['tgl_kembali'] == NULL) : ?>
                                                <td>
                                                    Belum disetujui
                                                </td>
                                                <?php else : ?>
                                                    <td>
                                                        BLM BUAT LOGIC TANGGAL KEMBALI
                                                    </td>
                                                <?php endif;?>

                                                <!-- LOGIKA DENDA -->                                                
                                                <?php if ($r['denda'] == NULL) :?>
                                                <td>
                                                    Belum ada
                                                </td>
                                                <?php else : ?>
                                                    <td>
                                                        Rp <?= $r['denda'];?>
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
