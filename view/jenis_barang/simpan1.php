<?php

$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];


include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO jenis_barang VALUES('$id_jenis','$nama_jenis')");

if($query){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href='index1.php'</script>";
}else {
    echo "<script>alert('ambah gagal,)</script";
    echo "<script>window.location.href='tambah1.php'</script>";
}