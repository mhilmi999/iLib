
        <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
        <br>
        <br>
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Katalog Buku</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>
        <?php foreach ($buku as $a) {?>
            <div class="row portfolio-container">
                <div class="col-lg-3 col-md-4 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                    <img src="<?= base_url();?>/asset/NewBiz/img/portfolio/app1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <a style="color: antiquewhite; font-weight: bold;" href="#"><?= $a['nama_buku'] ?></a>
                        <a style="color: antiquewhite;"><?= $a['nama_author'] ?></a>
                        <a style="color: antiquewhite;"><?= $a['penerbit'] ?></a>
                        <a style="color: antiquewhite;"><?= $a['tahun'] ?></a>
                        <div>
                        <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <?php } ?>
      </div>
    </section><!-- #portfolio -->