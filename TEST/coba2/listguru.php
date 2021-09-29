<?php 
    require 'fungsi.php' ;
    $guru = query_siswa("SELECT * FROM tbl_guru");


    if (isset($_POST["cari_guru"])) {
        $guru = cari_guru ($_POST ["keyword_guru"]);

    }

 ?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Halaman Admin</title>
     <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Halaman Admin</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="listsiswa.php" class="nav-link" aria-current="page">Daftar Siswa</a></li>
        <li class="nav-item"><a href="listguru.php" class="nav-link active">Daftar Guru</a></li>
        <li class="nav-item"><a href="listmapel.php" class="nav-link">Jadwal Pelajaran</a></li>
      </ul>
    </header>
  </div>
</head>
<body>         
    <br>
    <br>
<div class="container">
    <div class="card mt-3">
                    <div class="card-header bg-primary text-white">
                        Data Informasi Guru
                    </div>
                    <div class="card-body">
                                    <table>
                                    <tr>
                                        <td>
                                            <a href = "create_guru.php"><button class="btn btn-primary me-md-2" type="button">Tambah Data Guru</button></a>
                                        </td>
                                        <td>
                                            <form  action="" method="post">
                                                <input type="text" name="keyword_guru" placeholder="Ketik Nama" autocomplete="off"> 
                                                <button class="btn btn-primary me-md-2" type="submit" name="cari_guru">Cari</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </table>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-strpied">
                                        <tr class="table-primary">
                                            <th>Aksi</th>
                                            <th>NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                        </tr>
                                    <?php foreach ( $guru as $show ):  ?>
                                        <tr class="table-info">
                                            <td>
                                                <a href="update_guru.php?id_guru=<?= $show ["NIP"]; ?>"><button type="button" class="btn btn-success">Ubah</button></a> |
                                                <a href="delete_guru.php?id_guru=<?= $show ["NIP"]; ?>" onclick="return confirm('Yakin Menghapus Data ?');"><button type="button" class="btn btn-danger">Hapus</button></a>
                                            </td>
                                            <td> <?= $show ["NIP"] ?> </td>
                                            <td> <?= $show ["nama"] ?> </td>
                                            <td> <?= $show ["tanggal_lahir"] ?> </td>
                                            <td> <?= $show ["jenis_kelamin"] ?></td>
                                            <td> <?= $show["alamat"] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                        </table>
                    </div>
        </div>
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

