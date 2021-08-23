<?php 


$link = mysqli_connect (
        "localhost", 
        "root", 
        "",
        "db_sekolah");

function query_siswa ($query){
        
        global $link;

        $result = mysqli_query ($link, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc ( $result ) ) {
                $rows [] = $row;
        }
        return $rows;
}

function create_siswa ($post){

        global $link;

        $nis = htmlspecialchars($post["nis"]);
        $nama = htmlspecialchars($post["nama_siswa"]);
        $tgllhr = htmlspecialchars($post["tanggal_lahir"]);
        $jnsk = htmlspecialchars($post["jenis_kelamin"]);


        $query = "INSERT INTO tbl_siswa
                VALUES 
                ('','$nis','$nama','$tgllhr','$jnsk')";
        
        mysqli_query($link, $query);

        return mysqli_affected_rows ($link);

}

function delete_siswa ($id) {
        global $link;

        mysqli_query ($link, "DELETE FROM tbl_siswa WHERE nis=$id");

        return mysqli_affected_rows($link);
}

function update_siswa ($data_siswa) {
        global $link;

        $id = $data_siswa["id"];
        $nis = htmlspecialchars($data_siswa["nis"]);
        $nama = htmlspecialchars($data_siswa["nama_siswa"]);
        $tgllhr = htmlspecialchars($data_siswa["tanggal_lahir"]);
        $jnsk = htmlspecialchars($data_siswa["jenis_kelamin"]);


        $query = "UPDATE tbl_siswa SET 
                nis = '$nis',
                nama_siswa = '$nama',
                tanggal_lahir = '$tgllhr',
                jenis_kelamin = '$jnsk'
                WHERE id = $id
                ";
        mysqli_query($link, $query);

        return mysqli_affected_rows ($link);

}







 ?>