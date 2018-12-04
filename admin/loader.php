<?php include 'includes/admin_header.php';?>
<?php ob_start();?>


<body class="">
<div class="wrapper ">

    <div class="main-panel">
        <!-- Navbar -->

    <?php include './includes/admin_sidebar.php'; ?>


    <?php include './includes/admin_navigation.php'; ?>


        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <!-- your content here -->

                <?php
                if (isset($_GET['source'])){
                    $source=$_GET['source'];
                }else{
                    $source='';
                }

                switch ($source){
                    case "add_product";
                        include "./includes/add_product.php";
                        break;

                    case "add_user";
                        include "./includes/add_user.php";
                        break;

                    case "edit_product";
                        include "edit_product.php";
                        break;

                    case "edit_user";
                        include "edit_user.php";
                        break;

                    case "delete";
                        include "user_tables.php";
                        break;

                    case "userprofile";
                        include "userprofile.php";
                        break;

                        case "user_tables";
                            include "user_tables.php";
                            break;
                    default;
                        include "tables.php";
                        break;

                }

                ?>

            </div>
        </div>
<?php include './includes/admin_footer.php';?>