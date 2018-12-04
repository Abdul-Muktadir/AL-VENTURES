
      <!-- End Navbar -->


      <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-8">
                      <div class="card">
                          <div class="card-header card-header-primary">
                              <h4 class="card-title">Create User</h4>
                              <p class="card-category">Complete your profile</p>
                          </div>
    <?php

    if (isset($_SESSION['username'])){

        $username=$_SESSION['username'];

        $query="SELECT * FROM users WHERE username='$username'";
        $select_profile_query=mysqli_query($connection, $query);
        if (!$select_profile_query){
            die("QUERY FAILED" .mysqli_error($connection));
        }

        while ($row=mysqli_fetch_array($select_profile_query)){

            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_password = $row['user_password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_image = $row['user_image'];
            $user_role = $row['user_role'];

        }

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
                            <input type="password" class="form-control" name="user_password" value="<?php echo $user_password;?>"disabled >
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
                            <input type="text" class="form-control" name="user_role" value="<?php echo $user_role;?>"disabled >
                        </div>
                    </div>
                    <br><br><br><br>
                    <input type="file" class="form-control" name="user_image" value="<?php echo $user_image;?>" disabled>
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