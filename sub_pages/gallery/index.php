<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/style/style.css">
    <title>Gallery</title>
    <link rel="shortcut icon" href="/assets/pet.jpg" type="image icon">
</head>
<body>
    <nav>
        <a href="/html/index.php"><h1>Pet House</h1></a>
        <ul class="navigation">
          <li><a href="/html/index.php" class="nav-link">Home</a></li>
          <li><a href="#Dogs" class="nav-link">Dogs</a></li>
         <li><a href="#Cats" class="nav-link">Cats</a></li>
         <li><a href="#Birds" class="nav-link">Birds</a></li>
         <li><a href="#Fish" class="nav-link">Fish</a></li>
         <li><a href="#Snake" class="nav-link">Snake</a></li>
        </ul>
        <button class="dot-menu" id="dot-menu">
          <ion-icon class="bars" name="menu-outline"></ion-icon>
        </button>
    </nav>
    <h1 id="gallery">Gallery</h1>

    <section class="skills" id="skills">
      <div class="skills-wrapper">
        <div class="first-set animate__animated animate__pulse">
          <h1 id="Dogs">Dogs</h1>
          <img src="/assets/dogs.jpg" alt="dogs" loading="lazy"  class="icon icon-card" >
          <img  src="/assets/dogs/alaskanmalamute.jpg" alt="cats"  loading="lazy"  class="icon icon-card">
          <img  src="/assets/dogs/bulldog.jpg"  alt="parrot" loading="lazy"  class="icon icon-card" >
        </div>

        <div class="second-set animate__animated animate__pulse">
          <img src="/assets/dogs/GermanShepherd.jpg"  alt="pet"  class="icon icon-card">
          <img src="/assets/dogs/Poodle.jpg"  alt="horse"  loading="lazy"  class="icon icon-card">
          <img src="/assets/dogs/GoldenRetriever.jpg"  alt="fish"  loading="lazy"  class="icon icon-card">
        </div>

        <div class="first-set animate__animated animate__pulse">
          <h1 id="Cats">Cats</h1>
          <img src="/assets/Cats/AbyssinianCat.jpg" alt="dogs" loading="lazy"  class="icon icon-card" >
          <img  src="/assets/Cats/AmericanBobtailCat.jpg" alt="cats"  loading="lazy"  class="icon icon-card">
          <img  src="/assets/Cats/AmericanCurlCat.jpg"  alt="parrot" loading="lazy"  class="icon icon-card" >
        </div>

        <div class="second-set animate__animated animate__pulse">
          <img src="/assets/Cats/BurmeseCat.jpg"  alt="pet"  class="icon icon-card">
          <img src="/assets/Cats/ManxCat.jpg"  alt="fish"  loading="lazy"  class="icon icon-card">
          <img src="/assets/Cats/BombayCat.jpg"  alt="fish"  loading="lazy"  class="icon icon-card">
        </div>

        <div class="first-set animate__animated animate__pulse">
          <h1 id="Birds">Birds</h1>
          <img src="/assets/birds/Toucan.jpg" alt="dogs" loading="lazy"  class="icon icon-card" >
          <img  src="/assets/birds/KingFisher.jpg" alt="cats"  loading="lazy"  class="icon icon-card">
          <img  src="/assets/birds/HummingBird.jpg"  alt="parrot" loading="lazy"  class="icon icon-card" >
        </div>

        
        <div class="second-set animate__animated animate__pulse">
          <img src="/assets/birds/Parrots.jpg"  alt="pet"  class="icon icon-card">
          <img src="/assets/birds/BeeEater.jpg"  alt="horse"  loading="lazy"  class="icon icon-card">
          <img src="/assets/birds/swallows.jpg"  alt="fish"  loading="lazy"  class="icon icon-card">
        </div>

        <div class="second-set animate__animated animate__pulse">
          <h1 id="Fish">Fishes</h1>
          <img src="/assets/fish/Goldfish.jpg"  alt="pet"  class="icon icon-card">
          <img src="/assets/fish/Oscar.jpg"  alt="horse"  loading="lazy"  class="icon icon-card">
          <img src="/assets/fish/NeonTetra.jpg"  alt="fish"  loading="lazy"  class="icon icon-card">
        </div>

        <div class="first-set animate__animated animate__pulse">
          <img src="/assets/fish/EuropeanSeabass.jpg" alt="dogs" loading="lazy"  class="icon icon-card" >
          <img  src="/assets/fish/SiameseFightingFish.jpg" alt="cats"  loading="lazy"  class="icon icon-card">
          <img  src="/assets/fish/ZebraFish.jpg"  alt="parrot" loading="lazy"  class="icon icon-card" >
        </div>

        
        <div class="second-set animate__animated animate__pulse">
          <h1 id="Snake">Snakes</h1>
          <img src="/assets/snakes/black_rat.jpg"  alt="pet"  class="icon icon-card">
          <img src="/assets/snakes/red_bellied_black_snake.jpg"  alt="horse"  loading="lazy"  class="icon icon-card">
          <img src="/assets/snakes/copper_head.jpg"  alt="fish"  loading="lazy"  class="icon icon-card">
        </div>

        <div class="second-set animate__animated animate__pulse">
          <img src="/assets/snakes/scarlet.jpg"  alt="pet"  class="icon icon-card">
          <img src="/assets/snakes/Timber_rattle_snake.jpg"  alt="horse"  loading="lazy"  class="icon icon-card">
          <img src="/assets/snakes/milk_snake.jpg"  alt="fish"  loading="lazy"  class="icon icon-card">
        </div>
      </div>
    </section>

     <!-- Scroll to top -->
     <i class="scroll-up" id="scroll-up"><img src="/assets/scroll_ani.gif" class="socicon up-arrow" alt="scroll-up"></i>

     <script src="/js/app.js"></script>
</body>
</html>