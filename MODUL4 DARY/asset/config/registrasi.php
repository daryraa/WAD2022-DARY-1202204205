<?php 
require "connector_user.php";
function registrasi($data1){
    global $connector1;
    $email = $data1["email"];
    $nama = $data1["nama"];
    $tel = $data1["tel"];
    $pass = $data1["pass"];
    $konf = $data1["konfirmasi"];
    
    //cek emaail sudah ada atau belum
    $result = mysqli_query($connector1, "SELECT * FROM user_dary WHERE email = '$email' ");

    if (mysqli_fetch_assoc($result)){
        echo
            "<script>
                alert('Email sudah terdaftar')        
            </script>";
        return false;
    }

    // cek konfirmasi pass
    if ($pass !== $konf){
        echo 
        "<script>
            alert('Konfirmasi Password tidak sesuai')
        </script>";
        return false;
    }
    
    // enkripsi password opsional
    // $pass = password_hash($pass, PASSWORD_DEFAULT);

    $query1 = "INSERT INTO user_dary VALUES (NULL,'$nama','$email','$pass','$tel')";

    mysqli_query($connector1, $query1);

    return mysqli_affected_rows($connector1);
}

?>
