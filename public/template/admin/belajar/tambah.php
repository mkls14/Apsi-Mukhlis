<?php
require 'function.php';

if( isset($_POST["submit"]) ) {
    
    if( tabah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";

    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Akun Mahasiswa</title>
</head>
<body>
    <h1>Tambah Akun Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="id">ID : </label>
                <input type="text" name="id" id="id">
            </li>
            <li>
                <label for="username">User Name : </label>
                <input type="text" name="username" id="username"> 
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="text" name="password" id="password">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>

</body>
</html>