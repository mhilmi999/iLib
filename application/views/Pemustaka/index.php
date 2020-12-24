

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pemustaka</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Pemustaka</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs Section -->

        <section class="inner-page pt-4">
            <div class="container">
                <p>
                    Selamat datang <?= $nama;?>
                </p>
                
                <img src="<?= base_url('./photos/pemustaka/') . $photo; ?>" height="170px" width="125px" >
            </div>
        </section>

    </main>
    <!-- End #main -->

 