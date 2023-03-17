<?php


$data = array("14", "17", "-16", "9", "7", "23", "5", "2", "8", "14", "17");

// sort data dari terkecil
sort($data);

echo "Mengurutkan data dari yang terkecil";
echo "<pre>";
print_r($data);
echo "<pre>";

// sort data dari terbesar
rsort($data);

echo "Mengurutkan data dari yang terbesar";
echo "<pre>";
print_r($data);
echo "<pre>";

// menentukan angka terbesar
echo "Menentukan angka terbesar = ";
echo max($data);
echo "<pre>";

// menentukan angka terkecil
echo "Menentukan angka terkecil = ";
echo min ($data);
echo "<pre>";

// menentukan nilai rata rata
$jumlah_data = array_sum($data);
$avarage = $jumlah_data / 11;

echo "Nilai rata-ratanya adalah $avarage";
echo "<pre>";

// menentukan bilangan ganjil genap
for ( $i=0; $i<=10; $i++ ){
    if ($data[$i] % 2 == 0) {
        echo "<br>"."Bilangan genap = ". $data[$i];
    } else{
        echo "<br>"."Bilangan ganjil = ". $data[$i];
    }
}


?>