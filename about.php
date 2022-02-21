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
             <li><a href="./catalog.php" class="dropdown-item">Каталог</a></li>
             <li><a href="./about.php" class="dropdown-item  active">Про компанію</a></li>
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

     .bluecard {
       background-color: #e0e0e0;
     }
   </style>
   <div class="container-header">
     <img src="./assets/pro-companiyu.jpg" alt="Snow" style="width:100%;">
     <div class="centered card p-5">
       <h1 class="card-title">ПРО КОМПАНІЮ</h1>
       <h6 class="mt-3 card-text">Ми працюємо на ринку з 1995 року, але навіть такий солідний досвід у 25 років – не причина зупинятись на досягнутому. Наша компанія докладає багато зусиль, щоб з кожним днем ставати ще краще, успішніше, надійніше – і все заради наших замовників. Над успіхом нашого бренду працює велика команда професіоналів, які щиро віддані своїй справі.
         Наш асортимент можна поділити на дві великі товарні групи – цивільна та військова техніка. Загалом, ми пропонуємо клієнтам різноманітні категорії: фургони, вахтові автобуси, пересувні автомайстерні, комунальну та дорожню техніку, крани маніпулятори, блок-контейнери та багато іншого. Звертатись до різних виробників більше немає необхідності, оскільки ви все зможете знайти в асортименті «Нафтоавтоматика».
         Крім того, ми пропонуємо замовникам скористатись послугами по обслуговуванню, ремонту та переобладнанню вашої техніки. У нашому штаті працюють лише перевірені часом спеціалісти, для яких немає задач, котрі вони не змогли б успішно вирішити.
         Обирайте надійного українського виробника – компанію Нафтоавтоматика, і будьте впевнені у завтрашньому дні.</h6>
     </div>
   </div>

   <div class="container row m-5 pb-5 w-100 align-content-center align-items-center">
     <div class="col w-100 p-5">
       <h1 class="mb-5">
         НАША МІСІЯ
       </h1>
       <h6 class="mt-5 pt-5">
         Довести, що український ринок гідний європейського визнання.
         Створювати та реалізовувати лише якісну техніку вітчизняного виробництва, найкращі світові бренди та збільшувати долю локалізації виробництва спільних продуктів на території України.
         Ми клієнто-орієнтована компанія і ми піклуємось про те, щоб замовник залишився задоволеним та звернувся до нас знову.
       </h6>
     </div>
     <div class="col pl-5">
       <img style="width: 150%;" src="./assets/nafto-otval-small.jpg">
     </div>
   </div>

   <div class="container row m-5 pt-5 w-100 align-content-center align-items-center">
     <div class="col pl-5">
       <img style="width: 100%;" src="./assets/naftogaz.jpg">
     </div>
     <div class="col w-100 p-5">
       <h1 class="mb-5">
         ЩО МИ ПРОПОНУЄМО?
       </h1>
       <h5>
         Окрім виробництва та реалізації спеціалізованих автомобілів, ви можете звернутись до нашого сервісного центру, де можна замовити багато видів послуг.
         Якщо хочете приймати роботу у жорстко обговорені дедлайни, за мінімальну вартість та від справжніх фахівців своєї справи – ви прийшли за адресою.
       </h5>
       <h5>Отже, що ми пропонуємо:</h5>
       <div class="row m-4">
         <div class="col">
           <h6>
             РЕМОНТ АВТОБУСІВ
           </h6>
         </div>
         <div class="col">
           <h6>
             РЕМОНТ КУЗОВІВ-ФУРГОНІВ
           </h6>
         </div>
       </div>
       <div class="row m-4">
         <div class="col">
           <h6>
             РЕМОНТ ВАХТОВИХ АВТОМОБІЛІВ
           </h6>
         </div>
         <div class="col">
           <h6>
             МОНТАЖ КРАНІВ-МАНІПУЛЯТОРІВ ТА ХУК-ЛІФТІВ
           </h6>
         </div>
       </div>
     </div>
   </div>





     <div style="background-color: #ffffff;">
       <div class="container">
         <header class="d-flex flex-wrap justify-content-around py-3 border-bottom">
           <ul class="nav d-flex nav-pills flex-wrap justify-content-between mt-3">
             <li class="nav-item"><a href="/" class="nav-link m-2" aria-current="page">Головна</a></li>
             <li class="nav-item"><a href="./catalog.php" class="nav-link m-2">Каталог</a></li>
             <li class="nav-item"><a href="./about.php" class="nav-link m-2 active">Про компанію</a></li>
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