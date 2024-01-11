<?php
$hots = "localhost";
$user = "root";
$pass = "";
$db   = "kantor";

$mysqli = new mysqli($hots, $user, $pass, $db);

if ($mysqli->connect_error) {
    echo "gagal terkoneksi". $mysqli->connect_error;
}


//#mengahapus dan mengupdate data
//menghapus data
// $sql = "DELETE FROM karyawan WHERE nama='ega'";

// if ($mysqli->query($sql)== TRUE){
//     echo 'berhasil dihapus';
// }else{
//     echo 'gagal dihapus'. $mysqli->error;
// }

//mengedit data
// $sql = "UPDATE karyawan SET nama='JIHAN', alamat='madura' WHERE nama='vanx'";

// if ($mysqli->query($sql)== TRUE){
//     echo 'berhasil diupdate';
// }else{
//     echo 'gagal diupdate'. $mysqli->error;
// }

//#menampilkan data di database
// $query ="SELECT nama, alamat FROM karyawan";
// $result = $mysqli->query($query);

// if ($result->num_rows>0){
//     while ($row = $result->fetch_assoc()){
//         echo $row['nama']. ' '. $row['alamat']. '<br>';
//     }
// }else{
//     echo "gagal";
// }


//#escape mysql injection
// $mysqli->real_escape_string("$_GET['user")

//#prepare stetment
// $stetment = $mysqli->prepare('INSERT INTO karyawan (nama, alamat) VALUES (?, ?)');
// $stetment->bind_param('ss', $nama, $alamat);

//#mengisi nilai para meter +mengeksekusi
// $nama = "vinxx";
// $alamat = "semarang";
// $stetment->execute();

// $nama = "vanx";
// $alamat = "lkjhmn";
// $stetment->execute();

// $nama = "yina";
// $alamat = "nnhujk";
// $stetment->execute();

// else{
    // echo "berhasil";
// }
// $sql = "INSERT INTO karyawan (nama, alamat) VALUES('ega', 'salatiga');";
// $sql .= "INSERT INTO karyawan (nama, alamat) VALUES('devan', 'salatiga');";
// $sql .= "INSERT INTO karyawan (nama, alamat) VALUES('reno', 'salatiga')";

//#mysqli->query($sql)


// if ($mysqli->multi_query($sql) == TRUE){
//     echo "Data berhasil ditambahkan.";
// }else{
//     echo "Error: ". $sql . "<br>" . $mysqli->error;
// }
$mysqli->close();
?>