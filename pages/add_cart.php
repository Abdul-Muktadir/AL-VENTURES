<?php

include '../includes/db.php';


//$productid = $_POST['productID'];
$size = $_GET['size'];
$Qty = $_GET['soldQty'];
//$price = $_POST['price'];

//$sql="INSERT INTO qry_product (soldQty, sizeID) VALUES ('$Qty', '$size')";

$sql = "INSERT INTO `qry_product`(`soldQty`, `sizeID`)
VALUES ('$Qty', '$size')";

//$result=mysqli_query($con, $sql);
//$result = $con->query($sql);
if($result = $con->query($sql)){
	echo "ok";
}
else {
	echo "false";
}

// function addRecord($tbl){
//    $value=$feild=$next="";
//    foreach ($_POST as $f=>$v){
//        $value .= $next."'$v'";
//        $feild .= $next.$f;
//        $next=",";
//    }

//    return "insert into $tbl ($feild) value ($value)";
// }


// $sql = addRecord('qry_product');



// if (mysqli_query($con,$sql)){
//    header("Location: login.php");
// }
// else{
// 	echo 'false';
// }
?>