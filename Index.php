<?php
include 'koneksi.php';


$query = "SELECT * FROM buku";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>ID buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun terbit</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id_buku']; ?></td>
                <td><?php echo $row['judul']; ?></td>
                <td><?php echo $row['pengarang']; ?></td>
                <td><?php echo $row['tahun_terbit']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
