<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3> UPDATE DATA PRODUCTS </h3>
        <?php
        $koneksi=mysqli_connect("localhost","root","","product1");
        $q=mysqli_query($koneksi,"SELECT * FROM products WHERE id='$_GET[id]'");
        $hasil=mysqli_fetch_array($q);
        ?>
        <form method="POST" action="">		
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" value="<?php echo $hasil['id']?>"></td>					
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
        $name = $_POST['name'];
        $update = mysqli_query($koneksi, "UPDATE products SET name= '$name' where id= '$id'");
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