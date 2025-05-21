<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alex Hotels - ROOMS</title>
    
    <?php require('links.php');?>
  </head>
  <body class="bg-light">
    
  
    <?php require ('header.php'); ?>

    <style>
      .pop:hover{
        border-top-color: aquamarine !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }
    </style>

    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">OUR ROOMS </h2>
      <br>
       <div class="h-line bg-dark"></div>
      <p class="text-center mt-3"> If you are intrested in our services you can get intouch with us on folliwing platforms
         </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">FILTERS</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
        <label  class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
          <label  class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
        <div class="mb-2">
          <input type="checkbox" id = "f1" class="form-check-input shadow-none me-1 ">
             <label  class="form-check-label" for="f1">Facility one </label>     
        </div>
        
        <div class="mb-2">
          <input type="checkbox" id = "f2" class="form-check-input shadow-none me-1 ">
             <label  class="form-check-label" for="f2">Facility two </label>     
        </div>
        
        <div class="mb-2">
          <input type="checkbox" id = "f3" class="form-check-input shadow-none me-1 ">
             <label  class="form-check-label" for="f3">Facility three </label>     
        </div>
        
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
        <div class="d-flex">
         
        <div class="me-3">
            <label  class="form-label">Adults</label>
            <input type="number" class="form-control shadow-none">
        </div>
        <div>
            <label  class="form-label">Children</label>
            <input type="number" class="form-control shadow-none">
        </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</nav>
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
        <div class="col-md-2 text-align-center">
        <h5 class = "mb-4">$100 per night</h5>
        
            
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>

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
        <h5 class="card-title mb-1">VIP Rooms</h5>
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
        
            
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>

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
        <h5 class="card-title mb-1">Conferrence rooms</h5>
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
        <h5 class = "mb-4">$300 per night</h5>
        
            
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>

          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
        </div>
        </div>
        


        </div>
        
        
    </div>
    <br>
    <br>
<?php require ('footer.php');?>

    
  </body>
</html>