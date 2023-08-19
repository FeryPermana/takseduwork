<?php
$servername = "localhost";
$database = "perpustakaan";
$username = "root";
$password = "";

// koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data buku
$query = "SELECT * FROM buku";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["judul"] . "</td>
                <td>" . $row["pengarang"] . "</td>
                <td>" . $row["tahun_terbit"] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data buku.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>

</body>

</html>