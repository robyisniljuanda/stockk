<html>
    <head>
        <title>entri product</title>
    </head>
    <body>
        <h3> ENTRI DATA PRODUCT VARIANT OPTION COMBINATIONS</h3>
        <form method="POST" action="">		
            <table>
                <tr>
                    <td>Product Variant Option Id</td>
                    <td>
                        <select name="product_variant_option_id" placeholder="product_variant_option_id">
				            <option value="" disable selected>---Pilih---</option>
                            <?php
                                $koneksi=mysqli_connect("localhost","root","","product1");
                                $q=mysqli_query($koneksi,"SELECT * FROM product_variant_options");
                                while($data=mysqli_fetch_array($q)) {
                                    echo"<option value =$data[id]>$data[id]</option>";
                                }
                            ?>		
                        </select>
                    </td>					
                </tr>	
                <tr>
                    <td>SKU Id</td>
                    <td>
                        <select name="sku_id" placeholder="sku_id">
				            <option value="" disable selected>---Pilih---</option>
                            <?php
                                $koneksi=mysqli_connect("localhost","root","","product1");
                                $q=mysqli_query($koneksi,"SELECT * FROM skus");
                                while($data=mysqli_fetch_array($q)) {
                                    echo"<option value =$data[id]>$data[id]</option>";
                                }
                            ?>		
                        </select>
                    </td>					
                </tr>	
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" name="simpan"></td>					
                </tr>				
            </table>
    </form>
    <?php
    $koneksi=mysqli_connect("localhost","root","","product1");
    if(isset($_POST['simpan']))
    {
        $product_variant_option_id = $_POST['product_variant_option_id'];
        $sku_id = $_POST['sku_id'];
        $simpan = mysqli_query($koneksi, "insert into product_variant_option_combinations values('$product_variant_option_id','$sku_id')");
        if($simpan)
        {
            header('location:index.php');
        }
    }
    ?>
    </body>    
</html>