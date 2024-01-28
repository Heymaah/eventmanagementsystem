<?php
  include('action.php');
  if(!isset($_SESSION['uname'])){
    header('location:index.php');
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Eventmood</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/wed3.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Eventmood</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/registration.php">booking</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll" href="#das"><?php echo $_SESSION['urname']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/1.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Event Planner</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Discover everything you need to plan your big day</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
<div id="#das">
 <h2 class="text-center">Booking Details</h2>
  <br>
   <div class="container-fliud">
     <div class="card">
       <div class="card-header bg-info">
         <div class="row">
           <div class="col-md-2"> Name</div>
           <div class="col-md-2">Event Type</div>
           <div class="col-md-1">Event Date</div>
           <div class="col-md-1">Event Location</div>
           <div class="col-md-1">starting Time</div>
           <div class="col-md-1.5">Ending Time</div>
           <div class="col-md-1">Person </div>
           <div class="col-md-2">Total Cost</div>
           <div class="col-md-0.5">Action</div>
         </div>
       </div>
        <div class="card-body">
          <?php
            if (isset($_SESSION['uname'])) {
              $name=$_SESSION['urname'];
               $sql="SELECT * FROM registration WHERE name='$name'";
               $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)==0){
                  echo "<h2 class='text-center'>Wedding Not Register Yet</h2>";
                 }else{
               $row=mysqli_fetch_array($run);
               $reg_id=$row['reg_id'];
               $name=$row['name'];
               $type=$row['type'];
               $date=$row['date'];
               $location=$row['location'];
               $start=$row['start'];
               $end=$row['end'];
               $pno=$row['pno'];
                $s=$pno*100;
                $vid=$row['vid'];
                $cid=$row['cid'];
                $pid=$row['pid'];
               $did=$row['did'];
               $mkid=$row['mkid'];
               $tid=$row['tid'];
               $mid=$row['mid'];
               $ctid=$row['ctid'];
               $ckid=$row['ckid'];
              $sql="SELECT * FROM catering WHERE cid='$cid' ";
              $run=mysqli_query($con,$sql);
              $price1 = 0;
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price1=$row['price'];
              }
              $sql="SELECT * FROM trousseau WHERE tid='$tid' ";
              $run=mysqli_query($con,$sql);
              $price2 = 0;
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price2=$row['price'];
              }
              $price3=0;
              $sql="SELECT * FROM music WHERE mid='$mid' ";
              $run=mysqli_query($con,$sql);
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price3=$row['price'];
              }
              $price4=0;
              $sql="SELECT * FROM photoshop WHERE pid='$pid' ";
              $run=mysqli_query($con,$sql);
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price4=$row['price'];
              }
              
              $sql="SELECT * FROM decoration WHERE did='$did' ";
              $run=mysqli_query($con,$sql);
              $price5 = 0;
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price5=$row['price'];
              }
            
              $sql="SELECT * FROM venue WHERE vid='$vid' ";
              $run=mysqli_query($con,$sql);
              $price6 = 0;
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price6=$row['price'];
              }
              $sql="SELECT * FROM cake WHERE ckid='$ckid' ";
              $run=mysqli_query($con,$sql);
              $price7 = 0;
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price7=$row['price'];
            
              }
                $sql="SELECT * FROM costume WHERE ctid='$ctid' ";
                $run=mysqli_query($con,$sql);
                $price8 = 0;
                if(mysqli_num_rows($run)!=0){
                  $row=mysqli_fetch_array($run);
                  $price8=$row['price'];
             
                }
                  $sql="SELECT * FROM makeup WHERE mkid='$mkid' ";
                  $run=mysqli_query($con,$sql);
                  $price9 = 0;
                  if(mysqli_num_rows($run)!=0){
                    $row=mysqli_fetch_array($run);
                    $price9=$row['price'];
                  
                  }
              $sum=$price1+$price2+$price3+$price4+$price5+$price6+$s; 
              echo " <div class='row'>
              <div class='col-md-2'><h5>$name</h5></div>
              <div class='col-md-2'><h5>$type</h5></div>
              <div class='col-md-1'><h5>$date</h5></div>
              <div class='col-md-1'><h5>$location</h5></div>
              <div class='col-md-1'><h5>$start</h5></div>
              <div class='col-md-1.5'><h5>$end</h5></div>
              <div class='col-md-1'><h5>$pno</h5> </div>
              <div class='col-md-2'><h5>$sum</h5></div>
              <div class='col-md-0.5'><div class='btn btn-outline-danger del' rid='$reg_id'>Cancel</div></div>
                       </div><br>";
            }
          }
          ?>
       </div>
     </div>
   </div>
</div>
<div class="container">
  <div class="card mt-4">
    <div class="card-header bg-info">
      <h3 class="text-center">Service Details</h3>
    </div>
   
       <?php
            if (isset($_SESSION['uname'])) {
              $name=$_SESSION['urname'];
               $sql="SELECT * FROM registration WHERE name='$name'";
               $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)==0){
                  echo "<h2 class='text-center'>Wedding Not Register Yet</h2>";
                 }else{
               $row=mysqli_fetch_array($run);
               $reg_id=$row['reg_id'];
               $name=$row['name'];
               $type=$row['type'];
               $date=$row['date'];
               $location=$row['location'];
               $start=$row['start'];
               $end=$row['end'];
               $pno=$row['pno'];
                $s=$pno*100;
                $vid=$row['vid'];
                 $cid=$row['cid'];
                 $pid=$row['pid'];
                $did=$row['did'];
                $mkid=$row['mkid'];
                $tid=$row['tid'];
                $mid=$row['mid'];
                $ctid=$row['ctid'];
                $ckid=$row['ckid'];
              $sql="SELECT * FROM catering WHERE cid='$cid' ";
              $run=mysqli_query($con,$sql);
              $price1 = 0;
              $cname = '';
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price1=$row['price'];
                $cname=$row['name'];
              }
              
              $sql="SELECT * FROM trousseau WHERE tid='$tid' ";
              $run=mysqli_query($con,$sql);
              $price2 = 0;
              $tname = '';
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price2=$row['price'];
                $tname=$row['name'];  
              }
             
              $sql="SELECT * FROM music WHERE mid='$mid' ";
              $run=mysqli_query($con,$sql);
              $price3 = 0;
              $mname = '';
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price3=$row['price'];
                $mname=$row['name']; 
              }
              
              $sql="SELECT * FROM photoshop WHERE pid='$pid' ";
              $run=mysqli_query($con,$sql);
              $price4 = 0;
              $pname='';
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price4=$row['price'];
                $pname=$row['name'];
              }
             
              $sql="SELECT * FROM decoration WHERE did='$did' ";
              $run=mysqli_query($con,$sql);
              $price5=0;
              $dname = '';
              if(mysqli_num_rows($run) !=0){
                $row=mysqli_fetch_array($run);
                $price5=$row['price'];
                $dname=$row['name'];
              }
              $sql="SELECT * FROM venue WHERE vid='$vid' ";
              $run=mysqli_query($con,$sql);
              $price6 = 0;
              $vname ='';
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price6=$row['price'];
                $vname=$row['name'];
              }
              $sql="SELECT * FROM cake WHERE ckid='$ckid' ";
              $run=mysqli_query($con,$sql);
              $price7 = 0;
              $ckname='';
              if(mysqli_num_rows($run)!=0){
                $row=mysqli_fetch_array($run);
                $price7=$row['price'];
                $ckname=$row['name'];
              }
                $sql="SELECT * FROM costume WHERE ctid='$ctid' ";
                $run=mysqli_query($con,$sql);
                $price8 = 0;
                $ctname='';
                if(mysqli_num_rows($run)!=0){
                  $row=mysqli_fetch_array($run);
                  $price8=$row['price'];
                  $ctname=$row['name'];
                }
                  $sql="SELECT * FROM makeup WHERE mkid='$mkid' ";
                  $run=mysqli_query($con,$sql);
                  $price9 = 0;
                  $mkname='';
                  if(mysqli_num_rows($run)!=0){
                    $row=mysqli_fetch_array($run);
                    $price9=$row['price'];
                    $mkname=$row['name'];
                  }
              $sum=$price1+$price2+$price3+$price4+$price5+$price6+$price7+$price8+$price9+$s; 
               echo " <div class='card-body'>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Name :</h5>
          <h5>Event Date :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$name</h5>
          <h5>$date</h5>
        </div>
      </div><br>
      <h4 class='text-center'>Catering Details</h4><hr>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Catering Name :</h5>
          <h5>Price :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$cname</h5>
          <h5>$price1</h5>
        </div>
      </div><br>
      <h4 class='text-center'>Decoration Details</h4><hr>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Decoration  :</h5>
          <h5>Price :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$dname</h5>
          <h5>$price5</h5>
        </div>
      </div><br>
      <h4 class='text-center'>Music Details</h4><hr>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Music Style :</h5>
          <h5>Price :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$mname</h5>
          <h5>$price3</h5>
        </div>
      </div><br>
      <h4 class='text-center'>Venue Details</h4><hr>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Venue :</h5>
          <h5>Price :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$vname</h5>
          <h5>$price6</h5>
        </div>
      </div><br>
      <h4 class='text-center'>Trousseau Details</h4><hr>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Theme Type :</h5>
          <h5>Price :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$tname</h5>
          <h5>$price2</h5>
        </div>
      </div><br>  
      <h4 class='text-center'>Cake Details</h4><hr>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Cake Name :</h5>
          <h5>Price :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$ckname</h5>
          <h5>$price7</h5>
        </div>
      </div><br>
      <h4 class='text-center'>Photoshop Details</h4><hr>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Photo :</h5>
          <h5>Price :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$pname</h5>
          <h5>$price4</h5>
        </div>
      </div>
      <h4 class='text-center'>Costume Details</h4><hr>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Catering Name :</h5>
          <h5>Price :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$ctname</h5>
          <h5>$price8</h5>
        </div>
      </div><br>
      <h4 class='text-center'>Makeup Details</h4><hr>
      <div class='row'>
        <div class='col-md-6'>
          <h5>Catering Name :</h5>
          <h5>Price :</h5>
        </div>
        <div class='col-md-6'>
          <h5>$mkname</h5>
          <h5>$price9</h5>
        </div>
      </div><br>
    </div>
    <div class='card-footer'>
      <h3 class='text-center'>Total Fare :$sum </h3>
    </div>";
    
            }
          }
          ?>
  
  </div>
</div>
  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route mt-4">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
            Select  Services
            </h3>
            <p class="subtitle-a">
             
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
        <a href="venue.php">
          <div class="service-box" style="background-image:url(img/ven.jpg); background-size: cover;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Venue</b></h2>
              <p class="s-description text-center text-white"><b>
               </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <a href="cat.php">
           <div class="service-box" style="background-image:url(img/cat.jpg); background-size: cover;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Catering</b></h2>
              <p class="s-description text-center text-white"><b>
                </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <a href="photo.php">
           <div class="service-box" style="background-image:url(img/media.jpg); background-size: cover;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Media</b></h2>
              <p class="s-description text-center text-white"><b>
                </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <a href="decoration.php">
           <div class="service-box" style="background-image:url(img/theme.jpg); background-size: cover;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Decoration</b></h2>
              <p class="s-description text-center text-white"><b>
              </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <a href="makeup.php">
           <div class="service-box" style="background-image:url(img/makeup.jpg); background-size: cover;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Makeup Artist</b></h2>
              <p class="s-description text-center text-white"><b>
                </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <a href="trousseau.php">
          <div class="service-box" style="background-image:url(img/trousseau.jpg); background-size: cover;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Trousseau Packing</b></h2>
              <p class="s-description text-center text-white"><b>
               </b>
              </p>
            </div>
          </div>
        </div>
      </div>




      <div class="row">
        <div class="col-md-4">
        <a href="music.php">
          <div class="service-box" style="background-image:url(img/dj.jpg); background-size: cover;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Entertainment</b></h2>
              <p class="s-description text-center text-white"><b>
               </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <a href="costume.php">
           <div class="service-box" style="background-image:url(img/costumee.jpg); background-size: cover;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Costume</b></h2>
              <p class="s-description text-center text-white"><b>
                </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <a href="cake.php">
           <div class="service-box" style="background-image:url(img/cakess.jpg); background-size: cover;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Cakes</b></h2>
              <p class="s-description text-center text-white"><b>
                </b>
              </p>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->
   

  <!--/ Section Blog Star /-->
  <!--/ Section Blog End /-->
  

  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
