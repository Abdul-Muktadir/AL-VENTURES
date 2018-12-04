
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

                      $the_user_id= $_GET['p_id'];
                  }

                  $query="SELECT * FROM users WHERE user_id={$the_user_id} ";
                  $select_user_by_id =mysqli_query($connection,$query);

                  if(!$select_user_by_id){
                      die("QUERY FAILED" .mysqli_error($connection));
                  }

                  while($row = mysqli_fetch_assoc($select_user_by_id)) {
                      $user_id = $row['user_id'];
                      $username = $row['username'];
                      $user_password= $row['user_password'];
                      $user_firstname = $row['user_firstname'];
                      $user_lastname = $row['user_lastname'];
                      $user_image = $row['user_image'];
                      $user_email = $row['user_email'];
                      $user_role = $row['user_role'];

                  }

                  if (isset($_POST['update_user'])){

                      $user_id = $row['user_id'];
                      $username = $_POST['username'];
                      $user_password= $_POST['user_password'];
                      $user_firstname = $_POST['user_firstname'];
                      $user_lastname = $_POST['user_lastname'];
                      $user_image = $_FILES['user_image']['name'];
                      $user_image_temp = $_FILES['user_image']['tmp_name'];
                      $user_email = $_POST['user_email'];
                      $user_role = $_POST['user_role'];

                      move_uploaded_file($user_image_temp, "asset/img/face/$user_image");

                      if (empty($user_image)){

                          $query="SELECT * FROM users WHERE user_id=$the_user_id ";
                          $select_image=mysqli_query($connection, $query);

                          while ($row=mysqli_fetch_array($select_image)){
                              $user_image=$row['user_image'];
                          }
                      }

                      $query="UPDATE users SET ";
                      $query .="username ='{$username}', ";
                      $query .="user_password ='{$user_password}', ";
                      $query .="user_firstname ='{$user_firstname}', ";
                      $query .="user_lastname ='{$user_lastname}', ";
                      $query .="user_image ='{$user_image}', ";
                      $query .="user_email ='{$user_email}', ";
                      $query .="user_role ='{$user_role}' ";
                      $query .=" WHERE user_id ={$the_user_id} ";
                  }

                  $update_user=mysqli_query($connection, $query);

                  if(!$update_user){
                      die("QUERY FAILED" .mysqli_error($connection));
                  }
                 ?>

                  <div class="card-body">
                      <form action="" method="post" enctype="multipart/form-data">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">User Name</label>
                                      <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">User Password</label>
                                      <input type="password" class="form-control" name="user_password" value="<?php echo $user_password;?>" >
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Firstname</label>
                                      <input type="text" class="form-control" name="user_firstname" value="<?php echo $user_firstname;?>" >
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Last Name</label>
                                      <input type="text" class="form-control" name="user_lastname" value="<?php echo $user_lastname;?>" >
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="user_email" value="<?php echo $user_email;?>" >
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">User Role</label>
                                      <input type="text" class="form-control" name="user_role" value="<?php echo $user_role;?>" >
                                  </div>
                              </div>
                              <br><br><br><br>
                              <input type="file" class="form-control" name="user_image">
                          </div>
                          <button type="submit" class="btn btn-primary pull-right" name="update_user">Update User</button>
                          <div class="clearfix"></div>
                      </form>
                  </div>
              </div>
            </div>
              <div class="col-md-4">
                  <div class="card card-profile">
                      <div class="card-avatar">
                          <a href="#pablo">
                              <img class="img" src="assets/img/face/<?php echo $user_image;?>" />
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