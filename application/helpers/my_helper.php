<?php 

function rupiah($angka) {
	$rp = "Rp " . number_format($angka,0,',','.');
	return $rp;
}

function tahun($th) {
	return substr($th,0,4);
}

function generateRandomString($length = 32) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function bonus($params, $gaji){
    $hasil = null;
    if($params > 50 && $params < 70){
        $hasil = 50/100 * $gaji;
    }else if($params > 70 && $params < 85){
        $hasil = 75/100 * $gaji;
    }else if($params > 85){
        $hasil = 100/100 * $gaji;
    }else if($params < 50){
        $hasil = 0;
    }

    return $hasil;
}

