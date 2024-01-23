<?php
$id_makanan = $_POST['id_makanan'];
$nama_makanan = $_POST['nama_makanan'];
$harga = $_POST['harga'];

include "koneksi.php";

$qry = "INSERT INTO makanan VALUES (
    '$id_makanan', '$nama_makanan', '$harga'
)";

$exec = mysqli_query($koneksi, $qry);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location = 'home.php';</script>";
} else {
    echo "Data gagal disimpan";
}
?>


