<?php
include "koneksi.php";

// Menampilkan daftar buku
$query = "SELECT buku.*, pengarang.nama AS nama_pengarang, penerbit.nama AS nama_penerbit, katalog.nama AS nama_katalog
          FROM buku
          LEFT JOIN pengarang ON buku.pengarang_id = pengarang.id
          LEFT JOIN penerbit ON buku.penerbit_id = penerbit.id
          LEFT JOIN katalog ON buku.katalog_id = katalog.id";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Perpustakaan - Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Daftar Buku</h1>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Katalog</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["judul"]; ?></td>
                    <td><?php echo $row["nama_pengarang"]; ?></td>
                    <td><?php echo $row["nama_penerbit"]; ?></td>
                    <td><?php echo $row["nama_katalog"]; ?></td>
                    <td><?php echo $row["tahun_terbit"]; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <a href="tambah.php" class="btn btn-primary">Tambah Buku Baru</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>