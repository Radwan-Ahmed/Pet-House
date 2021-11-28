<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="review.css">
    <title>Review</title>
    <link rel="shortcut icon" href="/assets/pet.jpg" type="image icon">
</head>
<body>
  <nav>
    <a href="/html/index.php"><h1>Pet House</h1></a>
    <ul class="navigation">
      <li><a href="/html/index.php" class="nav-link">Home</a></li>
    </ul>
    <button class="burger-menu" id="burger-menu">
      <ion-icon class="bars" name="menu-outline"></ion-icon>
    </button>
</nav>

    <section class="contact" id="contact">
        <h2>Get In Touch With Us</h2>
        <div class="contact-form-container">
          <div class="contact-form">
            <form action="submit_message.php" method="POST">
              <div class="form-control">
                <label for="name">Name</label>
                <input  type="text"  id="name"  name="name"  placeholder="Enter Your Name"  class="input-field"  required>
              </div>
              <div class="form-control">
                <label for="email">Email</label>
                <input  type="email"  id="email"  name="email"  placeholder="Enter Your Email"  class="input-field"  required>
              </div>
              <div class="form-control">
                <label for="message">Message</label>
                <textarea  id="message"  cols="60"  rows="10"  placeholder="Enter Your Message"  name="message"  class="input-field"  required ></textarea>
              </div>
              <input  type="submit"  value="Submit"  id="submit-btn" class="submit-btn">
            </form>
          </div>
        </div>
      </section>
</body>
</html>