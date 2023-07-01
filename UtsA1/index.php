<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<body>
    
    <h1 style="font-size: Large;">E-Learning Universitas </h1>
    <h2 style="font-size: Large;">Muhammadiyah Sumatera Utara</h2>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Username</td>
            <td><Input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td colspan="3">
                <button style="width:100%" name="cari"><b>Login</b></button>
            </td>
        </tr>
        
    </table>
    </form>
    </center>

        <?php 
        if (@$_POST["username"]) { ?>
        

        <p>Login Atas Nama <b><?= @$_POST["username"] ?></b> Berhasil</p>


        <?php } ?>
    
</body>
</html>