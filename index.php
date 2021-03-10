<?php
session_start();
 
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "tb_data") or die("Error " . mysqli_error($connection));
 
//data array yang akan disimpan
$dataArray = array("url" => $_SERVER['PHP_SELF'], "ip" => $_SERVER['REMOTE_ADDR'], "waktu" => date("Y-m-d H:i:s"));
 
$sql = "INSERT INTO `tb_data`(`session_id`, `session_data`) VALUES ('" . session_id() . "','" . serialize($dataArray) . "')";
mysqli_query($connection, $sql);
 
//tutup koneksi ke database
mysqli_close($connection);
?>