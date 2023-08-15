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
  <h2>Formulir Biodata</h2>
  <form action="proses_insert.php" method="POST" enctype="multipart/form-data">
    <div class="col-5 mb-3 mt-3">
      <label for="nim">NIM :</label>
      <input type="number" class="form-control" name="nim">
    </div>
    <div class="col-5 mb-3">
      <label for="nama">Nama :</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="col-5 mb-3">
      <label for="jurusan">jurusan :</label>
      <select name="jurusan" class="form-select">
        <?php
            include "koneksi.php";
            $qry = mysqli_query($con,"SELECT * FROM jurusan");
            while($data=mysqli_fetch_assoc($qry)){
        ?>
        <option value="<?= $data['kode_jurusan'] ?>"><?= $data['nama_jurusan'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col-5 mb-3">
      <label for="jk">Jenis Kelamin :</label><br>
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" name="gender" value="1" checked>
          <label class="form-check-label" for="gender1">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" name="gender" value="0">
          <label class="form-check-label" for="gender2">Perempuan</label>
        </div>
    </div>
    <div class="col-5 mb-3">
      <label for="alamat">Alamat :</label>
      <input type="text" class="form-control" name="alamat">
    </div>
    <div class="col-5 mb-3">
      <label for="no_hp">No. HP :</label>
      <input type="number" class="form-control" name="no_hp">
    </div>
    <div class="col-5 mb-3">
      <label for="email">Email :</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="col-5 mb-3">
      <label for="foto">Foto :</label>
      <input type="file" class="form-control" name="foto">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="container mt-3">
  <h2>Biodata Mahasiswa</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Gender</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Foto</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $qry = "SELECT nim,nama_mhs,gender,no_hp,alamat,email,nama_jurusan,nama_foto FROM mahasiswa a 
            INNER JOIN jurusan b on a.kode_jurusan = b.kode_jurusan;";
            $exec = mysqli_query($con,$qry);
            while($data = mysqli_fetch_assoc($exec)){
        ?>
      <tr>
        <td><?= $data['nim'] ?></td>
        <td><?= $data['nama_mhs'] ?></td>
        <td><?= $data['nama_jurusan'] ?></td>
        <td><?= $data['gender'] == 1 ? 'Laki-laki' : 'Perempuan' ?></td>
        <td><?= $data['alamat'] ?></td>
        <td><?= $data['no_hp'] ?></td>
        <td><?= $data['email'] ?></td>
        <td><img src="uploads/<?= $data['nama_foto'] ?>" alt="Foto" width="40px"></td>
        <td>
            <a href="edit.php?nim=<?= $data['nim'] ?>"><button>Edit</button></a>
            <a href="delete.php?nim=<?= $data['nim'] ?>"><button>Delete</button></a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
