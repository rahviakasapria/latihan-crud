<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Data</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#008080;color:#fff;border-radius:2px;text-decoration:none;">Data Mahasiswa</a><br><br>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type= "text" name="nim" placeholder="Nim" required></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type= "text" name="nama" placeholder="Nama Lengkap" required></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type= "text" name="telp" placeholder="Telepon" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type= "email" name="email" placeholder="Email" required></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
            <select name="jurusan">
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type= "submit" name="simpan" value="Simpan"></td>
        </tr>
    </Table>
</form>
<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
$insert = mysqli_query($conn, "INSERT INTO mahasiswa VALUES 
                        ('".$_POST['nim']."',
                        '".$_POST['nama']."',
                        '".$_POST['telp']."',
                        '".$_POST['email']."',
                        '".$_POST['jurusan']."')");
    if($insert){
        echo 'berhasil disimpan';
    }else{
        echo 'gagal disimpan'.mysqli_error($conn);
    }
}
?>
</body>
</html>