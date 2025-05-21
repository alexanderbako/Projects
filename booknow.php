<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alex Hotels - BOOK NOW</title>
    
    <?php require('links.php');?>
  </head>
  <body class="bg-light">
    
  
    <?php require ('header.php') ?>

    <style>
      .pop:hover{
        border-top-color: aquamarine !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }
    </style>

    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">BOOK NOW </h2>
      <br>
       <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">click the button on your preffered room to make a booking with us
         </p>
    </div>
<form action="book.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
        
        </div>
        <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-4">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title mb-1">Standard Room</h5>
        <div class="features mb-4">
              <h6 class = "mb-3">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
               1 room
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              1 bathroom
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
            1 sofa
         </span>
         <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
          1 bed
       </span>
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Facilitiess</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              wifi
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
             television
          </span>
          <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
           AC
        </span>
        <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
         room heater
      </span>
          </div>
         
            </span>
            
          </div>
          
          
        </div>
        <div class="col-md-2 text-align-center"  >
        <h5 class = "mb-4">$100 per night</h5>
        
           <input type="submit" value="booknow" name="StandardRoom" class="btn btn-sm w-100 text-white bg-dark shadow-none mb-2">
           <input type="submit" value="CancelBooking" name="cancel" class="btn btn-sm w-100 text-white bg-dark shadow-none ">
          </div>
        </div>
      </div>
      
      <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-4">
      <img src="images/rooms/2.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title mb-1">VIP room</h5>
        <div class="features mb-4">
              <h6 class = "mb-3">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
               1 room
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              1 bathroom
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
            1 sofa
         </span>
         <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
          1 bed
       </span>
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Facilitiess</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              wifi
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
             television
          </span>
          <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
           AC
        </span>
        <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
         room heater
      </span>
          </div>
         
            </span>
            
          </div>
          
          
        </div>
        <div class="col-md-2 text-align-center">
        <h5 class = "mb-4">$200 per night</h5>
        
        <input type="submit" value="booknow" name="VIP" class="btn btn-sm w-100 text-white bg-dark shadow-none mb-2">
           <input type="submit" value="CancelBooking" name="cancelVIP" class="btn btn-sm w-100 text-white bg-dark shadow-none ">

          </div>
        </div>
      </div>
      
      <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-4">
      <img src="images/rooms/3.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title mb-1">Conference Room</h5>
        <div class="features mb-4">
              <h6 class = "mb-3">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
               1 room
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              1 bathroom
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
            1 sofa
         </span>
         <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
          1 bed
       </span>
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Facilitiess</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              wifi
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
             television
          </span>
          <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
           AC
        </span>
        <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
         room heater
      </span>
          </div>
         
            </span>
            
          </div>
          
          
        </div>
        <div class="col-md-2 text-align-center">
        <h5 class = "mb-4">$300 per day</h5>
        
        <input type="submit" value="booknow" name="ConferenceRoom" class="btn btn-sm w-100 text-white bg-dark shadow-none mb-2">
           <input type="submit" value="CancelBooking" name="CancelConference" class="btn btn-sm w-100 text-white bg-dark shadow-none ">
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
        </div>
        </div>
        
        <div class="text-center my-1">
        <input type = "submit" value="logout" name="logout" class="btn btn-dark shadow-none mb-3"></input>
      
        </div>
        </form>
        </div>
        
        
    </div>
    <br>
    <br>
<?php require ('footer.php');?>

    
  </body>
</html>
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location : index.php");
    exit;

}


