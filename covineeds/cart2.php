<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1">
<title>Cart</title>
<link rel="stylesheet" type="text/css" href="covidkits.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2? family-Dosis:wght@200; 300; 400; 500;600;700; 800&family-Roboto:ital, wght@0,100; 0, 300;0,400;0,500; 0,700;0,900;1,100; 1,300;1,400; 1,500; 1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="doctors" id="doctors">

        <h1 class="heading">CART </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="n95.jpg" alt="">
                <h3>N95 Masks</h3>
                <h4>a set of 25 masks</h4>
                <span>rs. 399</span>
                <div class="share">
               <label>quantity</label>
               <select>
                   <option>1</option>
                   <option>2</option>
                   <option>3</option>
                   <option>4</option>
                   <option>5</option>
               </select>
              
                <form>
                    <input type="text" id="Name" placeholder="Name" class="user" name=""><br>
                    <input type="text" id="Location" placeholder="Location" class="user" name=""><br>
                    <input type="email" id="Email" placeholder="Email ID" class="mail" name=""><br>
                    <input type="Number" id="PhoneNumber" placeholder="Phone Number" class="user"min="10" name=""><br> 
                    <font color="red">*</font>Please enter the correct Location.
                </form>
                <button id="button">Book</button>
               <script>
               document.getElementById("button").addEventListener("click", function() {
                 alert("Order Placed");
               });
               </script>
                </div>
            </div>
        </div>
    
    </section>
    
</body>
</html>