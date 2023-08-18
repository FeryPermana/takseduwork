<?php
$nama = "Ferry Permana";
$tinggiBadan = 170;
$beratBadan = 65;

// Konversi tinggi badan ke meter
$tinggiBadanMeter = $tinggiBadan / 100;

// Menghitung BMI
$bmi = $beratBadan / ($tinggiBadanMeter * $tinggiBadanMeter);

// Menentukan status BMI
if ($bmi < 18.5) {
    echo "Halo, " . $nama . ". NIlai BMI anda adalah KURUS";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    echo "Halo, " . $nama . ". NIlai BMI anda adalah SEDANG";
} elseif ($bmi >= 25 && $bmi < 29.9) {
    echo "Halo, " . $nama . ". NIlai BMI anda adalah GEMUK";
} else {
    echo "Halo, " . $nama . ". NIlai BMI anda adalah OBESITAS";
}
