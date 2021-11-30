<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>American Curl Cat</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="/sub_pages/buy_pets/order_and_Buying_page/Buying_page.css">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>

<nav>
        <a href="/html/index.php"><h1>Pet House</h1></a>
        <ul class="navigation">
          <li><a href="/html/index.php" class="nav-link">Home</a></li>
          <li><a href="/sub_pages/buy_pets/buy.php" class="nav-link">Buy Pets</a></li>
          <li><a href="/sub_pages/gallery/index.php" class="nav-link">Gallery</a></li>
          <li><a href="/sub_pages/review/review.php" class="nav-link">Review</a></li>
          <li><a href="/sub_pages/login_and_Register/login_signup.php" class="nav-link" target="_self">Login/Register</a></li> 
        </ul>
        <button class="dot-menu" id="dot-menu">
          <ion-icon class="bars" name="menu-outline"></ion-icon>
        </button>
</nav>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="pet-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="/sub_pages/buy_pets/database.php" class="order" oninput="net_price.value=parseFloat(qty.value)*parseFloat(price.value)" method="POST">
                <fieldset>
                    <legend>Selected Pet</legend>

                    <div class="pet-menu-img">
                        <img src="/assets/Cats/AmericanCurlCat.jpg" alt="American Curl Cat" class="img-responsive img-curve">
                    </div>
    
                    <div class="pet-menu-desc">
                    <div class="order-label">Pet ID</div>
                    <input type="text" name="id" class="input-responsive" readonly  value="2003">
                    <div class="order-label">Pet Name</div>
                    <input type="text" name="name" class="input-responsive" readonly  value="American Curl Cat">

                    <label for="color" style="font-weight: bold;">Choose a color:</label>
                    <select id="color" name="color">
                         <option value="chocolate">chocolate</option>
                         <option value="blue">blue</option>
                         <option value="cinnamon">cinnamon</option>
                    </select>

                    <div class="order-label">Price</div>
                    <input type="text" name="price" class="input-responsive" readonly  value="380.75$">
                    <div class="order-label">Age</div>
                        <input type="number" name="age" class="input-responsive" value="1" required>
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="0" required>
                        <!--  <label for="price">Net Price: $</label> -->
                        <input name="net_price" for="qty Name" style="color: white;">0</input>
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Radwan Ahmed" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. +8801xxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. radwan@gmail.com" class="input-responsive" required>

                    <div class="order-label">Password</div>
                    <input type="password" name="password" placeholder="E.g. password..." class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="/sub_pages/group_13/index.php">Group 13</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>