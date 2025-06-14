<nav class="navbar navbar-expand-lg navbar-light bg-blue px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">ALEX HOTELS</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact us</a>
        </li>
      </ul>
        
        
      <div class="d-flex" >
        
        
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3 align-items-right" data-bs-toggle="modal" data-bs-target="#LoginModal">
         Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
         Register
        </button>
    </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="login.php" method="post">

        
      <div class="modal-header">
        <h1 class="modal-title fs-5 d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h1>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
         <label  class="form-label">Usertype</label>
         <input type="usertype" name = "usertype" class="form-control shadow-none">
         
      </div>
      <div class="mb-3">
         <label  class="form-label">Email address</label>
         <input type="email" name = "email" class="form-control shadow-none">
         
      </div>
      <div class="mb-4">
         <label  class="form-label">Password</label>
         <input type="password" name = "password" class="form-control shadow-none">
         
        </div>
        <div class = "d-flex align-items-center justify-content-between mb-2">
            <input type = "submit" name= "login" class="btn btn-dark shadow-none" value="Login"></input>
            <a href="javascript: void(0) ">Forgot Password?</a>
        </div>
      </div>
      
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
        <form name="reg" action="registration.php" method="post">

        
      <div class="modal-header">
        <h1 class="modal-title fs-5 d-flex align-items-center">
        <i class="bi bi-person-lines-fill"></i>
        </i>User Registration</h1>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
        NB: Use official details 
    </span>
      <div class="container-fluid">
        <div class = "row">
        </div>
      </div>
      
            <div class="col-md-6 ps-0 mb-3">
         <label  class="form-label">Name</label>
         <input type="text" name="name" class="form-control shadow-none">
         
        </div>
        
        <div class="col-md-6">
         <label  class="form-label">Email address</label>
         <input type="email" name="email" class="form-control shadow-none">
         
        </div>
        <div class="col-md-6 ps-0 mb-3">
         <label  class="form-label">Phone Number</label>
         <input type="number" name="number" class="form-control shadow-none">
         
        </div>
        <div class="col-md-6 ps-0 mb-3">
         <label  class="form-label">Picture</label>
         <input type="file" name="picture" class="form-control shadow-none">
         
        </div>

        <div class="col-md-12 ps-0 mb-3">
         <label  class="form-label">Adrress</label>
         
         <textarea class="form-control shadow-none"name="address" rows="1"></textarea>
        </div>
        <div class="col-md-6 ps-0 mb-3">
         <label  class="form-label">Pincode</label>
         <input type="number"name="pincode" class="form-control shadow-none">
         
        </div>
        <div class="col-md-6 ps-0 mb-3">
         <label  class="form-label">DOB</label>
         <input type="date" name="dob" class="form-control shadow-none">
         
        </div>

        <div class="col-md-6 ps-0 mb-3">
         <label  class="form-label">Password</label>
         <input type="password" name="password" class="form-control shadow-none">
         
        </div>
        <div class="col-md-6 ps-0 mb-3">
         <label  class="form-label">Cornfirm Password</label>
         <input type="password" class="form-control shadow-none">
         
        </div>
        <div class="text-center my-1">
      <input type = "submit" value="Register" class="btn btn-dark shadow-none"></input>
      
        </div>
      </div>
      
      </form>
    </div>
  </div>
</div>