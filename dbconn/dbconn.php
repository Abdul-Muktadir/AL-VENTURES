<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/21/2018
 * Time: 10:11 AM
 */

$con = mysqli_connect('localhost', 'root', '', 'al-ventures');
if(!$con){
    die("connection fail:".mysqli_connect_error());
}
//echo 'ok';