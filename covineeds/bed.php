<!DOCTYPE html>
<html>
<head>
    <title>Vaccine slot</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        section{
            display: flex;
            width: 100%;
            height: 100vh;
            align-items: center;
            text-align: center;
            justify-content: center;
            background: url("bed.jpg");
            background-size: cover;
            color: black;
        
        }
        section .div{
            border: 1px solid white;
            width: 25%;
            height: 71%;
            border-radius:5px ;
            background-color: white;
            box-shadow:inset 0 0 20px black;
        }
        form{
            align-content: center;
            justify-content: center;
            margin-top: 10px;
        }

        .user, .mail, .pass{
            width: 70%;
            border: none;
            height: 15px;
            padding: 20px;
            padding-bottom: 13px;
            color: black;
            margin-top: 20px;
            border-bottom: 1px solid grey;
        }
        .button{
            margin-top: 35px;
            width: 60%;
            height: 35px;
            color: white;
            background-image: linear-gradient(to left, #6764fd, #8483e2, #0569ff);
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 40px;
        }

        h2{
            margin-top: 25px;
        }
    </style>
    <script type="text/javascript">
        function validation()
        {
           var N,E,P,B,A, X;
           N=document.getElementById( 'Name').value;
           E=document.getElementById('Email').value;
           P=document.getElementById('PhoneNumber').value;
           B=document.getElementById('BookingDate').value;
           A=document.getElementById( 'Aadhar').value;
           if (N=='' || E=='' || P==''|| B==''|| A=='')
             alert ("Please fill in all your details");
             else
             alert ("Registration done, you will be notified soon");
        }
</script>




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
<section>
    <div class="div1">
        <h2>Book Your Bed</h2>
        <form>
            <input type="text" id="Name" placeholder="Full Name" class="user" name=""><br>
            <input type="text" id="Location" placeholder="Location" class="user" name=""><br>
            <input type="email" id="Email" placeholder="Email ID" class="mail" name=""><br>
            <input type="Number" id="PhoneNumber" placeholder="Phone Number" class="user"min="10" name=""><br> 
            <input type="Date" id="BookingDate" placeholder="Booking Date(DD/MM/YY)" class="pass" name=""><br>
            <input type="Number" id="Aadhar" placeholder="Aadhar Card" class="user" name=""><br><br>
            <input type="file" name=""><br><br>
            <font color="red">*</font>Please add the Aadhar card in the pdf format.
            <input type="submit" value="Register" class="button" onclick="validation()" name="">
        </form>
    </div>
</section>
</body>
</html>