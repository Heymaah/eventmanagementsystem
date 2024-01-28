<?php
  include('action.php');
  if(!isset($_SESSION['name'])){
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
            <a class="nav-link js-scroll active" href="registration/venue.php">Venue</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/catering.php">Catering</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/photoshop.php">Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/decoration.php">Decoration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/makeup.php">Makeup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/trousseau.php">Trousseau</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/music.php">Entertainment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/costume.php">Costume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/cake.php">Cake</a>
          </li>
       
        
          <li class="nav-item">
            <a class="nav-link js-scroll" href="checkbooking.php">Check Booking</a>
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
        <h2 class="text-center mt-5 color-d">Registered Wedding</h2>
  <br>
   <div class="container mt-4">
     <div class="card">
       <div class="card-header bg-info">
         <div class="row">
         <div class="col-md-1">ID</div>
           <div class="col-md-2">Name</div>
           <div class="col-md-2">Type</div>
           <div class="col-md-2">Date</div>
           <div class="col-md-2">Location</div>
           <div class="col-md-1">Person</div>
           <div class="col-md-2">Total Cost</div>
         </div>
       </div>
        <div class="card-body">
          <?php
            if (isset($_SESSION['name'])) {
               $sql="SELECT * FROM registration";
               $run=mysqli_query($con,$sql);
               while($row=mysqli_fetch_array($run)){
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

                $sql1="SELECT * FROM cake WHERE ckid='$ckid' ";
                $run1=mysqli_query($con,$sql1);
                $price7 = 0;
                if(mysqli_num_rows($run1)!=0){
                  $row=mysqli_fetch_array($run1);
                  $price7=$row['price'];
                  $ckname=$row['name'];
                }
                  $sql1="SELECT * FROM costume WHERE ctid='$ctid' ";
                  $run1=mysqli_query($con,$sql1);
                  $price8 = 0;
                  if(mysqli_num_rows($run1)!=0){
                    $row=mysqli_fetch_array($run1);
                    $price8=$row['price'];
                    $ctname=$row['name'];
                  }
                    $sql1="SELECT * FROM makeup WHERE mkid='$mkid' ";
                    $run1=mysqli_query($con,$sql1);
                    $price9 = 0;
                    if(mysqli_num_rows($run1)!=0){
                      $row=mysqli_fetch_array($run1);
                      $price9=$row['price'];
                      $mkname=$row['name'];
                    }
              $sql1="SELECT * FROM catering WHERE cid='$cid' ";
              $run1=mysqli_query($con,$sql1);
              $price1 = 0;
              if(mysqli_num_rows($run1)!=0){
                $row=mysqli_fetch_array($run1);
                $price1=$row['price'];
                $cname=$row['name'];
              }
              $sql1="SELECT * FROM trousseau WHERE tid='$tid' ";
              $run1=mysqli_query($con,$sql1);
              $price2 = 0;
              if(mysqli_num_rows($run1) !=0){
                $row=mysqli_fetch_array($run1);
                $price2=$row['price'];
                $tname=$row['name'];
              }
              $sql1="SELECT * FROM music WHERE mid='$mid' ";
              $run1=mysqli_query($con,$sql1);
              $price3 = 0;
              if(mysqli_num_rows($run1) !=0){
                $row=mysqli_fetch_array($run1);
                $price3=$row['price'];
                $mname=$row['name'];
                }
              $sql1="SELECT * FROM photoshop WHERE pid='$pid' ";
              $run1=mysqli_query($con,$sql1);
              $price4 = 0;
              if(mysqli_num_rows($run1) !=0){
                $row=mysqli_fetch_array($run1);
                $price4=$row['price'];
                $pname=$row['name'];
              }
             
              $sql1="SELECT * FROM decoration WHERE did='$did' ";
              $run1=mysqli_query($con,$sql1);
              $price5 = 0;
              if(mysqli_num_rows($run1)!=0){
                $row=mysqli_fetch_array($run1);
                $price5=$row['price'];
                $dname=$row['name'];
              }
              $sql1="SELECT * FROM venue WHERE vid='$vid' ";
              $run1=mysqli_query($con,$sql1);
              $price6 =0;
              if(mysqli_num_rows($run1) !=0){
                $row=mysqli_fetch_array($run1);
                $price6=$row['price'];
                $vname=$row['name'];
              }
              $sum=$price1+$price2+$price3+$price4+$price5+$price6+$price7+$price8+$price9+$s;
                echo " <div class='row'>
                        <div class='col-md-1'><h5>$reg_id</h5></div>
                        <div class='col-md-2'><h5>$name</h5></div>
                        <div class='col-md-2'><h5>$type</h5></div>
                        <div class='col-md-2'><h5>$date</h5></div>
                        <div class='col-md-2'><h5>$location</h5></div>
                        <div class='col-md-1'><h5>$pno</h5> </div>
                        <div class='col-md-2'><h5>$sum</h5></div>
                       </div><br>";
               }
            }
          ?>
       </div>
     </div>
   </div>
  
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
  

  <!--/ Section Services Star /-->

  <!--/ Section Blog Star /-->
  <!--/ Section Blog End /-->
  
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
