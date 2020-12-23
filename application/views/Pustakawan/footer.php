 
 <!-- ======= Footer ======= -->
 
 <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>iLib</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat
                            mauris nunc congue.</p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br> New York, NY 535022<br> United States <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
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
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>iLib</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url();?>/asset/sidebar/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>/asset/sidebar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url();?>/asset/sidebar/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url();?>/asset/sidebar/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url();?>/asset/sidebar/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url();?>/asset/sidebar/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url();?>/asset/sidebar/js/demo/chart-pie-demo.js"></script>

    <!-- Vendor JS Files -->
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url();?>/asset/NewBiz/assets/vendor/aos/aos.js"></script>

    <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
        output.innerHTML = this.value;
        }
    </script>

    <script>
      $('.custom-file-input').on('change', function() {
          let fileName = $(this).val().split('\\').pop();
          $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });
    </script>


    <!-- Template Main JS File -->
    <script src="<?= base_url();?>/asset/NewBiz/assets/js/main.js"></script>

</body>

</html>