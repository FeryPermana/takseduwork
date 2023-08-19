<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $pengarang_id = $_POST["pengarang_id"];
    $penerbit_id = $_POST["penerbit_id"];
    $katalog_id = $_POST["katalog_id"];
    $tahun_terbit = $_POST["tahun_terbit"];

    $query = "INSERT INTO buku (judul, pengarang_id, penerbit_id, katalog_id, tahun_terbit)
              VALUES ('$judul', '$pengarang_id', '$penerbit_id', '$katalog_id', '$tahun_terbit')";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$query_pengarang = "SELECT * FROM pengarang";
$result_pengarang = mysqli_query($conn, $query_pengarang);

$query_penerbit = "SELECT * FROM penerbit";
$result_penerbit = mysqli_query($conn, $query_penerbit);

$query_katalog = "SELECT * FROM katalog";
$result_katalog = mysqli_query($conn, $query_katalog);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Perpustakaan - Tambah Buku</title>
</head>

<body>
    <h1>Tambah Buku Baru</h1>
    <form method="post">
        Judul: <input type="text" name="judul"><br>
        Pengarang:
        <select name="pengarang_id">
            <?php while ($row = mysqli_fetch_assoc($result_pengarang)) : ?>
                <option value="<?php echo $row["id"]; ?>"><?php echo $row["nama"]; ?></option>
            <?php endwhile; ?>
        </select><br>
        Penerbit:
        <select name="penerbit_id">
            <?php while ($row = mysqli_fetch_assoc($result_penerbit)) : ?>
                <option value="<?php echo $row["id"]; ?>"><?php echo $row["nama"]; ?></option>
            <?php endwhile; ?>
        </select><br>
        Katalog:
        <select name="katalog_id">
            <?php while ($row = mysqli_fetch_assoc($result_katalog)) : ?>
                <option value="<?php echo $row["id"]; ?>"><?php echo $row["nama"]; ?></option>
            <?php endwhile; ?>
        </select><br>
        Tahun Terbit: <input type="text" name="tahun_terbit"><br>
        <input type="submit" value="Tambah">
    </form>
    <br>
    <a href="index.php">Kembali ke Daftar Buku</a>
</body>

</html>