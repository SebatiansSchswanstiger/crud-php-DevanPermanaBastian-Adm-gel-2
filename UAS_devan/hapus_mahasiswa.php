<?php
include 'koneksi.php';
$id = $_POST['id'];

$sql = "DELETE FROM mahasiswa WHERE id = '$id'";

if ($conn->query($sql)===TRUE) {
    header("location: index.php");
    exit;
    } else {
        echo "Error: " . $conn->error;
    
}

$conn->close();