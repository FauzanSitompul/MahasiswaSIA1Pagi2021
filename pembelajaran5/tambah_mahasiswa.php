<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Data Mahasiswa</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" name="nama_mahasiswa" id="">
            </td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td>
                <input type="number" name="npm_mahasiswa" id="">
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jk" id="">
                    <option value="" selected>Pilih Jenis Kelamin</option>
                    <option value="lk">Laki Laki</option>
                    <option value="pr">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <textarea name="alamat" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <input type="date" name="tanggal_lahir" id="">
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <select name="jurusan" id="">
                    <option value=""selected>Pilih Jurusan Anda</option>
                    <option value="si">Sistem Informasi</option>
                    <option value="ti">Tekhnologi Informasi</option>
                    <option value="sd">Sains Data</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:right">
            <a href="../pembelajaran5/">
                <button>Kembali</button>
            </a>
            <button>Simpan</button>
            </td>
        </tr>
    </table>
    
</body>
</html>