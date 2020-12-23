<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>iLib | Masuk</title>
  <link rel="stylesheet" href="<?= base_url();?>asset/loginform/dist/style.css">
  <link href="<?= base_url();?>/asset/NewBiz/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>/asset/NewBiz/img/apple-touch-icon.png" rel="apple-touch-icon">

</head>
<body>
<!-- partial:index.partial.html -->

 <h1 style="margin-top: 120px; color: #fff;">Akses iLib sekarang!</h1>
<form action="<?= base_url(). 'index.php/AccountCtl/masukIn';?>" method="post">
  <section>
  <?= $this->session->flashdata('message');?>
    <p >Silahkan masukan akun anda</p>
    <hr>
    <input style="margin-top: 20px;" type="text" placeholder="Masukan Username Anda" required="required" name="username"/>
    <?= form_error('username', '<small class="text-danger pl-3">', '</small>');?>
    <input style="margin-bottom: 20px;"  type="password" placeholder="Masukan Password Anda" required="required" name="password" />
    <hr>
      
  </section>
    <button class="button" type="submit" value="submit" name="submit">Masuk</button>


  </form>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script  src="<?= base_url();?>asset/loginform/dist/script.js"></script>
  <script>
      $('.custom-file-input').on('change', function() {
          let fileName = $(this).val().split('\\').pop();
          $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });
  </script>

</body>
</html>
