<?php
$conn = new mysqli("localhost", "root", "", "techstore");
if ($conn->connect_error) die("Erro: " . $conn->connect_error);
?>
