<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>iLib | Daftar</title>
  <link rel="stylesheet" href="<?= base_url();?>asset/loginform/dist/style.css">
  <link href="<?= base_url();?>/asset/NewBiz/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>/asset/NewBiz/img/apple-touch-icon.png" rel="apple-touch-icon">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="svg_wrap"></div>

 <h1>Pengajuan Anggota iLib</h1>
 <?= form_open_multipart('AccountCtl/daftarIn');?>
  <section>
    <p>Informasi Personal</p>
    <input type="text" placeholder="Nama Lengkap" required="required" name="nama"/>
    <input type="text" placeholder="NRP" required="required" name="nrp" />
    <input type="text" placeholder="No. Hp" required="required" name="no_hp" />
    <input type="text" placeholder="Asal Departemen" required="required" name="departemen" />
    <input type="text" placeholder="Alamat" required="required" name="alamat" />
  </section>
  
  <section>
    <p>Informasi Akun</p>
    <input type="text" placeholder="Username" required="required" name="username"/>
    <input type="text" placeholder="email" required="required" name="email"/>
    <input type="password" placeholder="Password" required="required" name="password" />
    <input type="hidden" id="role" name="role" value="1" />
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="photo" name="photo">
      <label class="custom-file-label" for="photo"> </label>
    </div>
  </section>


  <section>
    <h4>Tata Tertib</h4>
    <li>Kartu anggota harus dibawa setiap kali berkunjung.</li>
    <li>Tidak dapat dipinjamkan kepada orang lain.</li>
    <li>Kartu anggota Perpustakaan berlaku seumur hidup.</li>
    <li>Jika kartu hilang, penggantian kartu wajib menyertakan surat keterangan hilang dari kepolisian.</li>
  </section>

    <div class="button" id="prev">&larr; Sebelumnya</div>
  <div class="button" id="next">Selanjutnya &rarr;</div>
  <input class="button" type="submit" id="submit" value="submit"/>

<?= form_close();?>


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
