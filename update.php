<?php
$id_makanan = $_POST['id_makanan'];
$nama_makanan = $_POST['nama_makanan'];
$harga = $_POST['harga'];

include "koneksi.php";

    // Jika tidak ada file yang diunggah, lakukan update data tanpa mengubah foto
    $qry = "UPDATE makanan SET 
            nama_makanan = '$nama_makanan',
            harga = '$harga'
            WHERE id_makanan = '$id_makanan'";

$exec = mysqli_query($koneksi, $qry);

if ($exec) {
    echo "<script>alert('Data berhasil diupdate'); window.location = 'home.php';</script>";
} else {
    echo "Data gagal disimpan";
}

mysqli_close($koneksi);
?>
