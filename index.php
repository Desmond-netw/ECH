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

</head>
<body>
    <!-- =============== Navigation bar=========== -->
  <nav class="navbar navbar-expand-lg navbar-light fixed p-2"style="background-color: #e3f2fd">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"> <img src="asset/logo/logo.jpg" class="img-thumbnail" alt=""></a><!-- logo -->
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
          <button class="btn btn-sm btn-outline-secondary" type="button">Login</button>
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

       <div class="container">
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
              <div class="col"><img src="asset/imgs/png2.png" class="img-thumbnail" alt="image"></div><!--imag col end -->
              <div class="row d-grid gap-2 border">
                <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quam aut voluptatibus similique nulla doloribus. Minus quam et, fugit tenetur rem dolorem, alias asperiores quae excepturi 
                </div><!--text col end -->
              </div><!--donwRow -->
            </div><!--=================end of col-1 -->
            <div class="col d-grid gap-2">
              <div class="row d-grid gap-2 border">
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



    </div>
  








  <!-- javascript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>