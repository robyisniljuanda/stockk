<?php 
$koneksi=mysqli_connect("localhost","root","","product1");
include 'koneksi.php';
$product_variant_option_id = $_GET['product_variant_option_id'];
$simpan = mysqli_query($koneksi, "DELETE FROM product_variant_option_combinations WHERE product_variant_option_id='$product_variant_option_id'");
if($simpan)
        {
            header('location:index.php');
        }else{
            echo "gagal";
        }
?>