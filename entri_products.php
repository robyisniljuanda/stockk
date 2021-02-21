<html>
    <head>
        <title>entri product</title>
    </head>
    <body>
        <h3> ENTRI DATA PRODUCTS </h3>
        <form method="POST" action="">		
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id"></td>					
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
        $name = $_POST['name'];
        $simpan = mysqli_query($koneksi, "insert into products values('$id','$name')");
        if($simpan)
        {
            header('location:index.php');
        }
    }
    ?>
    </body>    
</html>