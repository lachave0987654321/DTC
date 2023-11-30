<?php

$conn = new mysqli("localhost","root","","db_dtc");
if($conn->connect_errno)
{
echo "No hay conexion: (" . $conn->connect_errno . ")" . $conn->connect_error;
}
?>