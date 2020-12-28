<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Pemustaka</h2>
                <ol>
                    <li><a href="index.html">Histori Pinjam</a></li>
                    <li>Pemustaka</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <section class="inner-page pt-4">
        <div class="container">
            <!-- Content Row -->
            <div>
                <?php foreach($peminjaman as $d) { 
                    ?>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-lg col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Peminjaman Pada  <?= $d['tgl_pinjam']; ?></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php foreach ($detail as $b) { 
                                             if ($d['id_pinjam']==$b['id_pinjam']) { ?>
                                            <li><?= $b['nama_buku'];} ?></li>
                                        <?php } ?>    
                                    </div>
                                    <div class="auto">
                                        <a class="btn btn-info" href="<?= base_url().'index.php/PemustakaCtl/invoice/'.$d['id_pinjam'];?>">Cetak Invoice</a>
                                    </div>
                                </div>
                                
                                <div class="col-auto">
                                    <?php if($d['status'] == 1 && $d['denda']==NULL){ ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Menunggu diambil</div>
                                    <?php } ?>
                                    <?php if($d['status'] == 3 && $d['denda']!=NULL){ ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Kena Denda Rp<?= number_format($d['denda'],2);?></div>
                                    <?php } ?>
                                    <?php if($d['status'] == 0){ ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Menunggu Persetujuan</div>
                                    <?php } ?>
                                    <?php if($d['status'] == 2){ ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Sedang dipinjam</div>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php }
                ?>
            </div>
        </div>
    </section>

</main>