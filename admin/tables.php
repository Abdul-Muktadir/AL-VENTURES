
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
                        <th>P</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>Tag</th>
                        <th>Comment</th>
                        <th>Date</th>
                      </thead>
                      <tbody>

                      <?php
                      $query="SELECT * FROM products";
                      $select_product =mysqli_query($connection,$query);

                      while($row = mysqli_fetch_assoc($select_product)) {
                          $pro_id = $row['pro_id'];
                          $pro_category_id = $row['pro_category_id'];
                          $pro_title = $row['pro_title'];
                          $pro_image = $row['pro_image'];
                          $pro_content = $row['pro_content'];
                          $pro_status = $row['pro_status'];
                          $pro_tags = $row['pro_tags'];
                          $pro_comment_count = $row['pro_comment_count'];
                          $pro_date = $row['pro_date'];


                          echo "<tr>";
                          echo "<td>{$pro_id}</td>";


                          $query="SELECT * FROM categories WHERE cat_id={$pro_category_id} ";
                          $select_categories_id=mysqli_query($connection,$query);

                          while($row = mysqli_fetch_assoc($select_categories_id)) {
                              $cat_id = $row['cat_id'];
                              $cat_title = $row['cat_title'];

                              echo "<td>{$cat_title}</td>";

                          }

                          echo "<td>{$pro_title}</td>";
                          echo "<td><img class='img-responsive' width='100px' src='assets/img/products/{$pro_image}' alt='image' </td>";
                          echo "<td>{$pro_content}</td>";
                          echo "<td>{$pro_status}</td>";
                          echo "<td>{$pro_tags}</td>";
                          echo "<td>{$pro_comment_count}</td>";
                          echo "<td>{$pro_date}</td>";
                          echo "<td><a class=\"nav-link\" href='loader.php?delete={$pro_id}'>
                        <i class=\"material-icons\">delete</i>
                        <p class=\"d-lg-none d-md-block\">
                              Delete
                        </p>
                    </a></td>";
                          echo "<td><a class=\"nav-link\" href='loader.php?source=edit_product&p_id=$pro_id'>
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
                          $the_pro_id=$_GET['delete'];

                          $query="DELETE FROM products WHERE pro_id={$the_pro_id} ";
                          $delete_query=mysqli_query($connection, $query);
                          header("Location: loader.php");
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