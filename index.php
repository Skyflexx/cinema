<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Cinema Bootstrap</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">  
  </head>
<body>  

  <?php 

    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });
    
    // Instanciations

    $tarantino = new Realisator ("Quentin", "Tarantino", "M", "03/27/1963");
    $nolan = new Realisator ("Christopher", "Nolan", "M", "07/01/1970");
    $burton = new Realisator ("Tim", "Burton", "M", "08/25/1958");

    $action = new Genre ("Action");
    $artsMartiaux = new Genre ("Arts Martiaux");

    $movie1 = new Movie ("Kill Bill", "10/10/2003", 120, $artsMartiaux, "Au cours d'une cérémonie de mariage en plein désert, un commando fait irruption dans la chapelle et tire sur les convives. Laissée pour morte, la mariée enceinte retrouve ses esprits après un coma de quatre ans. Celle qui a auparavant exercé les fonctions de tueuse à gages au sein du Détachement international des Vipères assassines n'a alors plus qu'une seule idée en tête: venger la mort de ses proches en éliminant tous les membres de cette organisation criminelle.", $tarantino, "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Killbill-vol1-logo.svg/220px-Killbill-vol1-logo.svg.png" );

    $movie2 = new Movie ("Kill Bill Vol. 2", "10/10/2005", 120, $artsMartiaux, "Après sa sanglante escapade japonaise, La Mariée revient aux États-Unis afin de se venger une fois pour toutes de Bill. Pourtant, la quête est loin d'être terminée et les deux derniers lieutenants de son ennemi, Budd et Elle Driver, se dressent sur son chemin. La route de la vengeance est longue pour La Mariée qui devra se souvenir des apprentissages de Paï-Meï, son maître de kung fu.", $tarantino, "https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/35/13/45/18377926.jpg" );

    $movie3 = new Movie ("Batman Begins", "01/01/2005", 140, $action, "Le jeune Bruce Wayne assiste impuissant au meurtre de ses parents. Profondément traumatisé, il grandit obnubilé par un désir de vengeance et voyage aux quatre coins du monde pour étudier la criminologie et les arts martiaux.", $nolan, "https://fr.web.img6.acsta.net/c_310_420/pictures/22/10/04/08/52/2484953.jpg");

    $movie4 = new Movie ("Batman", "01/01/1989", 126, $action, "Batman est un film fantastique et de super-héros américano-britannique de Tim Burton, sorti en 1989.", $burton, "https://fr.web.img5.acsta.net/c_310_420/pictures/22/10/07/09/47/0708130.jpg");
    
    $role1 = new Role ("Beatrix Kiddo");
    $role2 = new Role ("Bill");
    $role3 = new Role("Batman");

    $actor1 = new Actor ("Uma", "Thurmann", "F", "04/29/1970");
    $actor2 = new Actor ("David", "Caradine", "M", "12/08/1936");
    $actor3 = new Actor ("Christian", "Bale", "M", "01/30/1974");
    $actor4 = new Actor ("Michael", "Keaton", "M", "09/05/1951");

    $cast1 = new Casting ($actor1, $role1, $movie1); // Uma dans kill bill
    $cast2 = new Casting ($actor2, $role2, $movie1); // David dans kill bill 1
    $cast3 = new Casting ($actor1, $role1, $movie2); // Uma dans Kill Bill 2      
    $cast4 = new Casting ($actor2, $role2, $movie2); // David dans Kill Bill 2  
    $cast5 = new Casting ($actor3, $role3, $movie3); // Bale dans batman begins
    $cast6 = new Casting ($actor4, $role3, $movie4); // Keaton dans Batman

  ?>

  <div class="p-5 bg-warning text-dark text-center">
    <h1 class ="display-1 "><strong>CINEMA</strong></h1>     
  </div>

  <div class="d-flex justify-content-center bg-light mb-3">    

    <div class="container mt-3">
      <h2>Genre : <?php echo $movie1->getGenre()?></h2>
      <div class="card bg-dark text-center text-white">        
        <div class="card-header fs-2"><?php echo $movie1?></div>
        <div class="card-body">
          <img src='<?php echo $movie1->getPhotoMovie()?>' class='img-rounded' width='200' height='300'>
          <p class="fs-3 text-justify"><?php echo $movie1->getSynopsis()?></p>
        </div>        
          <div class=" fs-3 card-footer"><p class ="fs-4">Durée : <?php echo $movie1->durationFormat()?></p> Réalisé par : <?php echo $movie1->getRealisator()?></div>
      </div>
    </div>

    <div class="container mt-3">
      <h2>Genre : <?php echo $movie2->getGenre()?></h2>
      <div class="card bg-dark text-center text-white">
        <div class="card-header fs-2"><?php echo $movie2?></div>
        <div class="card-body">
          <img src='<?php echo $movie2->getPhotoMovie()?>' class='img-rounded' width='200' height='300'>
          <p class="fs-3 text-justify"><?php echo $movie2->getSynopsis()?></p>
        </div>       
        <div class="fs-3 card-footer"><p class ="fs-4">Durée : <?php echo $movie2->durationFormat()?></p> Réalisé par : <?php echo $movie2->getRealisator()?></div>
      </div>
    </div>

    <div class="container mt-3">
      <h2>Genre : <?php echo $movie3->getGenre()?></h2>
      <div class="card bg-dark text-center text-white">
        <div class="card-header fs-2"><?php echo $movie3?></div>
        <div class="card-body">
          <img src='<?php echo $movie3->getPhotoMovie()?>' class='img-rounded' width='200' height='300'>
          <p class="fs-3 text-justify"><?php echo $movie3->getSynopsis()?></p>
        </div>        
        <div class="fs-3 card-footer"><p class ="fs-4">Durée : <?php echo $movie3->durationFormat()?></p> Réalisé par : <?php echo $movie3->getRealisator()?></div>
      </div>
    </div>

    <div class="container mt-3">
      <h2>Genre : <?php echo $movie4->getGenre()?></h2>
      <div class="card bg-dark text-center text-white">
        <div class="card-header fs-2"><?php echo $movie4?></div>
        <div class="card-body">
          <img src='<?php echo $movie4->getPhotoMovie()?>' class='img-rounded' width='200' height='300'>
          <p class="fs-3 text-justify"><?php echo $movie4->getSynopsis()?></p>
        </div>        
        <div class="fs-3 card-footer"><p class ="fs-4">Durée : <?php echo $movie4->durationFormat()?></p> Réalisé par : <?php echo $movie4->getRealisator()?></div>
      </div>
    </div>   
    
  </div>     

   <div class="container  fs-3 bg-dark text-white text-center">
    
    <?php echo $tarantino->getMoviesList(); ?>

   </div>

   <div class="container fs-3 mt-3 bg-dark text-white text-center">
    
    <?php echo $artsMartiaux->getMoviesList(); ?>

   </div>

   <div class="container fs-3 mt-3 bg-dark text-white text-center">
    
    <?php echo $actor1->getFilmography(); ?>

   </div>

   <div class="container fs-3 mt-3 bg-dark text-white text-center">
    
    <?php echo $movie1->getCasting(); ?>

   </div>

   <div class="container fs-3 mt-3 bg-dark text-white text-center">
    
    <?php echo $movie3->getCasting(); ?>

   </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>














