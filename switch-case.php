<?php
$a = 2;
switch($a) {
    case 0:
    echo "nilai nol";
    break;
    case 1:
    echo "nilai satu";
    break;
    case 2:
    echo "nilai dua";
    break;
    default:
    echo "nilai tidak ditemukan";
    break;
}

$warna = "merah";

switch ($warna) {
    case "merah":
        echo "Warna favorit anda adalah merah.";
        break;
    case "kuning":
        echo "Warna favorit anda adalah kuning.";
        break;
    case "hijau":
        echo "Warna favorit anda adalah hijau.";
        break;
    case "biru":
        echo "Warna favorit anda adalah biru.";
        break;
    case "ungu":
        echo "Warna favorit anda adalah ungu.";
        break;
    default:
        echo "Warna favorit anda tidak ada.";
}