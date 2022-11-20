<?php
require "connector.php";

$id_mobil = $_GET["id_mobil"];

if(hapus($id_mobil)>0){
  echo "
  <script>
  alert('data berhasil dihapus')
  document.location.href = '../pages/ListCar-Dary.php';
  </script>";

}else {
        echo " 
        <script>
            alert('Data gagal dihapus')
            document.location.href = '../pages/ListCar-Dary.php';
        </script>";
    }
 function hapus($id_mobil){
    global $connector;
    mysqli_query($connector, "DELETE FROM showroom_dary_table WHERE showroom_dary_table.id_mobil = $id_mobil");
    return mysqli_affected_rows($connector);
 }
?>