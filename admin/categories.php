<?php include 'includes/admin_header.php'; ?>

<body class="">
  <div class="wrapper ">
      <?php include 'includes/admin_sidebar.php'; ?>

    <div class="main-panel">
      <!-- Navbar -->
    <?php include 'includes/admin_navigation.php'; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">CATEGORIES</h4>
                <p class="card-category">This page can Add Update Edit and Delete
                  <a target="_blank" href="https://design.google.com/icons/icons.php">Google</a>
                </p>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                      <table class="table table-hover">
                          <thead>
                          <th>ID</th>
                          <th>Category</th>
                          <th>Action</th>
                          </thead>
                          <tbody>
                          <?php
                          $query="SELECT * FROM categories";
                          $select_category =mysqli_query($connection,$query);

                          while($row = mysqli_fetch_assoc($select_category)) {
                              $cat_id = $row['cat_id'];
                              $cat_title = $row['cat_title'];


                              echo "<tr>";
                              echo "<td>{$cat_id}</td>";
                              echo "<td>{$cat_title}</td>";
//                              echo "<td><a href='icons.php?delete={$cat_id}'>Delete</a> </td>";
                              echo "<td><a class=\"nav-link\" href='categories.php?delete={$cat_id}'>
                        <i class=\"material-icons\">delete</i>
                        <p class=\"d-lg-none d-md-block\">
                              Account
                        </p>
                    </a></td>";
//                              echo "<td><a href='icons.php?edit={$cat_id}'>Edit</a> </td>";
                              echo "<td><a class=\"nav-link\" href='categories.php?edit={$cat_id}'>
                        <i class=\"material-icons\">edit</i>
                        <p class=\"d-lg-none d-md-block\">
                              Account
                        </p>
                    </a></td>";
                              echo "</tr>";



                          }
                          ?>

                          </tbody>
                      </table>
                        <?php
                      if (isset($_GET['delete'])){
                      $the_cat_id=$_GET['delete'];

                      $query="DELETE FROM categories WHERE cat_id={$the_cat_id} ";
                      $delete_query=mysqli_query($connection, $query);
                      header("Location: categories.php");
                      }


                      if (isset($_GET['edit'])){
                          $cat_id=$_GET['edit'];

                          include 'update_categories.php';
                      }

                      ?>

                  </div>
                </div>
                  <?php
                  if(isset($_POST['submit'])){
                  $cat_title= $_POST['cat_title'];

                  if ($cat_title == "" || empty($cat_title)){
                  echo "You are missing this field";
                  }
                  else{
                  $query="INSERT INTO categories(cat_title) ";
                  $query .="VALUE ('{$cat_title}') ";

                  $create_category_query=mysqli_query($connection, $query);

                  if (!$create_category_query){
                  die("QUERY FAILED".mysqli_error($connection));
                  }
                  header("Location: categories.php");
                  }
                  }

                  ?>
                  <div class="col-md-6">
                      <div class="card-body">
                          <form action="" method="post">
                              <label for="cat_title">Category Title</label>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="cat_title">
                              </div>
                              <div class="form-group">
                                  <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                              </div>
                          </form>
                      </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
<?php include 'includes/admin_footer.php'; ?>