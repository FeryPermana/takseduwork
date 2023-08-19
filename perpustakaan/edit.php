<?php
include "koneksi.php";

$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $pengarang_id = $_POST["pengarang_id"];
    $penerbit_id = $_POST["penerbit_id"];
    $katalog_id = $_POST["katalog_id"];
    $tahun_terbit = $_POST["tahun_terbit"];

    $query = "UPDATE buku
              SET judul='$judul', pengarang_id='$pengarang_id', penerbit_id='$penerbit_id', katalog_id='$katalog_id', tahun_terbit='$tahun_terbit'
              WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$query_buku = "SELECT * FROM buku WHERE id='$id'";
$result_buku = mysqli_query($conn, $query_buku);
$data_buku = mysqli_fetch_assoc($result_buku);

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
    <title>Perpustakaan - Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Edit Buku</h1>
        <form method="post">
            <div class="row">
                <div class="col-md-6 mt-2">
                    <label for="judul">Judul:</label>
                    <input type="text" name="judul" id="judul" value="<?php echo $data_buku["judul"]; ?>" class="form-control mt-2">
                </div>
                <div class="col-md-6 mt-2">
                    <label for="pengarang_id"> Pengarang:</label>
                    <select name="pengarang_id" id="pengarang_id" class="form-control mt-2">
                        <?php while ($row = mysqli_fetch_assoc($result_pengarang)) : ?>
                            <option value="<?php echo $row["id"]; ?>" <?php if ($row["id"] == $data_buku["pengarang_id"]) echo "selected"; ?>>
                                <?php echo $row["nama"]; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="penerbit_id"> Penerbit:</label>
                    <select name="penerbit_id" id="penerbit_id" class="form-control mt-2">
                        <?php while ($row = mysqli_fetch_assoc($result_penerbit)) : ?>
                            <option value="<?php echo $row["id"]; ?>" <?php if ($row["id"] == $data_buku["penerbit_id"]) echo "selected"; ?>>
                                <?php echo $row["nama"]; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="katalog_id"> Katalog:</label>
                    <select name="katalog_id" id="katalog_id" class="form-control mt-2">
                        <?php while ($row = mysqli_fetch_assoc($result_katalog)) : ?>
                            <option value="<?php echo $row["id"]; ?>" <?php if ($row["id"] == $data_buku["katalog_id"]) echo "selected"; ?>>
                                <?php echo $row["nama"]; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="tahun_terbit"> Tahun Terbit:</label>
                    <input type="text" name="tahun_terbit" id="tahun_terbit" value="<?php echo $data_buku["tahun_terbit"]; ?>" class="form-control mt-2">
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-between mt-4">
                <a href="index.php" class="btn btn-warning">Kembali ke Daftar Buku</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
        <br>
    </div>
</body>

</html>