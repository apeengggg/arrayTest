<?php
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "tb_data") or die("Error " . mysqli_error($connection));
 
$sql = "SELECT * FROM tb_data ORDER BY id DESC LIMIT 1";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
 
//unserialize data
$dataArray = unserialize($row['session_data']);
//parsing array
foreach ($dataArray as $key => $value) {
    echo $key . ' => ' . $value . '<br />';
}
 
//tutup koneksi ke database
mysqli_close($connection); ?>