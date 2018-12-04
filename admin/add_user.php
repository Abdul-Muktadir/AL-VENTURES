
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


                  if (isset($_POST['create_user'])){

//    $user_id = $row['user_id'];
                      $username = $_POST['username'];
                      $user_password= $_POST['user_password'];
                      $user_firstname = $_POST['user_firstname'];
                      $user_lastname = $_POST['user_lastname'];
                      $user_image = $_FILES['user_image']['name'];
                      $user_image_temp = $_FILES['user_image']['tmp_name'];
                      $user_email = $_POST['user_email'];
                      $user_role = $_POST['user_role'];

                      move_uploaded_file($user_image_temp, "../images/$user_image");

                      $query="INSERT INTO users (username, user_password, user_firstname, user_lastname, user_image, user_email,user_role)";
                      $query .="VALUES('$username','$user_password', $user_firstname', '$user_lastname', '$user_image', '$user_email', '$user_role') ";

                      $create_user_query=mysqli_query($connection, $query);
                      if (!$create_user_query){
                          die("QUERY FAILED".mysqli_error($connection));
                      }
                  }
                  ?>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company (disabled)</label>
                          <input type="text" class="form-control" name="user_name" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control" name="user_password">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="user_email">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control" name="user_firstname">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="user_lastname">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">User Role</label>
                          <input type="text" class="form-control" name="user_role">
                        </div>
                      </div>
                      </div>
                    </div>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <input type="file" class="form-control" name="user_image">
                          </div>
                      </div>
                  </div>
                    <button type="submit" class="btn btn-primary pull-right" name="create_user">Create User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="assets/img/products/marc.jpg" />
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
