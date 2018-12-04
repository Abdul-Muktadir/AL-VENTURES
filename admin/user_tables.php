
<?php include 'function.php';?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">

                    <table class="table table-hover" id="dataTable">
                      <thead class="">
                        <th>ID</th>
                        <th>User Name</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Role</th>
                      </thead>
                      <tbody>

                      <?php
                      $query="SELECT * FROM users";
                      $select_user =mysqli_query($connection,$query);

                      while($row = mysqli_fetch_assoc($select_user)) {
                          $user_id = $row['user_id'];
                          $username = $row['username'];
                          $user_firstname = $row['user_firstname'];
                          $user_lastname = $row['user_lastname'];
                          $user_image = $row['user_image'];
                          $user_email = $row['user_email'];
                          $user_role = $row['user_role'];


                          echo "<tr>";
                          echo "<td>{$user_id}</td>";
                          echo "<td>{$username}</td>";
                          echo "<td>{$user_firstname}</td>";
                          echo "<td>{$user_lastname}</td>";
                          echo "<td>{$user_email}</td>";
                          echo "<td><img class='img-responsive' width='100px' src='asset/img/face/{$user_image}' alt='image' </td>";
                          echo "<td>{$user_role}</td>";
                          echo "<td><a class=\"nav-link\" href='loader.php?source=delete&delete={$user_id}'>
                        <i class=\"material-icons\">delete</i>
                        <p class=\"d-lg-none d-md-block\">
                              Delete
                        </p>
                    </a></td>";
                          echo "<td><a class=\"nav-link\" href='loader.php?source=edit_user&p_id=$user_id'>
                        <i class=\"material-icons\">edit</i>
                        <p class=\"d-lg-none d-md-block\">
                              Edit
                        </p>
                    </a></td>";
                          echo "</tr>";
                      }
                      ?>

                      </tbody>
                    </table>

                      <?php
//                      delete();
                      if (isset($_GET['delete'])){
                          $the_user_id=$_GET['delete'];

                          $query="DELETE FROM users WHERE user_id={$the_user_id} ";
                          $delete_query=mysqli_query($connection, $query);
                          header("Location: loader.php?source=delete");
                      }
                      if (isset($_GET['edit'])){
                          $cat_id=$_GET['edit'];

                          include 'update_categories.php';
                      }

                      ?>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>