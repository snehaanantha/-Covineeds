<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title class="titl">Services</title>
    <link rel="stylesheet" href="services.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous">
</script>
  
  
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
         integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
         crossorigin="anonymous">


        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })


</script>

   



</head>



<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top " style="background-color: rgb(79, 161, 255);" >
        <div class="container-fluid" >
          <a class="navbar-brand text-white" href="#">COVINEEDS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-5 me-3 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="homepage.php">Home</a>
              </li>
             
            </ul>

            <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="about.php">About</a>
                </li>
               
              </ul>

              <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="services.php">Services</a>
                </li>
               
              </ul>
              <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="login.php">Login / Signup</a>
                </li>
               
              </ul>

              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="contactus.php">Contact Us</a>
                </li>
               
              </ul>
            <form  action="search.php" class="d-flex me-5 ">
              <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light p-1.5" type="submit">Search</button>
            </form>
          </div>
        </div>

      </nav>

    </header>

  

<body>

<br><br>
</div>
<div class="alert alert-info alert-dismissible fade show text-center" role="alert">
 <strong>
 Welcome! </strong> Succesfully logged in. &nbsp;&nbsp;
  <button type="button" class="btn btn-info px-1 fade show close" data-dismiss="alert" aria-label="Close" style="outline: none; color:white;">
  <span aria-hidden="true">&times;</span>
  </button>   

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    $('.alert').alert()
  })
</script>

<div class=first>
     <h1 class="head"> <b> Our Services </b></h1>
     <img src="bg image.jpg" alt="" style="opacity: 0; width: 0; height: 3px;">
     <p>Consectetur adipisicing elit. Nihil, illum voluptate eveniet ex fugit ea delectus, sed voluptatem. <br>
     Laborum accusantium libero commodi id officiis itaque esse adipisci, necessitatibus asperiores, illo odio.</p>
     <br><br><br><br>

</div>


<div class="card-deck">

<div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
               <div class="card" style="width: 18rem; margin-left:3.3cm;">
                       <img src="vaccine.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                              <h5 class="card-title">Check for <br> Vaccination Slots</h5>
                              <p class="card-text text-start">Check the slots for vaccine in hospitals nearby ur location and book the slot.</p>
                              <a href="vaccine.php" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Check and book" >Check and book </a>


                   </div>
                </div>
            </div>
            




            <div class="col-lg-6 mb-4">
               <div class="card" style="width: 18rem; margin-left:4.5cm;">
                       <img src="covidkit.png" class="card-img-top" alt="...">
                    <div class="card-body">
                              <h5 class="card-title">Covid Kit</h5>
                              <p class="card-text text-start">Covineeds Self Test Kit is designed to assist you in taking a safe rapid antigen test easily at your home.Order and get it to ur home.</p>
                              <a href="covidkits.php" class="btn btn-primary px-4" data-toggle="tooltip" data-placement="top" title="Order Here">Order here</a>
                   </div>
                </div>
            </div>

            <div class="col-md-1 mb-4">
               <div class="card" style="width: 18rem; margin-left:-3.1cm;">
                       <img src="vacantbed-2.png" class="card-img-top" alt="..." >
                    <div class="card-body">
                              <h5 class="card-title">Check for <br> Vacant Beds</h5>
                              <p class="card-text text-start">Check the vacant beds in hospitals nearby ur location for hospitalization.</p>
                              <a href="bed.php" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Check and Book">Check and book</a>
                   </div>
                </div>
            </div>
        </div>
</div>
</div>
<br><br>




</body>



