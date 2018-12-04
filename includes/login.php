<?php include 'db.php'; ?>
<?php session_start()?>
<?php

if (isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);


    $query="SELECT * FROM users WHERE username='{$username}' ";
    $select_query=mysqli_query($connection,$query);

    if (!$select_query){
        die("QUERY FAILED".mysqli_error($connection));
    }

    while ($row=mysqli_fetch_array($select_query)){

        $user_id=$row['user_id'];
        $user_name=$row['username'];
        $user_password=$row['user_password'];
        $user_firstname=$row['user_firstname'];
        $user_lastname=$row['user_lastname'];
        $user_role=$row['user_role'];

    }

    if ($username === $user_name && $password === $user_password ){

        $_SESSION['username']=$user_name;
        $_SESSION['firstname']=$user_firstname;
        $_SESSION['lastname']=$user_lastname;
        $_SESSION['user_role']=$user_role;

        header("Location: ../admin/");
    }
    else{
        header("Location: ../index.phpxxx");
    }


}

//if ($username !== $user_name && $password !== $user_password ){
//
//    header("Location: ../index.phpxxx");
//}
//elseif ($username == $user_name && $password == $user_password ){
//
//    $_SESSION['username']=$user_name;
//    $_SESSION['firstname']=$user_firstname;
//    $_SESSION['lastname']=$user_lastname;
//    $_SESSION['user_role']=$user_role;
//
//    header("Location: ../admin");
//}
//else{
//    header("Location: ../index.phpxxx");
//}
