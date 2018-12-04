
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

                  if (isset($_GET['p_id'])){

                      $the_pro_id= $_GET['p_id'];
                  }

                  $query="SELECT * FROM products WHERE pro_id={$the_pro_id} ";
                  $select_products_by_id =mysqli_query($connection,$query);

                  if(!$select_products_by_id){
                      die("QUERY FAILED" .mysqli_error($connection));
                  }

                  while($row = mysqli_fetch_assoc($select_products_by_id)) {
                      $pro_id = $row['pro_id'];
                      $pro_category_id = $row['pro_category_id'];
                      $pro_title = $row['pro_title'];
                      $pro_image = $row['pro_image'];
                      $pro_content = $row['pro_content'];
                      $pro_status = $row['pro_status'];
                      $pro_tags = $row['pro_tags'];
                      $pro_comment_count = $row['pro_comment_count'];
                      $pro_date = $row['pro_date'];

                  }

                  if (isset($_POST['update_product'])){

                      $pro_id = $row['pro_id'];
                      $pro_category_id = $_POST['pro_category_id'];
                      $pro_title = $_POST['pro_title'];
                      $pro_image = $_FILES['pro_image']['name'];
                      $pro_image_temp = $_FILES['pro_image']['tmp_name'];
                      $pro_content = $_POST['pro_content'];
                      $pro_status = $_POST['pro_status'];
                      $pro_tags = $_POST['pro_tags'];
                      $pro_comment_count = 4;
                      $pro_date = date('d-m-y');

                      move_uploaded_file($pro_image_temp, "asset/img/products/$pro_image");

                      if (empty($pro_image)){

                          $query="SELECT * FROM products WHERE pro_id=$the_pro_id ";
                          $select_image=mysqli_query($connection, $query);

                          while ($row=mysqli_fetch_array($select_image)){
                              $pro_image=$row['pro_image'];
                          }
                      }

                      $query="UPDATE products SET ";
                      $query .="pro_title ='{$pro_title}', ";
                      $query .="pro_category_id ='{$pro_category_id}', ";
                      $query .="pro_image ='{$pro_image}', ";
                      $query .="pro_status ='{$pro_status}', ";
                      $query .="pro_tags ='{$pro_tags}', ";
                      $query .="pro_date =now(), ";
                      $query .="pro_content ='{$pro_content}' ";
                      $query .=" WHERE pro_id ={$the_pro_id} ";
                  }

                  $update_pro=mysqli_query($connection, $query);

                  if(!$update_pro){
                      die("QUERY FAILED" .mysqli_error($connection));
                  }
                 ?>

                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Title (disabled)</label>
                          <input type="text" class="form-control" name="pro_title" value="<?php echo "$pro_title";?> disabled">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <select name="pro_category_id" id="">
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
                          <input type="date" class="form-control" name="pro_date" value="<?php echo "$pro_date";?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Status</label>
                          <input type="text" class="form-control" name="pro_status" value="<?php echo "$pro_status";?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Comment Count</label>
                          <input type="text" class="form-control" name="pro_comment_count" value="<?php echo "$pro_comment_count";?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pro Tag</label>
                          <input type="text" class="form-control" name="pro_tags" value="<?php echo "$pro_tags";?>">
                        </div>
                      </div>
                        <br><br><br><br>
                        <input type="file" class="form-control" name="pro_image" value="Upload Image">
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Product</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> A little Info About our Product .</label>
                            <textarea class="form-control" rows="5" name="pro_content" >
                                <?php echo "$pro_content";?>
                            </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" name="update_product">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="assets/img/products/<?php echo "$pro_image";?>" />
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