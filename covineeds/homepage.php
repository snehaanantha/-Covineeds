<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covineeds</title>
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous">
  </script>
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
         integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
         crossorigin="anonymous">
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
                  <a class="nav-link active text-white" aria-current="page" href="login.php">Services</a>
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
<body onload="myFunction()" >
 

    <div class="container-fluid">
        <img src="bg image.jpg" alt="" style="opacity: 0; width: 0; height: 3px;">
        <h1 class="text-dark " style="font-size: 67px; margin-left: 14.4cm; margin-top: 4.1cm; letter-spacing: 0.26cm;">COVINEEDS</h1> 
        <p class="lead text-center" style="margin: 0cm 9cm 0cm 9cm; font-size: 16px;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam suscipit quam doloribus, commodi recusandae illo architecto similique! Voluptate sequi aliquid labore excepturi, fugiat voluptatibus autem architecto tenetur placeat quos perspiciatis commodi recusandae illo architecto similique!</p>
    </div>
    <br><br>
    <div class="d-grid gap-4 d-md-flex justify-content-md-center">
    <a href="login.php">  
     <button class="btn  me-md-2 text-white px-5"  style="background-color: rgb(79, 161, 255);" type="button">
       Log In
        </button> </a>

        <a href="signup.php">    <button class="btn text-white px-5" type="button" style="background-color: rgb(79, 161, 255);">Sign Up</button></a>
      </div>

</body>

<script>
  function myFunction() {
  alert("Welcome to Covineeds");
}

</script>

</html>