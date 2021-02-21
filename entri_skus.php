<html>
    <head>
        <title>entri skus</title>
    </head>
    <body>
        <h3> ENTRI SKUS </h3>
        <form method="POST" action="">		
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id"></td>					
                </tr>	
                <tr>
                    <td>Product Id</td>
                    <td>
                        <select name="product_id" placeholder="product_id">
				            <option value="" disable selected>---Pilih---</option>
                            <?php
                                $koneksi=mysqli_connect("localhost","root","","product1");
                                $q=mysqli_query($koneksi,"SELECT * FROM products");
                                while($data=mysqli_fetch_array($q)) {
                                    echo"<option value =$data[id]>$data[id]</option>";
                                }
                            ?>		
                        </select>
                    </td>					
                </tr>
                <tr>
                    <td>SKU</td>
                    <td><input type="text" name="sku"></td>					
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price"></td>					
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
        $id = $_POST['id'];
        $product_id = $_POST['product_id'];
        $sku = $_POST['sku'];
        $price = $_POST['price'];
        $simpan = mysqli_query($koneksi, "insert into skus values('$id','$product_id','$sku','$price')");
        if($simpan)
        {
            header('location:index.php');
        }
    }
    ?>
    </body>    
</html>