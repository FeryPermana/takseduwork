<?php
$json_data = '[
    {
        "nama": "Pelita",
        "kelas": "Laravel",
        "alamat": "Bandung",
        "tanggal_lahir": "1997-12-27",
        "nilai": 90
    },
    {
        "nama": "Najmina",
        "kelas": "Vue JS",
        "alamat": "Jakarta",
        "tanggal_lahir": "1998-10-07",
        "nilai": 55
    },
    {
        "nama": "Anita",
        "kelas": "Design",
        "alamat": "Semarang",
        "tanggal_lahir": "1999-08-20",
        "nilai": 80
    },
    {
        "nama": "Bayu",
        "kelas": "Digital Marketing",
        "alamat": "Bandung",
        "tanggal_lahir": "1990-01-01",
        "nilai": 65
    },
    {
        "nama": "Nasa",
        "kelas": "UI/UX Designer",
        "alamat": "Bandung",
        "tanggal_lahir": "1995-04-10",
        "nilai": 70
    },
    {
        "nama": "Rahma",
        "kelas": "Node JS",
        "alamat": "Yogyakarta",
        "tanggal_lahir": "1993-09-15",
        "nilai": 85
    }
]';

$data = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data JSON dalam Tabel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2>Data JSON dalam Tabel</h2>

    <table>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <?php foreach ($data as $item) : ?>
            <?php
            $nilai = "";
            if ($item['nilai'] >= 90) {
                $nilai = "A";
            } elseif ($item['nilai'] <= 90 && $item['nilai'] >= 60) {
                $nilai = "B";
            } elseif ($item['nilai'] <= 60 && $item['nilai'] >= 40) {
                $nilai = "C";
            } elseif ($item['nilai'] <= 40 && $item['nilai'] >= 0) {
                $nilai = "D";
            }
            ?>
            <tr>
                <td><?php echo $item["nama"]; ?></td>
                <td><?php echo $item["kelas"]; ?></td>
                <td><?php echo $item["alamat"]; ?></td>
                <td><?php echo $item["tanggal_lahir"]; ?></td>
                <td><?php echo $item["nilai"]; ?></td>
                <td><?php echo $nilai ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>