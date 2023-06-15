<div id="label-page"><h3>DAFTAR BEASISWA</h3></div>
<div id="content">
    <div id="container">

    <form action="proses/daftar-proses.php" method="post" enctype="multipart/form-data" class="was-validated">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Username:</label>
    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Masukkan Nama!.</div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Masukkan email yang valid!</div>
  </div>

  
  <div class="mb-3 mt-3">
    <label for="nohp" class="form-label">Nomor Handphone:</label>
    <input type="number" class="form-control" id="nohp" placeholder="0812-1212-1212" name="nohp" required>
  </div>
  
  <div class="mb-3">
      <label for="semester" class="form-label">Semester:</label>
      <select class="form-select form-select-lg" name="semester" id="semester" required placeholder="Pilih Semseter">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>

        </select>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Pilih semester!</div>
    </div>

    <div class="mb-3">
    <label for="ipk" class="form-label">Index Prestasi Kumulatif(IPK):</label>
    <input type="text" readonly class="form-control"  id="ipk" placeholder="Masukkan IPK" name="ipk" required 
    <?php 
    $ipk = array(3.4, 2.9);
    $value= array_rand($ipk, 1 );
    // array_rand($ipk, 1 );
    ?>
    value="<?php echo $ipk[$value];?>"
    >
    
  </div>

  <div class="mb-3">
    <label for="pilihan" class="form-label">Pilihan</label>
    <select class="form-select form-select-lg" name="pilihan" id="pilihan">
        <option value="AKADEMIK">AKADEMIK</option>
        <option value="NON-AKADEMIK">NON-AKADEMIK</option>
    </select>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback"></div>
  </div>

  <div class="mb-3">
    <label for="syarat" class="form-label">Upload Syarat</label>
    <input type="file" class="form-control" name="syarat" id="syarat" placeholder="Pilih File" aria-describedby="fileHelpId" required>
    <!-- <div id="fileHelpId" class="form-text">Help text</div> -->
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Masukkan File Peryaratan</div>
  </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck" name="setuju" required>
      <label class="form-check-label" for="myCheck">Saya telah menyetujui syarat & ketentuan</label>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Klik untuk menyetujui.</div>
    </div>


    <button type="submit" 
    class="btn btn-primary
    <?php
    if($ipk[$value] < 3.0){
        echo "disabled";
        
    }
    ?>
    " name="simpan">Submit</button>
    
</form>

    

    </div>
  
</div>
