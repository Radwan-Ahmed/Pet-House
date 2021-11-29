<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Animated login form</title>
        <link rel="stylesheet" href="admin_login.css">
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
          <li><a href="/sub_pages/login_and_Register/login_signup.php" class="nav-link" target="_self">Log in/Join</a></li> 
        </ul>
        <button class="dot-menu" id="dot-menu">
          <ion-icon class="bars" name="menu-outline"></ion-icon>
        </button>
</nav>

        <form class="box" action="admin_login_connection.php" method="POST">
        <h1>Admin Login</h1>
        <input type="text" name="id" placeholder="User-ID" required>
        <input type="text" name="email" placeholder="E-mail" required>
        <input type="password" name="pass" placeholder="Password" required>
        <button>Login</button>
        </form>

    </body>
</html>