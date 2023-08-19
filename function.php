<?php
function hitungVolumeKubus($sisi)
{
    return pow($sisi, 3);
}

function hitungLuasPermukaanKubus($sisi)
{
    return 6 * pow($sisi, 2);
}

function hitungVolumeBola($radius)
{
    return (4 / 3) * M_PI * pow($radius, 3);
}

function hitungLuasPermukaanBola($radius)
{
    return 4 * M_PI * pow($radius, 2);
}

function hitungVolumeSilinder($radius, $tinggi)
{
    return M_PI * pow($radius, 2) * $tinggi;
}

function hitungLuasPermukaanSilinder($radius, $tinggi)
{
    return 2 * M_PI * $radius * ($radius + $tinggi);
}

function hitungLuasPersegiPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}

function hitungLuasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

function hitungVolumeBalok($panjang, $lebar, $tinggi)
{
    return $panjang * $lebar * $tinggi;
}

function hitungVolumePrismaSegitiga($luasAlas, $tinggiPrisma)
{
    return $luasAlas * $tinggiPrisma;
}



$kubusVolume = hitungVolumeKubus(5);
$kubusLuasPermukaan = hitungLuasPermukaanKubus(5);
$balokVolume = hitungVolumeBalok(6, 4, 5);
$bolaVolume = hitungVolumeBola(3);
$bolaLuasPermukaan = hitungLuasPermukaanBola(3);
$silinderVolume = hitungVolumeSilinder(2, 6);
$silinderLuasPermukaan = hitungLuasPermukaanSilinder(2, 6);
$persegiPanjangLuas = hitungLuasPersegiPanjang(4, 8);
$segitigaLuas = hitungLuasSegitiga(6, 10);
$volumePrismaSegitiga = hitungVolumePrismaSegitiga(20, 8);

echo "Volume Kubus: " . $kubusVolume . "<br>";
echo "Volume Bola: " . $bolaVolume . "<br>";
echo "Volume Silinder: " . $silinderVolume . "<br>";
echo "Volume Balok: " . $balokVolume . "<br>";
echo "Volume Prisma Segitiga: " . $volumePrismaSegitiga . "<br>";
echo "Luas Permukaan Kubus: " . $kubusLuasPermukaan . "<br>";
echo "Luas Permukaan Bola: " . $bolaLuasPermukaan . "<br>";
echo "Luas Permukaan Silinder: " . $silinderLuasPermukaan . "<br>";
echo "Luas Persegi Panjang: " . $persegiPanjangLuas . "<br>";
echo "Luas Segitiga: " . $segitigaLuas . "<br>";
