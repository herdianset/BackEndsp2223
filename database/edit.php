<?php
include "koneksi.php";
$nim = $_GET['nim'];
$qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-sm mt-5">
  <h2>Edit Biodata</h2>
  <form action="proses_update.php" method="POST">
    <div class="col-5 mb-3 mt-3">
      <label for="nim">NIM :</label>
      <input type="number" class="form-control" name="nim" readonly value="<?= $data['nim'] ?>">
    </div>
    <div class="col-5 mb-3">
      <label for="nama">Nama :</label>
      <input type="text" class="form-control" name="nama" value="<?= $data['nama_mhs'] ?>">
    </div>
    <div class="col-5 mb-3">
      <label for="jurusan">jurusan :</label>
      <select name="jurusan" class="form-select">
        <option value="J01">Sistem Komputer</option>
        <option value="J02">Sistem Informasi</option>
        <option value="J03">Teknologi Informasi</option>
      </select>
    </div>
    <div class="col-5 mb-3">
      <label for="jk">Jenis Kelamin :</label><br>
      <?php if($data['gender'] == 1){ ?>
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" name="gender" value="1" checked>
          <label class="form-check-label" for="gender1">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" name="gender" value="0">
          <label class="form-check-label" for="gender2">Perempuan</label>
        </div>
        <?php }else{ ?>
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" name="gender" value="1">
          <label class="form-check-label" for="gender1">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" name="gender" value="0" checked>
          <label class="form-check-label" for="gender2">Perempuan</label>
        </div>
        <?php } ?>
    </div>
    <div class="col-5 mb-3">
      <label for="alamat">Alamat :</label>
      <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>">
    </div>
    <div class="col-5 mb-3">
      <label for="no_hp">No. HP :</label>
      <input type="number" class="form-control" name="no_hp" value="<?= $data['no_hp'] ?>">
    </div>
    <div class="col-5 mb-3">
      <label for="email">Email :</label>
      <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
