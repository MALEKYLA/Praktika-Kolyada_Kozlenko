 <?php

  include 'db.php';
  //READ
  $sql = $pdo->prepare("SELECT category.id, `Name`, `Description`, photos.photo FROM category INNER JOIN photos ON category.Photo = photos.id");
  $sql->execute();
  $result = $sql->fetchAll(PDO::FETCH_OBJ);
  ?>
 <!doctype html>
 <html lang="en">

 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <title>НафтоАвтоматика </title>
 </head>

 <body>
 <div  style="background-color: #ffffff; ">
   <div  class="container" >
     <header  class="d-flex flex-wrap justify-content-center py-3 mb-4   ">
       <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
         <img src="./assets/logo.png" height="50">
       </a>

       <div class="dropdown dropstart">
  <svg class=" dropdown-toggle"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>
  <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButton1" style="border-radius: 20px; width: 200px; background-color: #e0e0e0;">
        <li class='text-center'>Меню</li>
        <li><hr class="dropdown-divider"></li>
         <li><a href="/"  class="dropdown-item active">Головна</a></li>
         <li ><a href="./catalog.php"  class="dropdown-item">Каталог</a></li>
         <li><a href="./about.php"  class="dropdown-item">Про компанію</a></li>
         <li><a href="./service.php"  class="dropdown-item">Послуги</a></li>
         <li><a href="./contacts.php"  class="dropdown-item">Контакти</a></li>
       </ul>
</div>
     </header>
   </div>
 </div>
   <!-- Slider -->
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="./assets/slider/nafto-main-slider-new.jpg" class="d-block w-100">
       </div>
       <div class="carousel-item">
         <img src="./assets/slider/nafto-slider-3-1.jpg" class="d-block w-100">
       </div>
       <div class="carousel-item">
         <img src="./assets/slider/nafto2.jpg" class="d-block w-100">
       </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>
   <!-- Slider -->
   <style>
     .card {
       border: none;

     }

     .card a {
       width: 417px;

       position: relative;
     }


     .card a .card-body {
       position: absolute;
       top: 0;
       left: 0;
       bottom: 0;
       right: 0;
       transition-duration: 1s;
       justify-content: center;
       align-items: center;
       display: flex;
       flex-direction: column;
       opacity: 0;
       border-radius: 10px;
       background-color: grey;
       color: #fff;
     }

     .card a:hover .card-body {
       opacity: 1;

     }
   </style>
   <p class="fs-1 mt-3 text-center">ПРаТ Нафтоавтоматика - лідер з продажу в Україні спеціалізованої техніки</p>
   <div   class="container mt-5 mb-5">
     <div  class="row flex-center justify-content-center align-items-center">
       <?php foreach ($result as $res) { ?>
         <div class="col block flex-center">
           <div class="card mb-5">
             <a href="./catalog.php" class="container">
               <img src="http://transport-admin/img/categories/<?php echo $res->photo; ?>" class="card-img-top">
               <div class="card-body">
                 <h3 class="card-title"><?php echo $res->Name; ?></h5>
                   <h5 class='card-subtitle mb-2'><?php echo $res->Description; ?></h5>
               </div>
             </a>
           </div>
         </div>
       <?php } ?>
     </div>
   </div>

   <div id="carouselExampleControls" class="carousel slide"  style=" background-color: #0c71c3; height: 325px;"   data-bs-ride="carousel " >
     <div class="carousel-inner">
       <div class="carousel-item active w-100">
         <div class="row m-5 flex-row align-items-center justify-content-center">
           <a href="https://www.flliferrari.it/" class="m-5" style="width: 15%"><img src="./assets/companies/fili-ferrari.png" style="border-radius: 20px;"></a>
           <a href="https://hiab.com/en" class="m-5" style="width: 15%"><img src="./assets/companies/hiab.png" style="border-radius: 20px;"></a>
           <a href="http://www.katmerciler.com.tr/" class="m-5" style="width: 15%; "><img src="./assets/companies/katmerciler.png" style="border-radius: 20px;"></a>
           <a href="http://www.autokraz.com.ua/index.php/ru/" class="m-5" style="width: 15%"><img src="./assets/companies/kraz.png" style="border-radius: 20px;"></a>
         </div>
       </div>
       <div class="carousel-item w-100">
       <div class="row m-5 flex-row align-items-center justify-content-center ">
           <a href="https://www.nurmak.com.tr/" class="m-5" style="width: 15%"><img src="./assets/companies/nurmak.png" style="border-radius: 20px;"></a>
           <a href="http://www.uzmanlarplatform.com/" class="m-5" style="width: 15%"><img src="./assets/companies/uzumlar.png" style="border-radius: 20px;"></a>
           <a href="http://maz.by/" class="m-5" style="width: 15%"><img src="./assets/companies/maz.png" style="border-radius: 20px;"></a>
           <a href="https://www.xcmg.com/ru-cis" class="m-5" style="width: 15%"><img src="./assets/companies/xcmg.png" style="border-radius: 20px;"></a>
         </div>
       </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>
<div style="background-color: #ffffff;">
<div class="container" >

     <header class="d-flex flex-wrap justify-content-around py-3 border-bottom"> 
       <ul class="nav d-flex nav-pills flex-wrap justify-content-between mt-3">
         <li class="nav-item"><a href="/" class="nav-link active m-2"  aria-current="page">Головна</a></li>
         <li class="nav-item"><a href="./catalog.php" class="nav-link m-2">Каталог</a></li>
         <li class="nav-item"><a href="./about.php" class="nav-link m-2">Про компанію</a></li>
         <li class="nav-item"><a href="./service.php" class="nav-link m-2">Послуги</a></li>
         <li class="nav-item"><a href="./contacts.php" class="nav-link m-2">Контакти</a></li>
       </ul>
     </header>
   </div>
</div>
   

  <svg onclick="topFunction()" id="myBtn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>


   <style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  width: 40px;
  height: 40px;
  background-color: #2196f3;

  color: white;
  cursor: pointer;
  border-radius: 50%;
}

#myBtn:hover {
  background-color: #555;
}
</style>
   <script>
     // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://use.fontawesome.com/dfcff28445.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 </body>

 </html>