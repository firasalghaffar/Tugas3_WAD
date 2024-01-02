<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Data Mahasiswa</h2>

        <!-- Form untuk Input Data -->
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
        </form>

        <!-- Tabel Data Mahasiswa -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>
    </div>
</body>

</html>