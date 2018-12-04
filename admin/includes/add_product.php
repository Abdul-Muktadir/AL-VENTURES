
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Profile</h4>
                        <p class="card-category">Complete your profile</p>
                    </div>

                    <?php
                    /**
                     * Created by PhpStorm.
                     * User: User
                     * Date: 9/22/2018
                     * Time: 1:28 PM
                     */

                    if (isset($_POST['create_product'])){

//    $post_id = $_POST['post_id'];
                        $pro_category_id = $_POST['pro_category_id'];
                        $pro_title = $_POST['pro_title'];
                        $pro_image = $_FILES['pro_image']['name'];
                        $pro_image_temp = $_FILES['pro_image']['tmp_name'];
                        $pro_content = $_POST['pro_content'];
                        $pro_status = $_POST['pro_status'];
                        $pro_tags = $_POST['pro_tags'];
//    $post_comment_count = 4;
                        $pro_date = date('d-m-y');

                        move_uploaded_file($pro_image_temp, "asset/img/products/$pro_image");

                        $query="INSERT INTO products (pro_category_id, pro_title, pro_date, pro_image, pro_content,pro_tags, pro_status)";
                        $query .="VALUES($pro_category_id,'$pro_title',now(), '$pro_image', '$pro_content', '$pro_tags', '$pro_status') ";

                        $create_product_query=mysqli_query($connection, $query);
                        if (!$create_product_query){
                            die("QUERY FAILED".mysqli_error($connection));
                        }
                    }
                    ?>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Product Title</label>
                                        <input type="text" class="form-control" name="pro_title" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <select id="" class="form-control" name="pro_category_id" required>
                                        <?php

                                        $query="SELECT * FROM categories";
                                        $select_categories=mysqli_query($connection,$query);

                                        if(!$select_categories){
                                            die("QUERY FAILED" .mysqli_error($connection));
                                        }

                                        while($row = mysqli_fetch_assoc($select_categories)) {
                                            $cat_id = $row['cat_id'];
                                            $cat_title = $row['cat_title'];

                                            echo " <option value='$cat_id'>$cat_title</option>";
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Product Date</label>
                                        <input type="date" class="form-control" name="pro_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Product Status</label>
                                        <input type="text" class="form-control" name="pro_status" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Product Comment Count</label>
                                        <input type="text" class="form-control" name="pro_comment_count" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Pro Tag</label>
                                        <input type="text" class="form-control" name="pro_tags" >
                                    </div>
                                </div>
                                <br><br><br><br>
                                        <input type="file" class="form-control" name="pro_image" value="Upload Image" required>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Product</label>
                                        <div class="form-group">
                                            <textarea class="tinymce" name="pro_content" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" name="create_product">Create Product</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="assets/img/products/<?php echo $pro_image;?>" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">Alec Thompson</h4>
                        <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                        <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>