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
  background: #007BFF;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #F5FAFF;
  cursor: pointer;
}
</style>


    <main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Pustakawan</h2>
            <ol>
                <li><a href="index.html">Tambah Buku</a></li>
                <li>Pustakawan</li>
            </ol>
        </div>

    </div>
</section>
<!-- End Breadcrumbs Section -->
<div class="row" style="margin-left: 350px; margin-top: 30px;">

                         <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary text-justify">Tambah Buku</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <?= form_open_multipart('PustakawanCtl/menambahBuku');?>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="nama_buku">Judul Buku</label>
                                      <input type="text" class="form-control" id="nama_buku" placeholder="Judul Buku" name="nama_buku" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="penerbit">Penerbit</label>
                                      <input type="text" class="form-control" id="penerbit" placeholder="Penerbit" name="penerbit" required="required">
                                    </div>
                                  </div>
                                  
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="klasifikasi">Klasifikasi</label>
                                      <input type="text" class="form-control" id="klasifikasi" name="klasifikasi" placeholder="Klasifikasi Buku">
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label for="tahun">Tahun</label>
                                      <input type="text" class="form-control" id="inputZip" placeholder="1999">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="id_author">Penulis</label>
                                      <select id="inputState" class="form-control" name="id_author">
                                        <?php foreach ($author as $a) {?>
                                          <option value="<?= $a['id_author'];?>"><?= $a['nama_author'];?></option>
                                        <?php }?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="form-row">
                                      <label style="margin-left:5px;">Cover Buku</label>  
                                      <div class="form-group col-md-12">
                                            <div class="custom-file">
                                              <label class="custom-file-label" for="customFile">Pilih File Gambar </label>
                                              <input type="file" class="custom-file-input" id="customFile" name="photo">
                                            </div>
                                      </div>
                                    </div>
                                  </div>  
                                  
                                  <div class="slidecontainer">
                                    <input name="stock" type="range" min="1" max="50" value="25" class="slider" id="myRange">
                                    <p>Stock: <span id="demo"></span></p>
                                  </div>
                                  <div class="d-flex justify-content-center">
                                  <button type="submit" value="submit" name="submit" class="btn btn-primary ">Tambah</button>
                                  </div>
                                <?= form_close();?>
                                </div>
                            </div>
                        </div>
                      


</main>
<!-- End #main -->

