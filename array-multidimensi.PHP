<?php

$dataPegawai = array(
    array(
        "nama" => "Budi",
        "nik" => "00001",
        "jenis_kelamin" => "pria",
        "alamat" => "rajeg",
    ),
    array(
        "nama" => "Desi",
        "nik" => "00002",
        "jenis_kelamin" => "wanita",
        "alamat" => "tangerang",
    ),
    array(
        "nama" => "Umam",
        "nik" => "00003",
        "jenis_kelamin" => "pria",
        "alamat" => "rawa burung",
    ),
    array(
        "nama" => "Siska",
        "nik" => "00004",
        "jenis_kelamin" => "wanita",
        "alamat" => "sepatan",
    )
);

$filter = "pria";
$filter2 = "wanita";
    $new_array = array_filter($dataPegawai, function($var) use ($filter){
        return ($var['jenis_kelamin'] == $filter);
    });
    $new_array2 = array_filter($dataPegawai, function($var) use ($filter2){
        return ($var['jenis_kelamin'] == $filter2);
    });
    
    echo "<pre>";
    echo "Pria = ";
    print_r($new_array);
    echo "Wanita = ";
    print_r($new_array2);


// foreach($dataPegawai as $pegawai => $data)
// 	{
// 		echo $pegawai;
// 		echo "<br/>";
// 		foreach($data as $key => $value)
// 		{
// 			echo $key." = ".$value;
// 			echo "<br/>";
//         }
//         echo "<hr/>";
// 	}

?>