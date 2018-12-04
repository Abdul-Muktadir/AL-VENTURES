<?php

if(isset($_POST['create_order'])){
        echo $qty= $_POST['qty'];
        echo $pro_order_id= $_POST['pro_order_id'];

        $query="INSERT INTO orders(qty, pro_order_id) ";
        $query .="VALUE ('{$qty}','{$pro_order_id}')";

        $create_order_query=mysqli_query($connection, $query);

        if (!$create_order_query){
            die("QUERY FAILED".mysqli_error($connection));
        }

}


?>
<!--        <table class="table table-hover" id="dataTable" style="color: #000;">-->
<!--            <thead class="">-->
<!--            <th>Product Image</th>-->
<!--            <th>Product Name</th>-->
<!--            <th>Price</th>-->
<!--            <th>Quantity</th>-->
<!--            <th>Action</th>-->
<!--            </thead>-->
<!--            <tbody>-->
<!---->
<!--        --><?php
//
//        if (isset($_GET['display'])){
//            $order_id=$_GET['display'];
//
//
//
//                      $query="SELECT * FROM orders WHERE order_id={$order_id}";
//                      $select_orders =mysqli_query($connection, $query);
//                        if (!$select_orders){
//                            die("QUERY FAILED" .mysqli_error($connection));
//                        }
//                      while($row = mysqli_fetch_assoc($select_orders)) {
//                          $order_id = $row['order_id'];
//                          $pro_order_id = $row['pro_order_id'];
//                          $qty = $row['qty'];
//
//                          echo "<tr>";
//
//
//                          $query = "SELECT * FROM products WHERE pro_id={$pro_order_id} ";
//                          $select_orders_id = mysqli_query($connection, $query);
//
//                          while ($row = mysqli_fetch_assoc($select_orders_id)) {
//                              $pro_id = $row['pro_id'];
//                              $pro_title = $row['pro_title'];
//                              $pro_image = $row['pro_image'];
//                              $pro_price = $row['pro_price'];
//
//                              echo "<td><img class='img-responsive' width='10px' src='./admin/assets/img/products/{$pro_image}' alt='image' </td>";
//                              echo "<td>{$pro_title}</td>";
//
//                              echo "<td>{$pro_price}</td>";
//                          }
//                          echo "<td>{$qty}</td>";
//                          echo "<td><a class=\"nav-link\" href='loader.php?delete={$order_id}'>
//                        <i class=\"material-icons\">delete</i>
//                        <p class=\"d-lg-none d-md-block\">
//                              Remove
//                        </p>
//                    </a></td>";
//
//                          echo "</tr>";
//                      }
//                      }
//                      else{
//                          echo 'Nothing is showing';
//                      }
//                      ?>
        </tbody>
        </table>
        <?php
//        if (isset($_POST['create_cus'])){
//            $cat_id=$_GET['cat_id'];
//            $the_cat_title=$_POST['cat_title'];
//
//            $query="UPDATE categories SET cat_title='{$the_cat_title}' WHERE cat_id={$cat_id} ";
//            $update_query=mysqli_query($connection, $query);
//                                   header("Location: categories.php");
//            if (!$update_query){
//                die("QUERY FAILED". mysqli_error($connection));
//            }
//        }
        ?>
<!---->
<!---->
<!--        <form action="" method="post" enctype="multipart/form-data">-->
<!--            <div class="row">-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">First Name</label>-->
<!--                        <input type="text" class="form-control" name="cus_firstname" required>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">Last Name</label>-->
<!--                        <input type="date" class="form-control" name="cus_lastname" required>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">Address</label>-->
<!--                        <input type="text" class="form-control" name="cus_address" required>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">City</label>-->
<!--                        <input type="text" class="form-control" name="cus_city" required>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">Postal Code</label>-->
<!--                        <input type="text" class="form-control" name="cus_postal_code" required>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                            <label class="bmd-label-floating">Country</label>-->
<!--                            <select id="" class="form-control" name="cus_country_id" required>-->
<!--                                --><?php
//
//                                //                                $query="SELECT * FROM countries";
//                                //                                $select_countries=mysqli_query($connection,$query);
//                                //
//                                //                                if(!$select_countries){
//                                //                                    die("QUERY FAILED" .mysqli_error($connection));
//                                //                                }
//                                //
//                                //                                while($row = mysqli_fetch_assoc($select_countries)) {
//                                //                                    $country_id = $row['country_id'];
//                                //                                    $country_name = $row['country_name'];
//                                //
//                                //                                    echo " <option value='$country_id'>$country_name</option>";
//                                //                                }
//                                ?>
<!--                            </select>-->
<!--                        </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">Phone</label>-->
<!--                        <input type="text" class="form-control" name="cus_phone" >-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">Email</label>-->
<!--                        <input type="text" class="form-control" name="email" >-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">Credit Card Number</label>-->
<!--                        <input type="text" class="form-control" name="credit_card_num" >-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">Credit Card Type</label>-->
<!--                        <input type="text" class="form-control" name="credit_card_type" >-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">Shipment Address</label>-->
<!--                        <input type="text" class="form-control" name="ship_address" >-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                        <label class="bmd-label-floating">Shipment Date</label>-->
<!--                        <input type="text" class="form-control" name="ship_date" >-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-primary pull-right" name="create_cus">Send</button>-->
<!--            <div class="clearfix"></div>-->
<!--        </form>-->