<?php include 'includes/header.php'; ?>

'test'

<section class="featured">
	<div id="index">
			<!-- Responsive slider - START -->
    	<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
			<div class="slides" data-group="slides">
				<ul>
					<li>
						<div class="slide-body" data-group="slide">
							<img src="img/8.jpg" alt="">
							<div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
								<h2>We are creative design agency</h2>
								<div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></h4></div>
								<div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h3>With one to one swipe movement!</h3></div>
							</div>
						</div>
					</li>
					<li>
						<div class="slide-body" data-group="slide">
							<img src="img/2.jpg" alt="">
							<div class="caption header" data-animate="slideAppearDownToUp" data-delay="500" data-length="300">
								<h2>creative design Responsive slider</h2>
								<div class="caption-sub" data-animate="slideAppearUpToDown" data-delay="800" data-length="300"><h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span></h4></div>
								<div class="caption-sub" data-animate="slideAppearRightToLeft" data-delay="1200" data-length="300"><h3>Wonderfull Slides!</h3></div>
							</div>
						</div>
					</li>
  	    		<li>
              <div class="slide-body" data-group="slide">
                <img src="img/6.jpg" alt="">
                <div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
                  <h2>creative design Custom animations</h2>
                  <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4></div>
				  <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><h3><span>New style Slides!</span></h3></div>
		
				</div>
                </div>
  	    		</li>
			
  	    	</ul>
		</div>
        
        <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
        <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
        
		
    	</div>
      <!-- Responsive slider - END -->
	</div>
		</section>
		
		

<div class="wrapper row2">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group cta">
      <li class="one_third first">
        <article><strong class="numb">01</strong>
          <h6 class="heading font-x1"><a href="#">Vulputate ullamcorper</a></h6>
          <p>Rutrum elit nec tincidunt sed aenean aliquet mauris accumsan eget dui id&hellip;</p>
        </article>
      </li>
      <li class="one_third">
        <article><strong class="numb">02</strong>
          <h6 class="heading font-x1"><a href="#">Lobortis condimentum</a></h6>
          <p>Dolor eu suscipit facilisis vestibulum vitae semper nisl vivamus a ligula&hellip;</p>
        </article>
      </li>
      <li class="one_third">
        <article><strong class="numb">03</strong>
          <h6 class="heading font-x1"><a href="#">Malesuada hendrerit</a></h6>
          <p>Nulla ut imperdiet metus aliquam iaculis mi in tortor accumsan at lobortis&hellip;</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <h2 class="text-center">Future Teas</h2>
    

<?php //while($row = mysqli_fetch_array($result)):



$per_page = 4;

if (isset($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page="";
}

if ($page == "" || $page == 1){
    $page_1 = 0;
}
else{
    $page_1=($page * $per_page)-$per_page;
}

$post_count_query="SELECT * FROM products";
$find_count=mysqli_query($connection, $post_count_query);
$count=mysqli_num_rows($find_count);

$count = ceil($count / $per_page);



$query="SELECT * FROM products LIMIT $page_1, $per_page";
$select_product_query=mysqli_query($connection,$query);

if(isset($_POST['create_order'])){

}

while($row = mysqli_fetch_assoc($select_product_query)) {
    $pro_id = $row['pro_id'];
    $pro_title = $row['pro_title'];
    $pro_discount_price = $row['pro_discount_price'];
    $pro_date = $row['pro_date'];
    $pro_image = $row['pro_image'];
    $pro_content = substr($row['pro_content'], 0, 100);
    $pro_desc = substr($row['pro_desc'], 0, 100);
    $pro_price = $row['pro_price'];
    $pro_status = $row['pro_status'];

    ?>



    <div class="col-md-3">
      <h4><?php echo $pro_title; ?></h4>
        <img src="assets/images/products/<?php echo $pro_image ?>" alt="<?php echo $pro_tags; ?>" id="image" width="100px"/>
        <p class="list price text-danger">List Price: <s>$<?php echo $pro_discount_price; ?></s></p>
        <p class="price">Our Price:$<?php echo $pro_price; ?></p>
        <button type="button" class="btn btn-success img-responsive center-block" data-toggle="modal" data-target="#details-1-<?php echo $pro_id; ?>">Details</button>
    </div>

    <div class="modal fade-details-1" id="details-1-<?php echo $pro_id; ?>" tableindex="-1" role="dialog" aria-lablledby="details-1" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
    <div class="modal-heder">
    <button class="btn btn-danger close" type="button" data-dismiss="modal" aria-label="Close">
        
        <span aria-hidden="true">&times;</span>
        
        </button>
        <h4 class="modal-title text-center"><?php echo $pro_title; ?></h4>
        
    </div>
    <div class="modal-body">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <div class="center-block">
                <img src="assets/images/products/<?php echo $pro_image ?>" alt="Levis Jeans" class="dtails img-responsive" width="100px" />
            </div>
            </div>
            <div class="col-sm-6">
            
            <h4>Details</h4>
                <p><?php echo $pro_desc; ?></p>
                <hr/>
                <p>Price:$<?php echo $pro_discount_price; ?></p>



                <form action="" method="post">
                <div class="form-group">
                    <div class="col-xs-6">
                    <label for="quantity" id="quantity-label">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="qty" />
                    </div><br><br><br>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="order" id="order">Order</label>
                            <input type="text" class="form-control" id="pro_order_id" name="pro_order_id" value="<?php echo $pro_id; ?>" />
                        </div><br><br><br>
                        </div>
                    </div>
                    <button class="btn btn-warning" type="submit" name="create_order">
                        <a class=\"nav-link\" href='index%20.php?display={$order_id}'>
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Add to Cart</a>
                    </button>
                </form>

                </div>
        </div>
        </div>

    </div>
    <div class="modal-footer">
    <button class="btn btn-danger" data-dismiss="modal">Close</button>
<!--    <button class="btn btn-warning" type="submit" name="create_order">-->
<!--        <a class=\"nav-link\" href='index%20.php?display={$order_id}'>-->
<!--        <span class="glyphicon glyphicon-shopping-cart"></span>-->
<!--        Add to Cart</a>-->
<!--    </button>-->
    </div>
    </div>

</div>
</div>
    <?php } ?>


      <ul class="pager">
          <?php


          for ($i = 1; $i <= $count; $i++){

              if($page == $i){
                  echo "<li><a class='active_link' href='index.php?page={$i}'>{$i}</a></li>";
              }
              else{
                  echo "<li><a href='index%20.php?page={$i}'>{$i}</a></li>";
              }
          }


          ?>
    
  </main>
     </div>
          <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <article class="hoc container clear center"> 
    <!-- ################################################################################################ -->
    <h2 class="font-x3">Shopping Cart</h2>
      <?php
      if (!isset($_GET['display'])) {


          echo '<h1>Your Cart is Empty </h1>';

      }else{
          $order_id = $_GET['display'];
          include './admin/add_cart.php';
      }
      ?>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">

  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            The difference between natural green tea and black tea</h2>
        <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style">Here is the world number best tea</h3>
    </div>

    <div class="group">
      <article class="one_third first">
          <h5 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
              The difference between natural green tea and black tea</h5>
          <p class="mbr-section-subtitle display-5 align-center mbr-fonts-style">Here is the world number best tea</p>
      </article>
        <?php

        $query="SELECT * FROM products_description ";
        $select_pro_desc_query=mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_pro_desc_query)) {
        $pro_title= $row['pro_title'];
        $pro_desc = $row['pro_desc'];
        $pro_image = $row['pro_image'];

        ?>
      <article class="one_third"><a href="#"><img class="btmspace-30" src="assets/images/<?php echo $pro_image;?>" alt=""></a>
        <h3 class="heading"><?php echo $pro_title;?></h3>
        <p><?php echo $pro_desc;?></p>
        <p class="nospace"><a href="#">Read More &raquo;</a></p>
      </article>
        <?php }?>
    </div>

    <!-- ################################################################################################ -->
  </section>
</div>



<?php 
include 'levis_jeans_details.php';
include 'includes/footer.php'; 
      

?>		
