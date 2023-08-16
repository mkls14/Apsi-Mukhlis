<?php
// koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "db_latihan");

function query($query)  {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $row[] =$row;
    }
    return  $rows;
}


function tabah($data){
 
    global $conn;

    $id = $data["id"];
    $username = $data["username"];
    $password = $data["password"];
    $nama = $data["nama"];

    $query = "INSERT INTO user VALUES('$id', '$username', '$password', '$nama')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
    
?>