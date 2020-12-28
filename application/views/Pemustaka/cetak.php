<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>iLib | Kartu Anggota <?= $nama;?></title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
    <link rel="stylesheet" href="<?= base_url();?>asset/kartuAnggota/style.css" type="text/css" >
      <!-- Favicons -->
    <link href="<?= base_url();?>/asset/NewBiz/img/favicon.png" rel="icon">
    <link href="<?= base_url();?>/asset/NewBiz/img/apple-touch-icon.png" rel="apple-touch-icon">
    <style>
        @media print {
            #printPageButton {
                display: none;}
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="kontener">
        <div class="kondom-photo">
            <img src="<?= base_url('./photos/pemustaka/') . $photo; ?>" class="profil">
        </div>
        <div class="profil-name"><?= $nama;?></div>
        <p style="margin-top:5px;" class="tentang">NRP  : <?= $nrp;?></p>
        <p class="tentang">No. Hp :<?= $no_hp;?></p>
        <p class="tentang">Departemen :<?= $departemen;?></p>
        <p style="text-align:center; margin-left:0px;"  class="tentang">Kartu ini merupakan tanda sah Keanggotaan Perpustakaan iLib </p>
        <br>
    </div>
    <button onclick="window.print();" id="printPageButton" class="pesan-btn">Cetak</button>
    <!-- partial -->
     
</body>

</html>