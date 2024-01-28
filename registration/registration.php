<?php
   include('../action.php');
   if (!isset($_SESSION['uid'])) {
       header('location:../index.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Booking</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required />
                        </div>
                        <div class="form-group">
                   <h4 class="form-input form-control">Event type  : <select class="form-input" name="type"  id="select" >
                    <option></option>
                      <option>Wedding</option>
                        <option>Engagement</option>
                          <option>Reception</option>
                            <option>Birthday</option>
                              <option>Surprise event</option>
                              <option>Baby shower</option>
                              <option>Puberty</option>
                              <option>Anniversary</option>
                   </select>  </h4>
                      
             </div>
                        <div class="form-group">
                          <h3 class="form-input"> Event Date: &nbsp   &nbsp<input type="date"  name="date" id="name" required/></h3>  
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="location" id="name" placeholder="Location" required />
                        </div>
                        <div class="form-group">
                            <input type="time" class="form-input" name="start" id="name" placeholder="Starting Time" required />
                        </div>

                         <div class="form-group">
                            <input type="time" class="form-input" name="end" id="name" placeholder="Ending Time" required/>
                        </div>
                      
                         <div class="form-group">
                            <input type="text" class="form-input" name="pno" id="name" placeholder="Number of person" required/>
                        </div>
                        
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor\jquery\jquery.min.js"></script>
    <script src="js\main.js"></script>
</body>
</html>