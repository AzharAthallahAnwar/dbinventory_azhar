<?php 

$conn = mysqli_connect('localhost', 'root', '', 'dbinventory_azhar_xipplg4');

if(!$conn){
    die("Koneksi Gagal". mysqli_connect_error());
}