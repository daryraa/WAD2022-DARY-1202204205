<?php
require "connector.php"; 
    
function tambah($data) {
    global $connector;
    $nama_mobil = $data["nama_mobil"];
    $pemilik_mobil = $data["pemilik_mobil"];
    $merk_mobil = $data["merk_mobil"];
    $tanggal_beli = $data["tanggal_beli"];
    $deskripsi = $data["deskripsi"];

    $foto_mobil = upload();
    if(!$foto_mobil){
        false;
    }
    $status_pembayaran = $data["status_pembayaran"];

    $query = "INSERT INTO showroom_dary_table VALUES (NULL,'$nama_mobil','$pemilik_mobil','$merk_mobil','$tanggal_beli','$deskripsi','$foto_mobil','$status_pembayaran')";

    mysqli_query($connector, $query);

    return mysqli_affected_rows($connector);
}

function upload(){
    $namafile = $_FILES['foto_mobil']['name'];
    $ukuranfile=$_FILES['foto_mobil']['size'];
    $error=$_FILES['foto_mobil']['error'];
    $tmpName=$_FILES['foto_mobil']['tmp_name'];

    if($error === 4){
        echo "<script>
                alert('Pilih gambar dulu');
        </script>";
        return false;
    }

    $ekstensi=['jpg','png','jpeg'];
    $ekstensi1 = explode('.',$namafile);
    $ekstensi1 = strtolower(end($ekstensi1));

    if(!in_array($ekstensi1, $ekstensi)){
        echo "<script>
                alert('Bukan gambar');
        
        </script>";
        return false;
    }

    move_uploaded_file($tmpName, '../images/'. $namafile);
    return $namafile;


}





?>
