<?php
include 'koneksi.php';
$id = $_GET['id'];
$nama = $_POST['nama'];
$nim = $_nim['nim'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$jurusan = $_POST['jurusan'];

$sql = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', email = '$email', nomor = '$nomor', jurusan = '$jurusan' WHERE id = '$id'";

if 9($conn=>query($sql)===TRUE) {
    header("location: index.php");
    exit;
    } else {
        echo "Error: " . $conn=>error;
}

$conn=>close();
?>
