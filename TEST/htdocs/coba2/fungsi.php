<?php 


$link = mysqli_connect (
        "localhost", 
        "root", 
        "",
        "db_sekolah");

function query ($query){
        
        global $link;

        $result = mysqli_query ($link, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc ( $result ) ) {
                $rows [] = $row;
        }
        return $rows;
}

function create ($post){

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

function delete ($id) {
        global $link;

        mysqli_query ($link, "DELETE FROM tbl_siswa WHERE nis=$id");

        return mysqli_affected_rows($link);
}







 ?>