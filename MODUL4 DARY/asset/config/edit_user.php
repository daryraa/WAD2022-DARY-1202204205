<?php

function profil($data1){
    global $connector1;

    $id = $data1["id"];
    $email = $data1["email"];
    $nama = $data1["nama"];
    $tel = $data1["tel"];
    $pass = $data1["passwords"];

    mysqli_query($connector1, "UPDATE `user_dary` SET 
    email = '$email',
    nama = '$nama',
    passwords = '$pass',
    no_hp = '$tel'
    WHERE `id` = '$id'
    ");
    return mysqli_affected_rows($connector1);
}


?>