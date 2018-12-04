<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/22/2018
 * Time: 10:54 AM
 */

//function users_online(){
//
//    if(isset($_GET['onlineusers'])){
//    global $connection;
//
//    if(!$connection){
//        session_start();
//
//        include ('../includes/db.php');
//
//        $session= session_id();
//        $time = time();
//        $time_out_in_seconds = 05;
//        $time_out = $time - $time_out_in_seconds;
//
//        $query="SELECT * FROM users_online WHERE session ='$session'";
//
//        $send_query=mysqli_query($connection, $query);
//
//        $count=mysqli_num_rows($send_query);
//
//        if ($count == NULL){
//            mysqli_query($connection, "INSERT INTO users_online (session ,time) VALUES ('$session', '$time')");
//        }
//        else{
//
//            mysqli_query($connection, "UPDATE users_login SET time = '$time' WHERE session ='$session'");
//        }
//
//        $user_online_query=mysqli_query($connection, "SELECT * FROM users_online WHERE time < '$time_out'");
//
//        echo $count_users=mysqli_num_rows($user_online_query);
//
//
//
//
//    }
//
//
//
//    }
//
//}
//
//users_online();
//
//function confirmQuery($result){
//    global $connection;
//
//    if (!$result){
//        die("QUERY FAILED".mysqli_error($connection));
//    }
//}
//
//function insert_query(){
//    global $connection;
//
//    if(isset($_POST['submit'])){
//        $cat_title= $_POST['cat_title'];
//
//        if ($cat_title == "" || empty($cat_title)){
//            echo "You are missing this field";
//        }
//        else{
//            $query="INSERT INTO categories(cat_title) ";
//            $query .="VALUE ('{$cat_title}') ";
//
//            $create_category_query=mysqli_query($connection, $query);
//
//            if (!$create_category_query){
//                die("QUERY FAILED".mysqli_error($connection));
//            }
//        }
//    }
//}
//
//function findAllCategories(){
//    global $connection;
//
//
//    $query="SELECT * FROM categories";
//    $select_categories_sidebar=mysqli_query($connection,$query);
//
//    while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
//        $cat_id= $row['cat_id'];
//        $cat_title= $row['cat_title'];
//
//        echo "<tr>";
//        echo "<td>{$cat_id}</td>";
//        echo "<td>{$cat_title}</td>";
//        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a> </td>";
//        echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a> </td>";
//        echo "</tr>";
//    }
//
//}

function delete(){
    global $connection;
    if (isset($_GET['delete'])){
        $the_pro_id=$_GET['delete'];

        $query="DELETE FROM products WHERE pro_id={$the_pro_id} ";
        $delete_query=mysqli_query($connection, $query);
        header("Location: loader.php");
    }
}