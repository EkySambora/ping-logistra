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

