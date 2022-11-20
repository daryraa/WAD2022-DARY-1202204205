<?php

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