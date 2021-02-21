<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3> ENTRI DATA PRODUCT VARIANT OPTIONS</h3>
        <form method="POST" action="">		
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id"></td>					
                </tr>	
                <tr>
                    <td>Product Variant Id</td>
                    <td>
                        <select name="product_varian_id" placeholder="product_varian_id">
				            <option value="" disable selected>---Pilih---</option>
                            <?php
                                $koneksi=mysqli_connect("localhost","root","","product1");
                                $q=mysqli_query($koneksi,"SELECT * FROM product_variants");
                                while($data=mysqli_fetch_array($q)) {
                                    echo"<option value =$data[id]>$data[id]</option>";
                                }
                            ?>		
                        </select>
                    </td>					
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name"></td>					
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
        $product_varian_id = $_POST['product_varian_id'];
        $name = $_POST['name'];
        $simpan = mysqli_query($koneksi, "insert into product_variant_options values('$id', '$product_varian_id','$name')");
        if($simpan)
        {
            header('location:index.php');
        }
    }
    ?>
    </body>    
</html>