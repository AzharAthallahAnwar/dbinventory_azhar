<?php

$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$stok_barang = $_POST['stok_barang'];
$expired = $_POST['expired'];


include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE barang SET nama_barang='$nama_barang', harga_barang='$harga_barang', stok_barang='$stok_barang', expired='$expired' WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else {
    echo "<script>alert('ambah gagal,)</script";
    echo "<script>window.location.href='tambah.php'</script>";
}