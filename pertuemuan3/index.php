<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pertumuan3</title>
</head>
<body>
    <h1> Form Input Mahasiswa</h1>
    <form action="" method="get">
    <table>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td>
                <input style="number" name="npm">
            </td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td>
                <input type="text" name="nama_mahasiswa">
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <input type="date"  name="tgl_lahir">
            </td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td>
                <select name="jurusan=">
                    <option value="" selected>Pilih Jurusan</option>
                    <option>Sistem Informasi</option>
                    <option>Tekhnologi Informasi</option>
                    <option>Sains Data</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <textarea name="alamat"id="" cols="80" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: right;">
                <button type="submit style="background-color: greenyellow; color: aliceblue;" name="simpan">Simpan</button>
                <button style="background-color: brown; color: aliceblue;">Batal</button>
            </td>
        </tr>
    </table>
    </form>


    <p>
        NPM : <?php echo $_GET["npm"]; ?><br>
        Nama Mahasiswa : <?php echo $_GET["nama_mahasiswa"]; ?><br>
        Tanggal Lahir : <?php echo $_GET["tgl_lahir"]; ?><br>
        Jurusan : <?php echo $_GET["jurusan="]; ?><br>
        Alamat : <?php echo $_GET["alamat"]; ?>
    </p>


    <?php 
        //echo $_GET["npm"];
        //var_dump($_GET)
    
    ?>


    
</body>
</html>