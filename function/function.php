<?php 

function size($con){
    $sql='select * from size_tbl';
    $result=mysqli_query($con, $sql);
    while ($r=mysqli_fetch_assoc($result)){
        echo"<option value=".$r['sizeID'].">".$r['sizeDetail']."".$r['$size']."</option>";
    }
}


?>