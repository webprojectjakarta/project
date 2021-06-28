<?php defined('BASEPATH') OR exit ('No direct script access allowed');

$idcard = $_GET["idcard"];

$hasil = mysqli_query($conn, "SELECT * FROM rfid WHERE idcard = '$idcard' ");

$row = mysqli_fetch_array($hasil);

echo "ID CARD :", $row["idcard"],"	", "Saldo %", $row["val"];

?>