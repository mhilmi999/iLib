
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
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Children</li>
              <li data-filter=".filter-card">Pemrograman</li>
              <li data-filter=".filter-business">Business</li>
              <li data-filter=".filter-education">Education</li>
              <li data-filter=".filter-tech">Technology</li>
              <li data-filter=".filter-web">Others</li>
            </ul>
          </div>
        </div>
            <div class="row portfolio-container">
              <?php 
                foreach ($buku as $a) {
              ?>
                <div class="col-lg-3 col-md-4 portfolio-item 
                filter-<?php if($a['klasifikasi'] == 'Children') {echo 'app';} 
                        else if($a['klasifikasi'] == 'Pemrograman') {echo 'card';}
                        else if($a['klasifikasi'] == 'Business') {echo 'business';}
                        else if($a['klasifikasi'] == 'Education') {echo 'education';}
                        else if($a['klasifikasi'] == 'Technology') {echo 'tech';}
                        else echo 'web';
                      ?>">
                    <div class="portfolio-wrap">
                    <img  src="<?= base_url('photos/pustakawan/coverbuku/'). $a['cover_book'];?>" height="320px" width="255px" alt="">
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
              <?php } ?>
            </div>
      </div>
    </section><!-- #portfolio -->