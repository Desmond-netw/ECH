<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECH</title>
    <!-- links -->
     <link rel="stylesheet" href="asset/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
    <!-- =============== Navigation bar=========== -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top p-2"style="background-color: #e3f2fd">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"> <img src="asset/logo/logo.jpg" class="img-thumbnail" alt="logo"width="50" height="30"></a><!-- logo -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse align-self-center justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">OUR ROOMS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ACTIVITES
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">EVENTS RESERVATION</a></li>
              <li><a class="dropdown-item" href="#">View Gallary</a></li>
              <li><a class="dropdown-item" href="#">Our Location</a></li>
              <li><a class="dropdown-item" href="#">Reserve Room</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" tabindex="-1" >Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <button class="btn btn-outline-success me-2" type="button">Book Room</button>
          <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- =========================== nav end  -->
  <!-- ==========Hero page carousel ====================== -->
  <div class="container-fluid">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="asset/imgs/slide1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/imgs/slide2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/imgs/slide3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

  </div>
    
      
  <!-- ===================carousel end ======================= -->

    <div class="container-fluid " id="main_content">
      <!-- container heder -->
      <div class="row">
        <div class="card w-100 d-flex justify-content-center " style="background-color:#fd7e14 ">
          <div class="card-body align-self-center">
            <div class="row justify-content-between">
              <div class="col-9 col-sm-6"><h3 class="text-light fs-2 fw-bold">WELCOME TO EXTEE CRYSTAL HOTEL</h3></div>
              <div class="col-4 col-2">
              <button type="button" class="btn btn-outline-success btn-lg btn-sm">Book Now</button>
              </div>
            </div>
              
          </div>
        </div>
      </div>
      <!-- continer header end -->

      <div class="container mb-3 mt-2">
        <!-- ==== Our services Room ========== -->
         <div class="row p-3 justify-content-center text-center">
            <h2 class="align-self-center lh-1 fs-2 fw-bold toUpperCase font-monospace">Explore Our Services</h2>
         </div>
         <!-- ==== Services end ======= -->
          <div class="row p-3">
            <div class="col d-grid gap-2">
              <div class="row d-grid gap-2 border">
                <div class="col"><img src="asset/imgs/png1.png" class="img-thumbnail" alt="image"></div><!--imag col end -->
                <div class="col ">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quam aut voluptatibus similique nulla doloribus. Minus quam et, fugit tenetur rem dolorem, alias asperiores quae excepturi 
                </div><!--text col end -->
              </div><!--topRow -->
              <div class="row d-grid gap-2 border">
                <div class="col"><img src="asset/imgs/png2.png" class="img-thumbnail" alt="image"></div><!--imag col end -->
                <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quam aut voluptatibus similique nulla doloribus. Minus quam et, fugit tenetur rem dolorem, alias asperiores quae excepturi 
                </div><!--text col end -->
              </div><!--donwRow -->
            </div><!--=================end of col-1 -->
            <div class="col d-grid gap-2">
              <div class="row g-2 d-grid gap-2 border">
                  <div class="col text-wrap">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quam aut voluptatibus similique nulla doloribus. Minus quam et, fugit tenetur rem dolorem, alias asperiores quae excepturi
                  </div><!--text col -->
                  <div class="col"><img src="asset/imgs/img1.jpg" class="img-thumbnail" alt="image"></div><!--imag col -->
                </div><!--topRow -->
                <div class="row d-grid gap-2 border">
                  <div class="col text-wrap">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quam aut voluptatibus similique nulla doloribus. Minus quam et, fugit tenetur rem dolorem, alias asperiores quae excepturi 
                  </div><!--text col -->
                  <div class="col"><img src="asset/imgs/png3.jpg" class="img-thumbnail" alt="image"></div><!--imag col -->
                </div><!--donwRow -->
            </div><!--=================end of col-2 ======-->
          </div>
      </div>

      <!--  ============ OUR ROOMS VIEW ========== -->
        <div class="row bg-dark p-3 justify-content-center text-center bg-$gray-500">
            <h2 class="align-self-center lh-1 fs-2 fw-bold toUpperCase font-monospace text-light">VIEW OR SPECIAL ROOMS</h2>
        </div>
        <div class="container p-3 mt-2" id="show_rooms"> <!--  =========== show rooms ============ -->
          <div class="row g2">
            <div class="col-md-8 border"> <!-- showroom col -->
              <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="asset/imgs/slide1.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-secondary">First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="asset/imgs/slide2.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="asset/imgs/slide3.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div><!--========= endOf showRooms ============ -->
            <div class="col col-md-auto">
              list of rooms
            </div> <!-- ============ end showroomText =========== -->
          </div>
        </div>


    </div> <!-- /// End_Container /// -->
  
    <!-- models -->
     
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-align-center" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body justify-content-center">
        <div class="row m-auto" id="login_user_png">
           <div id="login_icon"><i class="fa-solid fa-user " style="width:50px"></i></div>
        </div>
         <form action="" class="row g-2"> <!-- login Form -->
          <div class="col-md-6">
            <label for="inputStaffId" class="form-lable">Enter Staff ID/Email</label>
            <input type="text" class="form-control" id="inputStaffId">
          </div>
          <div class="col-md-6">
            <label for="inputStaffId" class="form-lable">Password</label>
            <input type="password" class="form-control" id="inputStaffId">
          </div>
         </form> <!-- End of Login -->
      </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <button type="button" class="btn btn-primary">LOGIN</button>
        </div>
    </div>
  </div>
</div>









  <!-- javascript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>