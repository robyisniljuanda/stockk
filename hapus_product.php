<?php 
$koneksi=mysqli_connect("localhost","root","","product1");
include 'koneksi.php';
$id = $_GET['id'];
$simpan = mysqli_query($koneksi, "DELETE FROM products WHERE id='$id'");
if($simpan)
        {
            header('location:index.php');
        }
?>