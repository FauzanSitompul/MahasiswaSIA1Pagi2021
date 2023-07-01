<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assosiative Array</title>
</head>
<body>
    <h1>Assosiative Array</h1>

    <ul>
        <li>
            <a href="index.php">Indexed Array</a>
        </li>
        <li>
            <a href="aa.php">Assosiative Array</a>
        </li>
        <li>
            <a href="ma.php">Multidimentional Array</a>
        </li>
    </ul>

    <hr>
    <?php
    $umur = array("leo" => "20", "Juli" => "Juli", "Habibi" => "25");
    ?>

    <table border="1" style="border-collapse">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
        </tr>
        <?php 
        $number = 1;
        foreach($umur as $u => $u_value) :?>
        <tr>
            <td><?php $number++ ?></td>
            <td><?php $u; ?></td>
            <td><?php $u_value; ?></td>
        </tr>

        <?php endforeach; 
        ?>
    </table>
    
</body>
</html>