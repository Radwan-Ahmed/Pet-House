<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Animated login form</title>
        <link rel="stylesheet" href="admin_login.css">
    </head>
    <body>
        <form class="box" action="admin_login_connection.php" method="POST">
        <h1>Admin Login</h1>
        <input type="text" name="id" placeholder="User-ID" required>
        <input type="text" name="email" placeholder="E-mail" required>
        <input type="password" name="pass" placeholder="Password" required>
        <button>Login</button>
        </form>

    </body>
</html>