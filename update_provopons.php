<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3> UPDATE DATA PRODUCT VARIANT OPTION COMBINATIONS </h3>
        <?php
        $koneksi=mysqli_connect("localhost","root","","product1");
        $q=mysqli_query($koneksi,"SELECT * FROM product_variant_option_combinations WHERE product_variant_option_id='$_GET[product_variant_option_id]'");
        $hasil=mysqli_fetch_array($q);
        ?>
        <form method="POST" action="">		
            <table>
                <tr>
                    <td>PVO Id</td>
                    <td>
                        <select name="product_variant_option_id" placeholder="product_variant_option_id">
				            <option value="" disable selected>---Pilih---</option>
                            <?php
                                $koneksi=mysqli_connect("localhost","root","","product1");
                                $q=mysqli_query($koneksi,"SELECT id FROM product_variant_options");
                                while($data=mysqli_fetch_array($q)) {

                                    if ($data['id']==$hasil['product_variant_option_id']) {
                                        echo"<option value =$data[id] selected>$data[id]</option>";
                                       }else{
                                        echo"<option value =$data[id]>$data[id]</option>";
                                       }
                                       
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
                                $q=mysqli_query($koneksi,"SELECT id FROM skus");
                                while($data=mysqli_fetch_array($q)) {

                                    if ($data['id']==$hasil['sku_id']) {
                                        echo"<option value =$data[id] selected>$data[id]</option>";
                                       }else{
                                        echo"<option value =$data[id]>$data[id]</option>";
                                       }
                                       
                                }
                            ?>		
                        </select>
                    </td>					
                </tr>	
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update" name="update"></td>					
                </tr>				
            </table>
    </form>
    <?php
    $koneksi=mysqli_connect("localhost","root","","product1");
    if(isset($_POST['update']))
    {
        $product_variant_option_id = $_POST['product_variant_option_id'];
        $sku_id = $_POST['sku_id'];
        $update = mysqli_query($koneksi, "UPDATE product_variant_option_combinations SET sku_id= '$sku_id' where product_variant_option_id= '$product_variant_option_id'");
        if($update)
        {
            header('location:index.php');
        }else{
            echo "gagal";
        }
    }
    ?>
    </body>    
</html>