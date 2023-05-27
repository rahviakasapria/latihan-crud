<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM mahasiswa where nim = '".$_GET['nim']."'");
$result = mysqli_fetch_array($data_edit);

if(is_array($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#008080;color:#fff;border-radius:2px;text-decoration:none;">Data Mahasiswa</a><br><br>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type= "text" name="nim" value="<?php echo $result['nim'] ?>" required></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type= "text" name="nama" value="<?php echo $result['nama_lengkap'] ?>" required></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type= "text" name="telp" value="<?php echo $result['telepon'] ?>" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type= "email" name="email" value="<?php echo $result['email'] ?>" required></td>
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
            <td><input type= "submit" name="edit" value="Simpan"></td>
        </tr>
    </Table>
</form>
<?php
} else {
    echo 'data tidak ditemukan';
}
?>

<?php
include 'koneksi.php';
if(isset($_POST['edit'])){
$update = mysqli_query($conn, "UPDATE mahasiswa SET 
nama_lengkap = '".$_POST['nama']."', telepon = '".$_POST['telp']."', email = '".$_POST['email']."', jurusan = '".$_POST['jurusan']."', nim = '".$_POST['nim']."' where nim = '".$_GET['nim']."'");
                        
    if($update){
        echo 'berhasil diedit';
    }else{
        echo 'gagal diedit'.mysqli_error($conn);
    }
}
?>

</body>
</html>