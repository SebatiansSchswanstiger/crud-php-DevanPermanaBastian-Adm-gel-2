<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="proses_tambah.php" method="post">
        <label>Nama:</label>
        <input type="text" name="name" required><br><br>

        <label>NIM:</label>
        <input type="text" name="nim" required><br><br>

        <label>Email :</label>
        <input type="email" name="email" required><br><br>

        <label>Nomor:</label>
        <input type="text" name="nomor" required><br><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" required><br><br>
        
        <input type="submit" value="Tambah">
    </form>
</body>

</html>