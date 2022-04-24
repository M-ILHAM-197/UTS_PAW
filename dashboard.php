<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tampilan Database</title>
</head>
<body>
    <div class="container mt-3">
    <h1>Tabel</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Alamat</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php
        include "koneksi_uts.php";

        $sql = "SELECT * FROM tbl_ilham";
        $hasil = mysqli_query($koneksi, $sql);

        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_ilham'] ?></td>
                <td><?php echo $row['nama_ilham'];?></td>
                <td><?php echo $row['email_ilham'];?></td>
                <td><?php echo $row['alamat_ilham'];?></td>
                <td><a href="update.php?id=<?=$row['id_ilham']?>"><button type="submit" class="btn btn-primary">Edit</button> <a href="delete.php?id=<?=$row['id_ilham']?>"><button type="submit" class="btn btn-primary">Delete</button></td>
            </tr>
        </tbody>
        <?php }
        ?>
    </table>
    </div>

    <div class="container mt-3">
        <h1>Menambah Data</h1>
        <form action="action_tambah.php" method="post">
            <div class="mb-3 mt-3">
                <label for="nama" class="form-label"> Nama :</label> 
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="nim" class="form-label">  Email :</label> 
                <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" required><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="asal" class="form-label"> Alamat :</label> 
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required><br>
            </div>
            <button type="submit" nama="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>