<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Portofolio Website</title> 

</head>
<body>
  <!-- navigation -->
  <header class="primary-header">
    <div class="container"> 
      <div class="nav-wrapper">
        <img src="assets/logo.svg"> 
          <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false">
            <img class="icon-hamburger" src="assets/hamburg.svg" alt="" aria-hidden="true">
            <img class="icon-close" src="assets/hamburg-close.png" alt="" aria-hidden="true">
            <span class="visually-hidden">Menu</spa>
          </button>
            <nav class="primary-navigation" id="primary-navigation">
          <ul  aria-label="Primary" role="list" class="nav-list">{ } 
            <li><a href="#Home">Home</a></li>
            <li><a href="#aboutMe">About Me</a></li>
            <li><a href="#projects">My Projects</a></li>
            <li><a href="#contact">Contact</a></li>

  </header>
<!-- Heading -->
<main>
  <section id=" ">
    <div class="container | padding-block-900">
      <div class="even-columns | text-center">
        <div class="heading">
          <h1 class="fs-primary-heading fw-extra-bold || padding-block-400">Hi, I am<span class="text-orange"> Michael </span></h1> 
          <h3 class="fs-sub-heading fw-semi-bold">Front-end / Webdeveloper</h3>
          <button class="button raise"> <a href="#contact">Hire Me</a></button> 
          <button class="button raise"> <a href="#contact">Contact</a></button> 
        </div>
        <div>
          <img src="assets/header.svg">
        </div> 
      </div>
    </div>
  </section>
<!-- Projects -->
  <section class="section-work" id="projects">
    <div class="container | padding-block-900">
      <h2 class="fs-secondary-heading fw-bold | text-center | padding-block-700">My <span class="text-orange">Work</span></h2>
      <div class="even-columns"> 
            <div class="card">
              <h3 class="text-center | fs-sub-heading fw-semi-bold | padding-block-400">projectName</h3>  
              <img src="assets/project_img.png" alt="">
              <button class="button">project1</button>
            </div>
            <div class="card">
              <h3 class="text-center |  fw-semi-bold fs-sub-heading | padding-block-400"">projectName</h3>  
              <img src="assets/project_img.png" alt="">
              <button class="button">project2</button>
            </div>
            <div class="card">
              <h3 class="text-center | fs-sub-heading fw-semi-bold | padding-block-400">projectName</h3>  
              <img src="assets/project_img.png" alt="">
            <button class="button">project3</button>
          </div>
      </div>
    </div>
  </section>
<!-- about me -->
  <section id="aboutMe">
    <div class="container | padding-block-900">
      <div class="even-columns">
        <img src="assets/about_me.svg" alt="">
        <div class="aboutMe">
          <h2 class="fs-secondary-heading fw-bold | padding-block-400" >About <span class="text-orange">Me</span></h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Tristique vitae turpis et tortor porttitor faucibus neque nam quam.
            Sed vel vitae phasellus lectus semper aliquam. 
            Lacus quam sociis vulputate volutpat etiam aliquam consectetur non nibh.
            Aliquet non aliquam dignissim massa quis tempus nec quis est.
          </p>
        </div>
      </div>
    </div>
  </section>
<!-- forum contact -->
  <section>
    <div class="container | padding-block-900">
      <h2 class="fs-secondary-heading fw-bold | text-center text-orange | padding-block-400 | ">Contact</h2>
      <div class="forum">
         <!-- <form action="" method="get">
            <p class="padding-block-200">Name:</p>
               <input type="text" placeholder="Name:">
            <p class="padding-block-200">E-mail:</p>
               <input type="email" name="e-mail" id="e-mail" placeholder="Email:">
            <p class="padding-block-200">Write Here:</p>
               <textarea name="" id="text-area" cols="30" rows="10"></textarea><br>
            <button class="button">Send</button>
         </form> -->
          <form id="search" method="POST" action="index.php">
            <input id="searchFor" type="text" name="search">
            <input type="submit" value="Search">
          </form> 
        <div class="row" id="panels">
        </div>
      </div>  
    </div>
  </section>
</main>
<!-- footer -->
<footer id="contact">
  <div class="container | padding-block-700">
    <div class="even-columns">
      <div>
        <h3 class="fs-sub-heading fw-semi-bold | text-center | padding-block-400">Contact</h3>
        <p class="text-center"><a href="mailto:mikebloemraad@gmai.com">Email: <br> mikebloemraad@gmail.com</a></p> <br>
        <p class="text-center"><a href="tel:+31615177283">Mobile Number: <br> 0615177283</a></p>
      </div>
      <div>
        <h3 class="fs-sub-heading fw-semi-bold | text-center | padding-block-400">Media</h3>
        <div class="media flex">
          <a href="https://www.facebook.com/michael.bloemraad/" target="_blank"><img src="assets/Facebook.svg" alt="" width="75%"></a>
          <a href="https://www.instagram.com/m1key.98/" target="_blank"><img src="assets/Instagram.svg" alt="" width="75%"></a>
          <a href="#"><img src="assets/Twitter.svg" alt="" width="75%"> </a>
        </div>
      </div>
    </div>
  </div>
</footer>


<script src="main.js"></script>
</body>
</html>