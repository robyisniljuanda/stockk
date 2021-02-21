<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>PRODUCTS</h3>
        <a href="entri_products.php">Tambah Data</a><br/>
        <table border=1 align=”center”>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>action</th>
        </tr>
        <?php
        $koneksi=mysqli_connect("localhost","root","","product1");
        $q=mysqli_query($koneksi,"SELECT * FROM products");
        while($hasil=mysqli_fetch_array($q)) {
        ?>
        <tr>
            <td><?php echo $hasil['id'] ?></td>
            <td><?php echo $hasil['name'] ?></td>
            <td>
            <a href="hapus_product.php?id=<?php echo $hasil['id']; ?>"onclick="return confirm('Yakin akan Menghapus Data ?')">Hapus</a> |
            <a href="update_product.php?id=<?php echo $hasil['id']; ?>">Edit</a></td>
        </tr>
        <?php
        }
        ?>
        </table>

        <p>
        <h3>PRODUCT_VARIANTS</h3>
        <a href="entri_provant.php">Tambah Data</a><br/>
        <table border=1 align=”center”>
        <tr>
            <th>id</th>
            <th>product_id</th>
            <th>name</th>
            <th>action</th>
        </tr>
        <?php
        $koneksi=mysqli_connect("localhost","root","","product1");
        $q=mysqli_query($koneksi,"SELECT * FROM product_variants");
        while($hasil=mysqli_fetch_array($q)) {
        ?>
        <tr>
            <td><?php echo $hasil['id'] ?></td>
            <td><?php echo $hasil['product_id'] ?></td>
            <td><?php echo $hasil['name'] ?></td>
            <td>
            <a href="hapus_provant.php?id=<?php echo $hasil['id']; ?>"onclick="return confirm('Yakin akan Menghapus Data ?')">Hapus</a> | 
            <a href="update_provant.php?id=<?php echo $hasil['id']; ?>">Edit</a></td>
        </tr>
        <?php
        }
        ?>
        </table>


        <p>
        <h3>PRODUCT_VARIANT_OPTIONS</h3>
        <a href="entri_provarop.php">Tambah Data</a><br/>
        <table border=1 align=”center”>
        <tr>
            <th>id</th>
            <th>product_variant_id</th>
            <th>name</th>
            <th>action</th>
        </tr>
        <?php
        $koneksi=mysqli_connect("localhost","root","","product1");
        $q=mysqli_query($koneksi,"SELECT * FROM product_variant_options");
        while($hasil=mysqli_fetch_array($q)) {
        ?>
        <tr>
            <td><?php echo $hasil['id'] ?></td>
            <td><?php echo $hasil['product_varian_id'] ?></td>
            <td><?php echo $hasil['name'] ?></td>
            <td>
            <a href="hapus_provarop.php?id=<?php echo $hasil['id'] ?>"onclick="return confirm('Yakin akan Menghapus Data ?')" class="btn btn-danger">Hapus</a> | 
            <a href="update_provarop.php?id=<?php echo $hasil['id'] ?>" class="btn btn-info">Edit</a></td>
        </tr>
        <?php
        }
        ?>
        </table>

        <p>
        <h3>SKUS</h3>
        <a href="entri_skus.php">Tambah Data</a><br/>
        <table border=1 align=”center”>
        <tr>
            <th>id</th>
            <th>product_id</th>
            <th>sku</th>
            <th>price</th>
            <th>action</th>
        </tr>
        <?php
        $koneksi=mysqli_connect("localhost","root","","product1");
        $q=mysqli_query($koneksi,"SELECT * FROM skus");
        while($hasil=mysqli_fetch_array($q)) {
        ?>
        <tr>
            <td><?php echo $hasil['id'] ?></td>
            <td><?php echo $hasil['product_id'] ?></td>
            <td><?php echo $hasil['sku'] ?></td>
            <td><?php echo $hasil['price'] ?></td>
            <td>
            <a href="hapus_skus.php?id=<?php echo $hasil['id'] ?>"onclick="return confirm('Yakin akan Menghapus Data ?')" >Hapus</a> | 
            <a href="update_skus.php?id=<?php echo $hasil['id'] ?>" >Edit</a></td>
        </tr>
        <?php
        }
        ?>
        </table>

        <p>
        <h3>PRODUCT_VARIANT_OPTION_COMBINATIONS</h3>
        <a href="entri_provopons.php">Tambah Data</a><br/>
        <table border=1 align=”center”>
        <tr>
            <th>product_variant_option_id</th>
            <th>sku_id</th>
            <th>action</th>
        </tr>
        <?php
        $koneksi=mysqli_connect("localhost","root","","product1");
        $q=mysqli_query($koneksi,"SELECT * FROM product_variant_option_combinations");
        while($hasil=mysqli_fetch_array($q)) {
        ?>
        <tr>
            <td><?php echo $hasil['product_variant_option_id'] ?></td>
            <td><?php echo $hasil['sku_id'] ?></td>
            <td>
            <a href="hapus_provopons.php?product_variant_option_id=<?php echo $hasil['product_variant_option_id'] ?>"onclick="return confirm('Yakin akan Menghapus Data ?')">Hapus</a> | 
            <a href="update_provopons.php?product_variant_option_id=<?php echo $hasil['product_variant_option_id'] ?>">Edit</a></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </body>
</html>