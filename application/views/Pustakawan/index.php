    <style>
        th {
            text-align: center;
        }

        td {
            text-align: center;
        }
    </style>
    <main id="main">

        <!-- End Breadcrumbs Section -->

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pustakawan</h2>
                    <ol>
                        <li><a href="index.html" style="color: #ba4148;">Pinjam Buku</a></li>
                        <li>Pustakawan</li>
                    </ol>
                </div>
                <?php if (isset($_SESSION['flash'])) { ?>
                    <br>
                    <div class="alert alert-success" role="alert"><?= $_SESSION['flash'];
                                                                    unset($_SESSION['flash']); ?></div>
                <?php } ?>
                <br>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold " style="color: #ba4148;">Daftar Pemustaka iLib</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr style="background-color: #17b7ce; color: white" >
                                        <th>Nama Pemustaka </th>
                                        <th>NRP</th>
                                        <th>No. Hp</th>
                                        <th>Email</th>
                                        <th>Asal Departemen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=0;
                                    foreach ($user as $u) { ?>
                                        <tr>
                                            <!-- LOGIKA NAMA YANG AKAN DIPINJAM -->
                                            <td>
                                                <?= $u['nama']; ?>
                                            </td>

                                            <td>
                                                <?= $u['nrp']; ?>
                                            </td>
                                            
                                            <td>
                                                <?= $u['no_hp']; ?>
                                            </td>
                                            
                                            <td>
                                                <?= $u['email']; ?>
                                            </td>
                                            
                                            <td>
                                                <?= $u['departemen']; ?>
                                            </td>
                                        
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        </section>


    </main>
    <!-- End #main -->