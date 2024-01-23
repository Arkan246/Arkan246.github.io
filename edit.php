<?php
$id_makanan = $_GET['id']; // Ubah nim menjadi id_makanan
include "koneksi.php";

$qry = "SELECT * FROM makanan WHERE id_makanan = '$id_makanan'"; // Ubah nim menjadi id_makanan
$exec = mysqli_query($koneksi, $qry);
$data = mysqli_fetch_assoc($exec);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend class="text-center">Edit Data Makanan</legend>
                    <h2 class="text-center">Lengkapi informasi dengan benar</h2>
                    <div class="form-group">
                        <label for="id_makanan">ID Makanan</label>
                        <input type="text" class="form-control" name="id_makanan" value="<?= $data['id_makanan'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_makanan">Nama Makanan</label>
                        <input type="text" class="form-control" name="nama_makanan" value="<?= $data['nama_makanan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga" value="<?= $data['harga'] ?>">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>
