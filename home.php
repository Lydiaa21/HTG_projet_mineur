<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>Espace personnel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="htg.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="HomeClient.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="swiper.css" media="screen" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="swiper-bundle.min.css">

</head>
<header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <img id="iconeheader" class="logo" src="htg.png">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Home.html">L'association<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="choix.html">Nos actions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="article.html">Sponsors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="maraine.html">Nos Marraines</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="maraine.html">Newsletter</a>
              </li>
            <li class="nav-item ">
              <a class="nav-link "  id="navbarDropdown">
                Nous contacter
            </a>
            </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      
</header>

<body>
    <div id="div-accueil">
    </div>
    <div>
      <div>
        <h1 id="titre"><font color="white">Donner le goût des fillières scientifiques aux plus jeunes</font></h1>
      </div>
      <div id="chiffres-asso">
        <div class="div-info-chiffres">
          <p id="info-principale">2 0 2 1</p>
          <p id="info-secondaire">depuis</p>
        </div>
        <div class="div-info-chiffres">
          <p id="info-principale">+ 100</p>
          <p id="info-secondaire">Membres</p>
        </div>
        <div class="div-info-chiffres">
          <p id="info-principale">2</p>
          <p id="info-secondaire">villes</p>
        </div>
      </div>
    </div>
    <div  id="presentation-asso">
      <div>
        <h1>Hello Tech Girls, kesako?</h1>
        <p id="description">Hello Tech Girls c'est à la base un projet née de l'initiative d'Albena Gadjanova et de Mme Detemple...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id iaculis nisl. Sed hendrerit lacus et dolor facilisis euismod. Fusce et faucibus urna. Pellentesque congue sodales mauris et cursus. Nunc vitae libero non velit ullamcorper eleifend. Fusce ultrices venenatis massa quis tempor. Morbi congue, turpis in faucibus pellentesque, nisl lectus tempor sem, finibus interdum felis massa sit amet urna. Nulla efficitur scelerisque turpis eget porta. Proin euismod arcu quis aliquam molestie. Nunc facilisis enim laoreet, suscipit dolor ut, fermentum magna. Mauris rhoncus elit eget diam porttitor ultricies.

          <br>Mauris porta condimentum magna. Maecenas tempus fringilla leo, a commodo nisi congue nec. Duis non porttitor massa, eget fringilla justo. Vestibulum maximus risus at congue posuere. Nulla finibus et velit interdum dignissim. Nunc nec augue euismod, elementum metus eu, convallis nibh. Maecenas finibus pretium ex et interdum. Cras a condimentum arcu. Proin bibendum, ante vitae consectetur congue, leo lectus vulputate orci, ut posuere tortor ante at ipsum. Proin pretium, quam porttitor pretium iaculis, urna urna consequat magna, eu dictum tellus sem id magna.
          
         </div>
      <div>
        <img src="map.png" id="map-fr">
      </div>
    </div>
    <div>
      <h1 id="titre" class="section-titre" ><font color="white">Nos Marraines</font></h1>
      <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
      <?php 

              $contenu="";
                
              $result="";
              $database = "hellotechgirls";
              $db_handle = mysqli_connect('localhost', 'root', '' );
              $db_found = mysqli_select_db($db_handle, $database);
              if ($db_found){
                          $sql = "SELECT * FROM marraine ";
                          $resultat =mysqli_query($db_handle,$sql);
                          while($data = mysqli_fetch_assoc($resultat)){
                            $contenu.='<div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">';
                            $contenu.='<img src="'.$data['photo'].'" alt="" class="card-img"></div></div>';
                            $contenu.='<div class="card-content"><h2 class="name">'.$data['Nom'].' '.$data['Prenom'].'</h2><p class="majeure-age">'.$data['Age'].','.$data['Majeure'].'</p>';
                            $contenu.='<p class="description">'.$data['description'].'</p> <button class="button">View More</button></div></div>';
                          }}

                          echo ($contenu); ?>
      
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
            
        </div>
        
    </div>

    <script src="swiper-bundle.min.js"></script>
            <script src="JSHome.js"></script>
</body>