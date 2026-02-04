<?php
$conn = new mysqli("localhost", "root", "", "kir_armada");
if ($conn->connect_error) {
    die("Koneksi database gagal");
}
?>