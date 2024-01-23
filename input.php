<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="proses.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend class="text-center">Form Input Data Mahasiswa</legend>
                    <h2>Lengkapi biodata dengan benar</h2>
                    <div class="form-group">
                        <label for="id_makanan">Id Makanan</label>
                        <input type="number" class="form-control" id="id_makanan" name="id_makanan">
                    </div>
                    <div class="form-group">
                        <label for="nama_makanan">Nama Makanan</label>
                        <input type="text" class="form-control" id="nama_makanan" name="nama_makanan">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>
