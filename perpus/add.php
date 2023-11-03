<?php
include 'function.php';

//mengecek apakah submit berfungsi
if (isset ($_POST["submit"])){
    
    //ambil data dari tiap elemen di form
    
    if(add($_POST > 0)) {
        echo "data berhasil ditambahkan";

    }

    else {
        echo "data gagal ditambahkan";
    }



}


function add() {
    global $conn;
    $nama = $_POST["nama"];
    $tahun_penerbitan = $_POST["tahun_penerbitan"]
}