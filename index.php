
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/main.css">
    <script src="https://kit.fontawesome.com/d257b03b55.js" crossorigin="anonymous"></script>

</head>
<body>
<!-- Just an image -->
<nav class="navbar navbar-white shadow-sm bg-white position-fixed fixed-top">
 <div>
    <a class="navbar-brand " href="#">
      <img class='logo' src="src/img/iPhone X-XS-11 Pro – 1.SVG" height='60' alt="logo" loading="lazy">
    </a>
 </div>
 <div class="menu_1">
  <a class='menu' href="">Home</a>
  <a class='menu' href="">Log in</a>
  <a class='menu' href="#contact_Us">Contact Us</a>
 </div>
 <div class="nav-item dropdown menu_2">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Home</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Log in</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#contact_Us">Contct Us</a>
        </div>
  </div>
</nav>
<section class='mt-4'>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="src/img/slide2.jpg" class="d-block w-100" alt="image1">
    </div>
    <div class="carousel-item">
       <img src="src/img/slide1.jpg" class="d-block w-100" alt="image2">
    </div>
    <div class="carousel-item">
       <img src="src/img/slide2.jpg" class="d-block w-100" alt="image2">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class='d-flex justify-content-around m-4 flex-wrap '>
  <h1  class='tasks m-3'><i class="fas fa-users-cog mr-3"></i>Increase performance with efficient workflows</h1>
  <h1 class='tasks m-3'><i class="fas fa-tasks mr-3"></i>Analyse and manage financial exposure</h1>
</div>
</section>
<section>
  <div class="bg-img d-flex flex-wrap ">
    <img src="src\img\section_2.jpg" alt="">
    <div class='bg-svg text-white p-4 d-flex flex-column justify-content-center' >
      <h1>Built for agents, by agents</h1>
      <p class='w-50 mt-0'>Whether you’re handling 100 
    ports calls in a single port 
       or 10,000 port calls 
         across the globe, 
           reduce administration 
               through automated processes, 
                  purpose-built systems and 
                     third-party integration.</p>

    </div>
  </div>
  <div class="bg-img2 m-0">
    <div class='bg-color p-4' >
 <h4>Work together, in one place View all port calls in one place 
and act when you need to, from creation of documents to 
seeing what needs to be done.</h4>
    </div>
  </div>
</section>

<section id='contact_Us'>
  <h1 class='contactUs'>Contact Us</h1>
  <div class='d-flex contacts flex-column justify-content-center '>
    <div class='inputs_mail_sub mt-3'>
      <p class='m-0'>E-mail</p>
      <input class='p-2'  type="email" name="" id="" placeholder='Enter your email'>
    </div>
    <div class='inputs_mail_sub mt-3'>
<p class='m-0'>
  Subject
</p>
      <input class='p-2' type="text" name="" id="" placeholder='Enter your Subject'>
    </div>
    <div class="description mt-3">
       <p class='m-0'>Description</p>
      <textarea class="textarea p-2" name="" id=""  rows="8" placeholder='Enter your Description'></textarea>
    </div>
    <button class='btn btn-1 btn-success rounded p-2'><i class="far fa-paper-plane mr-3"></i>Send</button>
  </div>
</section>

<!-- //TODO fix poup -->
<div class='shadow'>
    <div class="pop_up">

    </div>
  </div>

<footer class="blue p-4 mt-4">
  <div class='d-flex justify-content-center'><img  src="src\img\iPhone X-XS-11 Pro – 2.png" alt=""></div>
<div class="d-flex justify-content-around align-items-center flex-wrap">
    <div class="d-flex m-3 ">
    <div class="m-3">
      <a class="text-decoration-none text-white m-4" href="http://"><h1><i class="fab fa-facebook-square"></i></h1></a>
    </div>
    <div class="m-3">
      <a class="text-decoration-none text-white m-4" href="http://"><h1><i class="fab fa-twitter-square"></i></h1></a>
    </div>
    <div class="m-3">
      <a class="text-decoration-none text-white m-4" href="http://"><h1><i class="fas fa-envelope"></i></h1></a>
    </div>
     </div>
     <div>
       <p class="text-white">© 2020, Sea Vision</p>
     </div>
</div>


</footer>
<!-- login pop up -->



















   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>