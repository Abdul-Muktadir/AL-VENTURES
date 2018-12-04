<?php 

$customer = $_GET['customerName'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$ship = $_GET['shipmentAddress'];


$sql ="INSERT INTO `customerProfile`(`customerName`, `phone`, `address`, `shipmentAddress`)
VALUES ('$customer', '$phone', '$address', '$ship')";

$result=mysqli_query($con, $sql)

?>