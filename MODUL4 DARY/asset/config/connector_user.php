<?php

$connector1 = mysqli_connect("localhost","root","","wad_modul4_dary");

function query1($query1){
    global $connector1;
    $showroom1 = mysqli_query($connector1, $query1);
    $rows1 = [];
    while($row1 = mysqli_fetch_assoc($showroom1)){
        $rows1[] = $row1;
    }
    return $rows1;
}

$connector = mysqli_connect("localhost","root","","modul3");

function query($query){
    global $connector;
    $showroom = mysqli_query($connector, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($showroom)){
        $rows[] = $row;
    }
    return $rows;
}
?>