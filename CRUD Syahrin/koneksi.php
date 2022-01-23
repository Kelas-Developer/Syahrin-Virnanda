<?php 
$host = "localhost";
$user = "root";
$pass = "";
$nama_db = "crud_syahrin"; //nama database
$koneksi = mysqli_connect($host,$user,$pass,$nama_db); //patikan urutan nya seperti ini, jangan 
 
 if(!$koneksi){
 	die("koneksi dengan database gagal: ".mysql_connect_error());
 }

 ?>