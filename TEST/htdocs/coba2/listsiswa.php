<?php 
    require 'fungsi.php' ;
    $siswa = query("SELECT * FROM tbl_siswa");


 ?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Halaman Admin</title>
     <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Halaman Admin</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="listsiswa.php" class="nav-link active" aria-current="page">Daftar Siswa</a></li>
        <li class="nav-item"><a href="listguru.php" class="nav-link">Daftar Guru</a></li>
        <li class="nav-item"><a href="listmapel.php" class="nav-link">Jadwal Pelajaran</a></li>
      </ul>
    </header>
  </div>
</head>
<body>
    <h1 align="center">Daftar Siswa</h1>
    
         
    <br>
    <br>
    <table class = "tabel" align="center" border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>
            <a href = "create.php"><button class="btn btn-primary me-md-2" type="button">Tambah Data Siswa</button></a>
        </td>
    </tr>
        <tr>
            <th>Aksi</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
        </tr>
    <?php foreach ( $siswa as $show ):  ?>
        <tr>
            <td>
                <a href="">Ubah</a> |
                <a href="delete.php?id=<?= $show ["nis"]; ?>" onclick="return confirm('yakin?');"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
            <td> <?= $show ["nis"] ?> </td>
            <td> <?= $show ["nama_siswa"] ?> </td>
            <td> <?= $show ["tanggal_lahir"] ?> </td>
            <td> <?= $show ["jenis_kelamin"] ?></td>
        </tr>
    <?php endforeach ?>

    </table>
        <br>
        <br>
        <br>

    <div class="container">

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-bottom">
    <span align = "bottom" class="text-muted" >&copy; 2021 Company, Inc</span>
    
  </footer>
</div>
</body>
</html>

