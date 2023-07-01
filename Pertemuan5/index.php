<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HypeLink</title>
</head>
<body>
    <h1>Data Produk</h1>
    <ul>
        <li><a href="index.php">Indexed Array</a></li>
        <li><a href="aa.php">Assosiative Array</a></li>
        <li><a href="ma.php">Multidimentional Array</a></li>
    </ul>

    
    <?php 
        $produk = array("Samsung", "Nokia", "Lenovo");
        $jumlahproduk = count($produk);
    ?>

    <table border="1" style="border-collapse">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
        </tr>
        <?php 
        for ($i=0; $i <$jumlahproduk ; $i++) { ?>

        <tr>
            <td><?= $i+1 ?></td>
            <td><?= $produk[$i]?></td>
        </tr>
            
        <?php }?>
        
    </table>
</body>
</html>