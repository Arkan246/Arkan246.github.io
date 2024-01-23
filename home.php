<?php
include "koneksi.php";

$qry = "SELECT*FROM makanan";

$exec = mysqli_query($koneksi, $qry);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .table th,
        .table td {
            text-align: center;
        }

        .table thead th {
            background-color: #343a40;
            color: #ffffff;
        }

        .btn {
            margin-right: 5px;
        }

        .btn-edit {
            background-color: #007bff;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-back {
            background-color: #343a40;
            color: #ffffff;
        }

        .btn-back:hover {
            background-color: #23272b;
        }
        .mar{
            margin: 10px;
        }
    </style>
</head>

<body>
        <main role="main">
            <div class="container">
                <div class="text-center">
                    <h2>Data Makanan</h2>
                </div>
                <div class="mar">
                    <a href="input.php">
                        <button class="btn btn-dark btn-lg btn-back">Input Data</button>
                    </a>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID Makanan</th>
                            <th>Nama Makanan</th>
                            <th>Harga</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysqli_fetch_assoc($exec)) { ?>
                            <tr>
                                <td><?= $data['id_makanan'] ?></td>
                                <td><?= $data['nama_makanan'] ?></td>
                                <td><?= $data['harga'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $data['id_makanan'] ?>"><button class="btn btn-primary btn-edit">Edit</button></a>
                                    <a href="delete.php?id=<?= $data['id_makanan'] ?>"><button class="btn btn-danger btn-delete">Delete</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
    
</body>

</html>