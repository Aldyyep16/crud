<?php
$conn = mysqli_connect("localhost","root","","perpustakaan");
$result = mysqli_query($conn, "SELECT * FROM buku_1");
?>