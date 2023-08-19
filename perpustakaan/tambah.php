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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tambah Buku Baru</h1>
        <form method="post">
            <div class="row">
                <div class="col-md-6 mt-2">
                    <label for="judul">
                        Judul:
                    </label>
                    <input type="text" name="judul" id="judul" class="form-control mt-2">
                </div>
                <div class="col-md-6 mt-2">
                    <label for="pengarang_id">
                        Pengarang:
                    </label>
                    <select name="pengarang_id" id="pengarang_id" class="form-control mt-2">
                        <?php while ($row = mysqli_fetch_assoc($result_pengarang)) : ?>
                            <option value="<?php echo $row["id"]; ?>"><?php echo $row["nama"]; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="penerbit_id">Penerbit:</label>
                    <select name="penerbit_id" id="penerbit_id" class="form-control mt-2">
                        <?php while ($row = mysqli_fetch_assoc($result_penerbit)) : ?>
                            <option value="<?php echo $row["id"]; ?>"><?php echo $row["nama"]; ?></option>
                        <?php endwhile; ?>
                    </select><br>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="katalog_id">Katalog:</label>
                    <select name="katalog_id" id="katalog_id" class="form-control mt-2">
                        <?php while ($row = mysqli_fetch_assoc($result_katalog)) : ?>
                            <option value="<?php echo $row["id"]; ?>"><?php echo $row["nama"]; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="tahun_terbit">Tahun Terbit:</label>
                    <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control mt-2">
                </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <a href="index.php" class="btn btn-warning">Kembali ke Daftar Buku</a>
                <input type="submit" value="Tambah" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>