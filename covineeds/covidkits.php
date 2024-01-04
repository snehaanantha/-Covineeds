<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1">
<title>covid kits page</title>
<link rel="stylesheet" type="text/css" href="covidkits.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2? family-Dosis:wght@200; 300; 400; 500;600;700; 800&family-Roboto:ital, wght@0,100; 0, 300;0,400;0,500; 0,700;0,900;1,100; 1,300;1,400; 1,500; 1,700;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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



<body>
    <section class="doctors" id="doctors">

        <h1 class="heading"> Covid <span>Essentials</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="surgical.jpg" alt="">
                <h3>Surgical Mask</h3>
                <h4>a set of 100m masks</h4>
                <span>rs. 299</span>
                <div class="share">
                    <a href="cart1.php" class="fas fa-shopping-cart"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="n95.jpg" alt="">
                <h3>N95 Mask</h3>
                <h4>a set of 25 masks</h4>
                <span>rs .399</span>
                <div class="share">
                    <a href="cart2.php" class="fas fa-shopping-cart"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="sanitizer.png" alt="">
                <h3>Sanitizer</h3>
                <h4>500ml</h4>
                <span>rs.199</span>
                <div class="share">
                    <a href="cart3.php" class="fas fa-shopping-cart"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="ppe.jfif" alt="">
                <h3>PPE Kit<h3>
                <h4>set  of 2</h4>
                <span>rs. 599</span>
                <div class="share">
                    <a href="cart4.php" class="fas fa-shopping-cart"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="sheild.jpg" alt="">
                <h3>Face Sheild</h3>
                <span>rs.299</span>
                <div class="share">
                    <a href="cart5.php" class="fas fa-shopping-cart"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="combo.jpeg" alt="">
                <h3>Combo Kit</h3>
                <h4>Masks + Gloves + PPE + Sanitizer + Face Sheild + Hand Gloves</h4>
                <span>rs. 1499</span>
                <div class="share">
                    <a href="cart6.php" class="fas fa-shopping-cart"></a>
                </div>
            </div>
    
        </div>
    
    </section>
    
</body>
</html>