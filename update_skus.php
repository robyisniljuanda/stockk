<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3> UPDATE DATA SKU </h3>
        <?php
        $koneksi=mysqli_connect("localhost","root","","product1");
        $q=mysqli_query($koneksi,"SELECT * FROM skus WHERE id='$_GET[id]'");
        $hasil=mysqli_fetch_array($q);
        ?>
        <form method="POST" action="">		
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" value="<?php echo $hasil['id']?>"></td>					
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

                                    if ($data['id']==$hasil['product_id']) {
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
                    <td>SKU</td>
                    <td><input type="text" name="sku" value="<?php echo $hasil['sku']?>"></td>					
                </tr>	
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" value="<?php echo $hasil['price']?>"></td>					
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
        $id = $_POST['id'];
        $product_id = $_POST['product_id'];
        $sku = $_POST['sku'];
        $price = $_POST['price'];
        $update = mysqli_query($koneksi, "UPDATE skus SET sku= '$sku', product_id= '$product_id', price= '$price' where id= '$id'");
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