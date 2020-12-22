<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>iLib | Daftar</title>
  <link rel="stylesheet" href="<?= base_url();?>asset/loginform/dist/style.css">
  <link href="<?= base_url();?>/asset/NewBiz/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>/asset/NewBiz/img/apple-touch-icon.png" rel="apple-touch-icon">
  <style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}
</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div id="svg_wrap"></div>

 <h1>Tambah Buku</h1>
 <form action="<?= base_url().'index.php/PustakawanCtl/menambahBuku';?>" method="post">
  <section>
    <p>Informasi Personal</p>
    <input type="text" placeholder="Judul Buku" required="required" name="nama_buku"/>
    <input type="text" placeholder="Penerbit" required="required" name="penerbit" />
    <input type="text" placeholder="Klasifikasi" required="required" name="klasifikasi" />
    <input type="text" placeholder="Tahun" required="required" name="tahun" />
      <div class="slidecontainer">
        <input name="stock" type="range" min="1" max="50" value="25" class="slider" id="myRange">
        <p>Stock: <span id="demo"></span></p>
      </div>
      <div class="form-group">
        <label for="id_author">Select list:</label>
        <select class="form-control" id="id_author" name="id_author">
          <?php foreach ($author as $a){?>
              <option value="<?= $a['id_author'];?>"><?= $a['nama_author'];?></option>
          <?php }?>
        </select>
      </div>
  </section>

  <button class="button" type="submit" value="submit" name="submit">Tambah Buku</button>
  
    </form>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script  src="<?= base_url();?>asset/loginform/dist/script.js"></script>
  <script>
  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  output.innerHTML = slider.value;

  slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

</body>
</html>
