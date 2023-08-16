<?php

include "koneksi.php";


$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $_POST['password']);
$level = mysqli_escape_string($koneksi, $_POST['level']);

$cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' and password= '$password'");
$user_valid = mysqli_num_rows($cek_user);

if($user_valid > 0){
        $data = mysqli_fetch_assoc($cek_user);
    if($data['level']=="admin") {
        
        $_SESSION['username'] = $username;
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['level'] = $level;
        header('location:../../template/index.html');
    } 
        elseif($data['level']=="peternak"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $level;
            header('location:../../../dht11post/view.php');
        
    } 
    
    } else{
        echo "<script>alert('masukkan username & password dengan benar!'); document.location='index.php'</script>";
}

?>