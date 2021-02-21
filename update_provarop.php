<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3> UPDATE DATA PRODUCT VARIANTS </h3>
        <?php
        $koneksi=mysqli_connect("localhost","root","","product1");
        $q=mysqli_query($koneksi,"SELECT * FROM product_variant_options WHERE id='$_GET[id]'");
        $hasil=mysqli_fetch_array($q);
        ?>
        <form method="POST" action="">		
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" value="<?php echo $hasil['id']?>"></td>					
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

                                    if ($data['id']==$hasil['product_varian_id']) {
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
                    <td>Nama</td>
                    <td><input type="text" name="name" value="<?php echo $hasil['name']?>"></td>					
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
        $product_varian_id = $_POST['product_varian_id'];
        $name = $_POST['name'];
        $update = mysqli_query($koneksi, "UPDATE product_variant_options SET name= '$name', product_varian_id= '$product_varian_id' where id= '$id'");
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