<?php 

require 'fungsi.php';

	$id = $_GET["id"];

	if (delete_siswa($id) > 0) {
		echo"<script>
			alert('Data Berhasil Dihapus');
			document.location.href = 'listsiswa.php';
		</script>";
	} else {
		echo"<script>
			alert('Data Gagal Dihapus');
			document.location.href = 'listsiswa.php';
		</script>";

	}


 ?>