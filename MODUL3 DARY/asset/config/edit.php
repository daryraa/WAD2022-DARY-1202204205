<?php
require "connector.php";


function ubah($data){
    global $connector;

    $id_mobil = $data["id_mobil"];
    $nama_mobil = $data["nama_mobil"];
    $pemilik_mobil = $data["pemilik_mobil"];
    $merk_mobil = $data["merk_mobil"];
    $tanggal_beli = $data["tanggal_beli"];
    $deskripsi = $data["deskripsi"];
    $foto_mobil = $data["foto_mobil"];
    $status_pembayaran = $data["status_pembayaran"];

    mysqli_query($connector, "UPDATE showroom_dary_table SET 

    nama_mobil = '$nama_mobil',
    pemilik_mobil = '$pemilik_mobil',
    merk_mobil = '$merk_mobil',
    tanggal_beli = '$tanggal_beli',
    deskripsi = '$deskripsi',
    foto_mobil = '$foto_mobil',
    status_pembayaran = '$status_pembayaran'
    WHERE id_mobil = $id_mobil
    ");

    

    return mysqli_affected_rows($connector);
}

?>