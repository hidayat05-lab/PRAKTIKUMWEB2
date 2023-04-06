<?php 
require_once 'dbkoneksi.php';

$_id = $_GET['iddel'];
$sql = "DELETE FROM produk WHERE id = ?";

$st = $dbh->prepare($sql);

$st->execute([$_id]);
header('location:list_produk.php');
?>