<?php
include 'koneksi.php';

// Tambah Donasi
if (isset($_POST['submit'])) {
    $donatur = $_POST['donatur'];
    $donatur_id = $_POST['donatur_id'];
    $paket = $_POST['paket'];
    $kategori = $_POST['kategori'];
    $nominal = $_POST['nominal'];

    $sql = "INSERT INTO donasi (donatur, donatur_id, paket, kategori, nominal) VALUES ('$donatur', '$donatur_id', '$paket', '$kategori', $nominal)";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        echo "
        <script>
            alert('Donasi berhasi dimasukkan');
            document.location.href = 'donasi.php';
        </script>
    ";
    } else {
        echo "
                <script>
                    alert('Donasi gagal dimasukan');
                    document.location.href = 'donasi.php';
                </script>
            ";
    }
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>donatur</title>
    <style>
      body {
        background-color : #EDF1D6;
      }
       .h3{
        text-align : center;
       }
    </style>
</head>
<body>
    <ul>
        <form action="donasi.php" method="post" enctype="multipart/form-data">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="d-flex justify-content-center">
                    <div class="card" style="width: 30rem;">
                        <div class ="card-body">
                            <div class="h3">
                                <h3>Masukkan Data Donatur</h3>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Donatur</label>
                                <input type="text" class="form-control"  name="donatur">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Donatur id</label>
                                <input type="number" class="form-control"  name="donatur_id">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Paket</label>
                                <input type="text" class="form-control"  name="paket">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                <input type="text" class="form-control"  name="kategori">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nominal / Barang</label>
                                <input type="text" class="form-control"  name="nominal">
                        </div>
                        <div class ="card-footer">
                        <button class="btn btn-primary btn-hero mt-3" type="submit" name="submit">Submit</button>
                        <button class="btn btn-primary btn-hero mt-3"><a style="color: white; text-decoration: none;" href="index.php">Kembali</button> </a>
                        </div>                                             
                    </div>
                </div>
            </div>
        </form>
    </ul>
</body>
</html>

