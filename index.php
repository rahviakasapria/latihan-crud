<html>
<head>
    <title>Halaman Data Mahasiswa</title>
</head>
<body>
<center> <h1>Data Mahasiswa Universitas Muhammadiyah Purwokerto</h1> </center>
<a href="form-input.php" style="padding:0.4% 0.8%;background-color:#008080;color:#fff;border-radius:2px;text-decoration:none;">Tambah Data</a><br><br>
<table border="1" cellspacing="0" width="50%">
    <tr style="text-align:center;font-weight:bold; background-color:#DCDCDC;">
        <td>No</td>
        <td>Nim</td>
        <td>Nama Mahasiswa</td>
        <td>Telepon</td>
        <td>Email</td>
        <td>jurusan</td>
        <td>Opsi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $select = mysqli_query($conn, "SELECT * FROM mahasiswa");
        if(mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>
    <tr style="text-align:center;">
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil['nim'] ?></td>
        <td><?php echo $hasil['nama_lengkap'] ?></td>
        <td><?php echo $hasil['telepon'] ?></td>
        <td><?php echo $hasil['email'] ?></td>
        <td><?php echo $hasil['jurusan'] ?></td>
        <td>
            <a href="form-edit.php?nim=<?php echo $hasil['nim'] ?>">Edit</a> ||
            <a href="delete.php?nim=<?php echo $hasil['nim'] ?>">Hapus</a>
        </td>
    </tr>
    <?php }}else{ ?>
    <tr>
        <td colspan="6" align="center">Data Kosong</td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
