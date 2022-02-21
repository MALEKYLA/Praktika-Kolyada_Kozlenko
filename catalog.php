<?php

include 'db.php';
//READ
$sql = $pdo->prepare("SELECT vehicle.id as id, vehicle.Name as Name, vehicle.Purpose as Purpose, vehicle.Description as Description, photos.photo as Photo, vehicle.IdCategory FROM `vehicle` INNER JOIN photos ON vehicle.IdPhoto = photos.id;");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);


$sql = $pdo->prepare("SELECT category.id as id, category.Name as Name, category.Description as Description, photos.photo as Photo FROM `category` INNER JOIN photos ON category.Photo = photos.id");
$sql->execute();
$catresult = $sql->fetchAll(PDO::FETCH_OBJ);

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

  <title>НафтоАвтоматика</title>
</head>

<body>
  <div style="background-color: #ffffff;">
    <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <img src="./assets/logo.png" height="50">
        </a>

        <div class="dropdown dropstart">
          <svg class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
          <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButton1" style="border-radius: 20px; width: 200px; background-color: #e0e0e0;">
            <li class='text-center'>Меню</li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a href="/" class="dropdown-item">Головна</a></li>
            <li><a href="./catalog.php" class="dropdown-item active">Каталог</a></li>
            <li><a href="./about.php" class="dropdown-item">Про компанію</a></li>
            <li><a href="./service.php" class="dropdown-item">Послуги</a></li>
            <li><a href="./contacts.php" class="dropdown-item">Контакти</a></li>
          </ul>
        </div>
      </header>
    </div>
  </div>
  <style>
    .container-header {
      position: relative;
      text-align: left;
    }

    .centered {
      background-color: #2196f3;
      color: white;
      position: absolute;
      top: 60%;
      left: 70%;
      transform: translate(-50%, -50%);
    }

    .card {
      border: none;
    }

    .card a {
      width: 330px;
      height: 190px;
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

  <div class="container mt-5 mb-5">
    <h1 class="mt-5 mb-5 text-center">
      Каталог
    </h1>
    <div class="accordion" id="accordionExample">
      <?php
      $i = 0;
      foreach ($catresult as $res) { 
        ?>
        <div class="accordion-item">
          <button class="accordion-button <?php if ($i != 0) echo 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#oiewhw<?php echo $res->id; ?>" aria-expanded="<?php if ($i == 0) {
                                                                                                                                                                                            echo 'true';
                                                                                                                                                                                          } else {
                                                                                                                                                                                            echo 'false';
                                                                                                                                                                                          } ?>" aria-controls="oiewhw<?php echo $res->id; ?>">
            <img src="http://transport-admin/img/categories/<?php echo $res->Photo; ?>" style="width: 10%;">
            <div class="card-body">
              <h3 class="card-title"><?php echo $res->Name; ?></h3>
            </div>
          </button>
          <div id="oiewhw<?php echo $res->id; ?>" class="accordion-collapse collapse  <?php if ($i == 0) echo 'show'; ?>" data-bs-parent="#accordionExample">
            <div class="accordion-body block">
              <div class="accordion" id="accordionExample1">
                <?php
                $a = 0;
                foreach ($result as $cres) { 
                  if($cres->IdCategory == $res->id){

                 ?>
                  <div class="accordion-item">
                    <button class="accordion-button <?php if ($i != 0) echo 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#df<?php echo $cres->id; ?>" aria-expanded="<?php if ($i == 0) {
                                                                                                                                                                                                    echo 'true';
                                                                                                                                                                                                  } else {
                                                                                                                                                                                                    echo 'false';
                                                                                                                                                                                                  } ?>" aria-controls="df<?php echo $cres->id; ?>">
                      <img src="http://transport-admin/img/transport/<?php echo $cres->Photo; ?>" style="width: 10%;">
                      <div class="card-body">
                        <h4 class="card-title"><?php echo $cres->Name; ?></h3>
                      </div>
                    </button>
                    <div id="df<?php echo $cres->id; ?>" class="accordion-collapse collapse  <?php if ($i == 0) echo 'show'; ?>" data-bs-parent="#accordionExample1">
                      <div class="accordion-body m-2">
                        <h5 class="m-3">ПРИЗНАЧЕННЯ:</h5>
                        <?php echo $cres->Purpose; ?>
                        <h5 class="m-3">ПОВНИЙ ОПИС:</h5>
                      <?php echo $cres->Description; ?>
                      </div>
                    </div>
                  </div>

                <?php
                  }
                  $a = 1;
                } ?>
              </div>
            </div>
          </div>
        </div>

      <?php
        $i = 1;
      } ?>
    </div>

  </div>
  <div class="row flex-center justify-content-center align-items-center">

  </div>
  </div>
  <div style="background-color: #ffffff;">
    <div class="container">
      <header class="d-flex flex-wrap justify-content-around py-3 border-bottom">
        <ul class="nav d-flex nav-pills flex-wrap justify-content-between mt-3">
          <li class="nav-item"><a href="/" class="nav-link m-2" aria-current="page">Головна</a></li>
          <li class="nav-item"><a href="./catalog.php" class="nav-link m-2 active">Каталог</a></li>
          <li class="nav-item"><a href="./about.php" class="nav-link m-2">Про компанію</a></li>
          <li class="nav-item"><a href="./service.php" class="nav-link m-2">Послуги</a></li>
          <li class="nav-item"><a href="./contacts.php" class="nav-link m-2">Контакти</a></li>
        </ul>
      </header>
    </div>
  </div>


  <svg onclick="topFunction()" id="myBtn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
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
      scrollFunction()
    };

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