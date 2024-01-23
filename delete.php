<?php
include "koneksi.php";

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_makanan = $_GET['id'];

    $qry = "DELETE FROM makanan WHERE id_makanan = ?";
    $stmt = mysqli_prepare($koneksi, $qry);
    mysqli_stmt_bind_param($stmt, "s", $id_makanan); 
    $exec = mysqli_stmt_execute($stmt);

    if($exec) {
        echo "<script>alert('Data berhasil dihapus'); window.location = 'home.php'</script>";
    } else {
        echo "Data gagal dihapus";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "ID makanan tidak valid atau tidak terdefinisi.";
}

mysqli_close($koneksi);
?>
