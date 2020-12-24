<section id="portfolio" class="clearfix">
<br>
        <br>
      <div class="container">  
        <header class="section-header">
          <h3 class="section-title">Keranjang Peminjaman</h3>
          <?php if (!isset($_SESSION['cart']) || count($_SESSION['cart'])==0) { ?>
          <p> Keranjang peminjaman anda masih kosong <p>
          <?php }else if(isset($_SESSION['cart'])){ 
            ?>
            <div>
                <button><a class="btn-get-started scrollto" href=<?php echo base_url().'index.php/PemustakaCtl/hapusKeranjang';?>>Hapus Keranjang</a></button>
            </div>
            <div>
                <button><a class="btn-get-started scrollto" href=<?php echo base_url().'index.php/PemustakaCtl/reservasiBuku';?>>Reservasi Buku</a></button>
            </div>
        </header>
        <br>

        <div class="row portfolio-container">
        <?php 
                foreach ($buku as $a){
                    for ($index=0; $index < count($_SESSION['cart']); $index++){
                        if (isset($_SESSION['cart'][$index]) && $a['id_buku']==$_SESSION['cart'][$index]){
                    
                     ?>
          <div class="col-lg-3 col-md-4 portfolio-item">
                <div class="portfolio-wrap">
                    <img  src="<?= base_url('photos/pustakawan/coverbuku/'). $a['cover_book'];?>" height="320px" width="255px" alt="">
                    <div class="portfolio-info">
                        <a style="color: antiquewhite; font-weight: bold;" href="#"><?= $a['nama_buku'] ?></a>
                        <a style="color: antiquewhite;"><?= $a['nama_author'] ?></a>
                        <a style="color: antiquewhite;"><?= $a['penerbit'] ?></a>
                        <a style="color: antiquewhite;"><?= $a['tahun'] ?></a>
                        <div>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
          </div>
          <?php        
 
                }
            }   
                }}
                

            ?> 

        </div>

      </div>
    </section><!-- #portfolio -->