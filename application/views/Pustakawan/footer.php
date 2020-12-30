  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>iLib</h3>
            <p>Perpustakaan online yang memudahkan kamu untuk melakukan reservasi buku secara online dan tanpa batas.</p>
          </div>



          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              Gedung Perpustakaan ITS <br>
              ITS, Surabaya<br>

              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> ilib.perpus@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Beri Masukan</h4>
            <p>Jika memiliki Kendala, Silahkan kirim kritik dan saran pada email kami. </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Kirim">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>I-Lib</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }
  </script>

  <script src="<?= base_url(); ?>/asset/NewBiz/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/easing/easing.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/wow/wow.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url(); ?>/asset/NewBiz/aos/aos.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url(); ?>/asset/NewBiz/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url(); ?>/asset/NewBiz/js/main.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url(); ?>/asset/sidebar/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/asset/sidebar/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url(); ?>/asset/sidebar/js/demo/datatables-demo.js"></script>

  </body>

  </html>