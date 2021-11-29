<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/fish.jpg" type="image icon">

    <!--CSS Styles -->
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <link rel="stylesheet" href="/style/style.css">
    
    <!-- Favicons -->
    <link  rel="apple-touch-icon"  sizes="180x180"  href="assets/icons/apple-touch-icon.png"  >
    <link  rel="icon"  type="/assets/image/png" sizes="32x32" href="assets/icons/favicon-32x32.png"  >

    <!-- Animate CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Pet House</title>
  </head>

<!--Start Body-->


<body>
    <!-- Navbar -->
<nav>
        <a href="/html/index.php"><h1>Pet House</h1></a>
        <ul class="navigation">
          <li><a href="/html/index.php" class="nav-link">Home</a></li>
          <li><a href="/sub_pages/buy_pets/buy.php" class="nav-link">Buy Pets</a></li>
          <li><a href="/sub_pages/gallery/index.php" class="nav-link">Gallery</a></li>
          <li><a href="/sub_pages/review/review.php" class="nav-link">Review</a></li>
          <li><a href="/sub_pages/login_and_Register/login_signup.php" class="nav-link" target="_self">Log in/Join</a></li> 
        </ul>
        <button class="burger-menu" id="burger-menu">
          <ion-icon class="bars" name="menu-outline"></ion-icon>
        </button>
</nav>

  <!--Admin Login Section-->

  <div class="form apply-online-sticky">
  <a href="/sub_pages/admin_login/admin_login.php">Admin Login</a>
</div>
    <!-- Hero Section -->
<section class="hero" id="about">
        <div class="hero-img">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets/dogs.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Dogs</h5>
                  <p>Dogs Are Nice</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/assets/fish.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Fish</h5>
                  <p>Fish are also good</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/assets/snake.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Snake</h5>
                  <p>Snakes are Beautiful but dangerous</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="bio animate__animated animate__shakeX">
          <h2 class="bio-title"> About Pet </h2>
          <p class="bio-text">
            Pet, or companion animal, is an animal kept primarily for a person's company or entertainment rather than as a working animal, livestock or a laboratory animal.
          </p>
        </div>
</section>

    <!-- More about -->
<section class="more-about">
        <h2>More About Pets</h2>
        <p>
          WE LOVE OUR pets. Two thirds of Americans live with an animal, and according to a 2011 Harris poll, 90 percent of pet owners think of their dogs and cats as members of the family. These relationships have benefits. For example, in a survey by the American Animal Hospital Association, 40 percent of married female dog owners reported they received more emotional support from their pet than from their husband or their kids. The pet products industry calls this “the humanization of pets.” One of my colleagues recently spent $12,000 on cancer treatments for her best friend Asha, a Labrador retriever.
        </p>
        <p>
          There are many health benefits of owning a pet. They can increase opportunities to exercise, get outside, and socialize. Regular walking or playing with pets can decrease blood pressure, cholesterol levels, and triglyceride levels.  Pets can help manage loneliness and depression by giving us companionship. Most households in the United States have at least one pet.
        </p>
        <p>
          However, pets can sometimes carry harmful germs that can make us sick even when the pet appears healthy. The diseases people get from animals are called zoonotic (zoe-oh-NOT-ic) diseases. Below are some tips to help you and your family stay healthy while enjoying pets
        </p>
</section>

    <!-- Pet section -->
<section class="skills" id="skills">
        <h2 class="skill-header">Pets</h2>
        <div class="skills-wrapper">
          <div class="first-set animate__animated animate__pulse">
            <img src="/assets/dogs.jpg" alt="dogs" loading="lazy"  class="icon icon-card" >
            <img  src="/assets/cats.jpg" alt="cats"  loading="lazy"  class="icon icon-card">
            <img  src="/assets/parrot.jpg"  alt="parrot" loading="lazy"  class="icon icon-card" >
          </div>
  
          <div class="second-set animate__animated animate__pulse">
            <img src="/assets/snake.jpg"  alt="snake"  class="icon icon-card">
            <img src="/assets/horse.jpg"  alt="horse"  loading="lazy"  class="icon icon-card">
            <img src="/assets/fish.jpg"  alt="fish"  loading="lazy"  class="icon icon-card">
          </div>
        </div>
 </section>

    <!-- New Pets  section -->
<section class="projects" id="projects">
        <h2 class="projects-title">Some New Pets</h2>
        <div class="projects-container">
          <div class="project-container project-card">
            <img src="/assets/dogs.jpg" alt="Fish" loading="lazy"  class="project-pic">
            <h3 class="project-title">Dogs</h3>
            <p class="project-details">
              Dogs
            </p>
            <a href="/sub_pages/buy_pets/buy.php" target="_self" class="project-link">Check it Out</a>
          </div>
          <div class="project-container project-card">
              <img  src="/assets/cats.jpg" alt="Fish"  loading="lazy"  class="project-pic">
            <h3 class="project-title">Cats</h3>
            <p class="project-details">
              Cats
            </p>
            <a href="/sub_pages/buy_pets/buy.php" target="_self" class="project-link">Check it Out</a>
          </div>
          <div class="project-container project-card">
            <img src="/assets/snake.jpg"  alt="fish"  loading="lazy"  class="project-pic">
            <h3 class="project-title">Snake</h3>
            <p class="project-details">
              Snake
            </p>
            <a href="/sub_pages/buy_pets/buy.php" target="_self" class="project-link">Check it Out</a>
          </div>
        </div>
</section>

      
    <!-- Social accounts - Fixed to the right -->
    <div class="socials">
        <a href="#" target="_blank" ><img  src="/assets/twitter_ani.gif" alt="Twitter" loading="lazy" class="socicon" title="Twitter"></a>
        <a href="https://www.instagram.com/iamridwanriddi/" target="_blank"><img  src="/assets/instagram_ani.gif"  alt="Instagram" loading="lazy" class="socicon" title="Instagram"></a>
        <a href="#" target="_blank" ><img  src="/assets/linkedin_ani.gif" alt="Linkedin" loading="lazy" class="socicon" title="Linkedin"></a>
        <a href="#" target="_blank" ><img src="/assets/github_ani.gif" alt="Github" class="socicon" title="Github"></a>
      </div>
    <!-- Scroll to top -->
    <i class="scroll-up" id="scroll-up"><img src="/assets/scroll_ani.gif" class="socicon up-arrow" alt="scroll-up"></i>

    <!-- Footer section -->
  <footer>
        <p class="copy">&copy; Copyright 2021</p>
        <p class="copy1"><a href="/sub_pages/group_13/index.php" target="_blank" >Group 13</a></p>
  </footer>

  <!--Loader Section-->
  <div class="loader-container">
    <img src="/assets/loadingGif.gif" alt="">
  </div>

      <!-- Website scripts -->
      <script src="/js/app.js"></script>

      <!-- Ion icons scripts -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" ></script>
      <script src="/js/bootstrap.min.js"></script>
</body>
</html>