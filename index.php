<!doctype htmhead>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alex Hotels - HOME</title>
    
    <?php require('links.php');?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>"
    
    <style>
        *{
    font-family: 'Poppins', sans-serif;
}
.h-font{
    font-family: 'Merienda', cursive;;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button{
    -webkit-appearance: none;
    margin: 0;
}
.custome-bg{
background-color: #2ec1ac;
border:1px solid  #2ec1ac;
}
.custome-bg :hover{
background-color: #279e8c;
background-color: #279e8c;

}

       .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
       }
       @media screen and (max-with:575px) {
        .availability-form{
        margin-top: 0px;
        padding: 0 35px;
        
       }
        
       }



    </style>
    <script type="text/javascript" src="javaScript/script.js"></script>
  </head>
  <body class="bg-light">
    
  
    <?php require ('header.php'); ?>
<!--IMAGE DISPLAYS-->
<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/IMG_15372.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/IMG_40905.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/IMG_55677.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/IMG_62045.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/IMG_93127.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/IMG_99736.png" class="w-100 d-block">
      </div>
      
    </div>
    
    
  </div>
</div>
<!--CHECK AVILABILITY-->
<div class="container a-vailability-form">
    <div class= "row">
        <div class="col-lg-12 bg-white shadow p-4 rounded"> 
            <h2 class="mb-4">Check Booking Availability</h2>
            <form>
                <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                <label  class="form-label" style="font-weight: 500;">Check-in</label>
                <input type="date" class="form-control shadow-none">
                </div> 

                <div class="col-lg-3 mb-3">
                <label  class="form-label" style="font-weight: 500;">Check-out</label>
                <input type="date" class="form-control shadow-none">
                </div>

                <div class="col-lg-3 mb-3">
                <label  class="form-label" style="font-weight: 500;">Adult</label>
                <select class="form-select shadow-none">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-lg-2 mb-3">
                <label  class="form-label" style="font-weight: 500;">Children</label>
                <select class="form-select shadow-none">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-1 mb-lg-3 mt-2"> 
                    <button type="submit" class="btn text-white-shadow-non custome-bg">Submit</button>

                </div>

            </form>
        </div>
    </div>
</div>

<!--OUR ROOMS-->
<h3 class="mt-5 pt-4 mb-4 text-center fw-bold h-font "> OUR ROOMS</h3>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">

        <div class="card-body">
          <h3>Standard room</h3>
          <h5 class = "mb-4">$100 per night</h5>
          <div class="features mb-4">
              <h6 class = "mb-1">Features</h6>
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
          <div class="rating mb-4">
            <h6 class = "mb-1">Rating</h6>
            <span class="badge rounded-pill">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
            
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custome-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

          </div>
          
        </div>

      </div>

    </div>
    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/2.jpg" class="card-img-top">

        <div class="card-body">
          <h3>VIP Room</h3>
          <h5 class = "mb-4">$200 per night</h5>
          <div class="features mb-4">
              <h6 class = "mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
               1 room
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              1 bathroom
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
            2 sofa
         </span>
         <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
          2 bed
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
          <div class="rating mb-4">
            <h6 class = "mb-1">Rating</h6>
            <span class="badge rounded-pill">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
            
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custome-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

          </div>
          
        </div>

      </div>

    </div>
    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/3.jpg" class="card-img-top">

        <div class="card-body">
          <h3>Conference Room</h3>
          <h5 class = "mb-4">$300 per day</h5>
          <div class="features mb-4">
              <h6 class = "mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
               With all state-of-the art boardroom facilities
            </span>
            
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Facilitiess</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              wifi
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
             Projector
          </span>
          <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
           televisions
        </span>
        <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
         AC
      </span>
          </div>
          <div class="rating mb-4">
            <h6 class = "mb-1">Rating</h6>
            <span class="badge rounded-pill">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
            
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custome-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

          </div>
          
        </div>

      </div>

    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>></a>

    </div>
  </div>
</div>
<!--OUR FACILITIES-->
<h3 class="mt-5 pt-4 mb-4 text-center fw-bold h-font "> OUR FACILITIES</h3>
<div class="container">

  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="colc-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/wifi.svg" width="80px">
      <h5 class = mt-3>Wifi</h5>
    </div>
    <div class="colc-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/television.svg" width="80px">
      <h5 class = mt-3>television</h5>
    </div>
    <div class="colc-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/ac.svg" width="80px">
      <h5 class = mt-3>AC</h5>
    </div>
    <div class="colc-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/heater.svg" width="80px">
      <h5 class = mt-3>Room Heater</h5>
    </div>
    <div class="colc-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/transport.svg" width="80px">
      <h5 class = mt-3>transport</h5>
    </div>
  </div>
</div>
<div class="col-lg-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>></a>

</div>



</div>

<!--Reach us-->
<h3 class="mt-5 pt-4 mb-4 text-center fw-bold h-font "> REACH US</h3>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
     <iframe class="w-100" src="https://www.google.com/maps/d/embed?mid=1Mf9wjdNuFacddySbbE0Jk2iYFSU&ehbc=2E312F" width="640" height="480"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
       <div class="bg-white">
        <h5>Call Us</h5>
        <a href="tell 0778452538" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>0778452549
        </a>
        <br>
        <a href="tell 0778452538" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>0778452124
        </a>
       </div>
       <br>
       <br>
    
       <div class="col-lg-4 col-md-4">
        <div class="bg-white">
         <h5>Follow Us</h5>
         <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
           <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter"></i>Twitter
           </span>
         </a>
         <br>
         <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram"></i>Instagram
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook"></i>Facebook
          </span>
        </a>
    </div>
    
      
       
      </div>
   </div>
  </div>
</div>

<br>
<br>
<?php require ('footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop : true,
      autoplay : {
        delay: 3500,
        diableOnInteraction : false,
      }
      
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  </body>
</html>