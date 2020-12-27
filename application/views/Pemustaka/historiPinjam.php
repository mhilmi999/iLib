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
                <?php 
                foreach($detail as $d) {?>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-lg col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Peminjaman Pada  <?= $d['tgl_pinjam'];?></div>
                                    <?php
                                    foreach ($bukuKu as $b) {
                                        if ($b['id_pinjam'] == $d['id_pinjam'] && $d['tgl_pinjam'] == $b['tgl_pinjam']) { ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $b['nama_buku']; ?></div>
                                        <?php }} ?>
                                </div>
                                <div class="col-auto">
                                    <?php if($b['status'] == 1){?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Sedang dipinjam</div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>

</main>