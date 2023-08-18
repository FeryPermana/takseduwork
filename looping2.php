<?php
$classes = [
    [
        'nama' => 'Name ke 1',
        'kelas' => 'Kelas 10'
    ],
    [
        'nama' => 'Name ke 2',
        'kelas' => 'Kelas 9'
    ],
    [
        'nama' => 'Name ke 3',
        'kelas' => 'Kelas 8'
    ],
    [
        'nama' => 'Name ke 4',
        'kelas' => 'Kelas 7'
    ],
    [
        'nama' => 'Name ke 5',
        'kelas' => 'Kelas 6'
    ],
    [
        'nama' => 'Name ke 6',
        'kelas' => 'Kelas 5'
    ],
    [
        'nama' => 'Name ke 7',
        'kelas' => 'Kelas 4'
    ],
    [
        'nama' => 'Name ke 8',
        'kelas' => 'Kelas 3'
    ],
    [
        'nama' => 'Name ke 9',
        'kelas' => 'Kelas 2'
    ],
    [
        'nama' => 'Name ke 10',
        'kelas' => 'Kelas 1'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }

        th {
            background-color: blue;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

</body>

</html>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($classes as $class) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $class['nama']; ?></td>
                <td><?= $class['kelas']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>