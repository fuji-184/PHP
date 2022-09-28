<!doctype html>
<html lang="en">
  <head>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2 - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


  </head>
  <body style="padding:0 100px 0 100px">
    <form method="POST">
      <div class="form-group">
      <div class="col-md-4 mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="" required>
      </div>
      <div class="col-md-4 mb-3">
      <select class="custom-select" name="agama" required>
        <option value="">-- Agama --</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
      </select>
    </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jabatan" value="Manager" required>
        <label class="form-check-label">
          Manager
        </label>
      </div>
      <div class="col-md-4 mb-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jabatan" value="Asisten Manager" required>
        <label class="form-check-label">
          Asisten Manager
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jabatan" value="kabag" required>
        <label class="form-check-label">
         Kabag
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jabatan" value="staff" required>
        <label class="form-check-label">
          Staff
        </label>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label>Status</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Menikah" name="status" id="defaultCheck1" required>
        <label class="form-check-label">
          Menikah
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Belum Menikah" name="status">
        <label class="form-check-label">
         Belum Menikah
        </label>
      </div>
    </div>
      <div class="col-md-4 mb-3">
        <label>Jumlah Anak</label>
        <input type="text" class="form-control" placeholder="Jumlah Anak" value="" name="jumlah_anak">
      </div>
      <button class="btn btn-primary" name="proses" type="submit">Submit</button>
    </div>
    </form>
   
    <?php
    if (isset($_POST['proses'])) {
      //tangkap data
      $nama = $_POST['nama'];
      $agama = $_POST['agama'];
      $jabatan = $_POST['jabatan'];
      $status = $_POST['status'];
      $jumlahAnak = $_POST['jumlah_anak'];

      //gaji pokok
      switch ($jabatan) {
        case "Manager":
          $gajiPokok = 20000000;
          break;
        case "Asisten Manager":
          $gajiPokok = 15000000;
          break;
        case "Kabag":
          $gajiPokok = 10000000;
          break;
        case "Staff":
          $gajiPokok = 4000000;
          break;
      }
      //tunjangan jabatan
      $tunjanganJabatan = 20/100 * $gajiPokok;
      //tunjangan keluarga
      if($status == "Menikah" && $jumlahAnak <= 2){
        $tunjanganKeluarga = 5/100 * $gajiPokok;
      }
      else if($status == "Menikah" && $jumlahAnak >= 3 && $jumlahAnak <= 5){
        $tunjanganKeluarga = 10/100 * $gajiPokok;
      }
      else if($status == "Menikah" && $jumlahAnak >= 5){
        $tunjanganKeluarga = 15/100 * $gajiPokok;
      }
      else {
        $tunjanganKeluarga = 0;
      }
      //zakat profesi
      $zakatProfesi = ($agama == "Islam" && $gajiPokok >= 6000000)? 2.5/100 * $gajiPokok : 0;
      //take home pay
      $takeHomePay = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga + $zakatProfesi;
     
     //cetak
     echo "<div class='container' style='background-color:lightblue; margin-top: 100px; border-radius:10px'>
    <div class='row'>
      <div class='col'>Nama</div>
      <div class='col'>: ".$nama."</div>
    </div>
    <div class='row'>
      <div class='col'>Agama</div>
      <div class='col'>: ".$agama."</div>
    </div>
    <div class='row'>
      <div class='col'>Jabatan</div>
      <div class='col'>: ".$jabatan."</div>
    </div>
    <div class='row'>
      <div class='col'>Status</div>
      <div class='col'>: ".$status."</div>
    </div>
    <div class='row'>
      <div class='col'>Jumlah Anak</div>
      <div class='col'>: ".$jumlahAnak."</div>
    </div>
    <div class='row'>
      <div class='col'>Gaji Pokok</div>
      <div class='col'>: Rp".number_format($gajiPokok,2,",",".")."</div>
    </div>
    <div class='row'>
      <div class='col'>Tunjangan Jabatan</div>
      <div class='col'>: Rp".number_format($tunjanganJabatan,2,",",".")."</div>
    </div>
    <div class='row'>
      <div class='col'>Tunjangan Keluarga</div>
      <div class='col'>: Rp".number_format($tunjanganKeluarga,2,",",".")."</div>
    </div>
    <div class='row'>
      <div class='col'>Zakat Profesi</div>
      <div class='col'>: Rp".number_format($zakatProfesi,2,",",".")."</div>
    </div>
    <div class='row'>
      <div class='col'>Take Home Pay</div>
      <div class='col'>: Rp".number_format($takeHomePay,2,",",".")."</div>
    </div>
  </div>";
    }
    else {
      $nama = "";
      $agama ="";
      $jabatan ="";
      $status="";
      $jumlahAnak=0 ;
    }
    ?>
  
   
  </body>
</html>