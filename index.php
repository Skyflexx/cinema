<h1>Cinéma</h1>

<p>
    Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
</p>

<h2>

    <?php 

        spl_autoload_register(function ($class_name) {
            include $class_name . '.php';
        });

        $tarantino = new Realisator ("Quentin", "Tarantino", "M", "03/27/1963");
        $nolan = new Realisator ("Christopher", "Nolan", "M", "07/01/1970");
        $burton = new Realisator ("Tim", "Burton", "M", "08/25/1958");

        $action = new Genre ("Action");
        $artsMartiaux = new Genre ("Arts Martiaux");

        $movie1 = new Movie ("Kill Bill", "10/10/2003", 120, $artsMartiaux, "C'est l'histoire d'une dame qui veut absolument tuer Bill...", $tarantino );

        $movie2 = new Movie ("Kill Bill Vol. 2", "10/10/2005", 120, $artsMartiaux, "C'est l'histoire d'une dame qui veut ENCORE absolument tuer Bill...", $tarantino );

        $movie3 = new Movie ("Batman Begins", "01/01/2005", 140, $action, "Le jeune Bruce Wayne assiste impuissant au meurtre de ses parents. Profondément traumatisé, il grandit obnubilé par un désir de vengeance et voyage aux quatre coins du monde pour étudier la criminologie et les arts martiaux.", $nolan);

        $movie4 = new Movie ("Batman", "01/01/1989", 126, $action, "Batman est un film fantastique et de super-héros américano-britannique de Tim Burton, sorti en 1989.", $burton);
        

        $role1 = new Role ("Beatrix Kiddo");
        $role2 = new Role ("Bill");
        $role3 = new Role("Batman");

        $actor1 = new Actor ("Uma", "Thurmann", "F", "04/29/1970");
        $actor2 = new Actor ("David", "Caradine", "M", "12/08/1936");
        $actor3 = new Actor ("Christian", "Bale", "M", "01/30/1974");
        $actor4 = new Actor ("Michael", "Keaton", "M", "09/05/1951");


        $cast1 = new Casting ($actor1, $role1, $movie1); // Uma dans kill bill
        $cast2 = new Casting ($actor2, $role2, $movie1); // Uma dans kill bill 2

        $cast3 = new Casting ($actor1, $role1, $movie2); // David dans Kill Bill 1       
        $cast4 = new Casting ($actor2, $role2, $movie2); // David dans Kill Bill 1 

        $cast5 = new Casting ($actor3, $role3, $movie3); // Bale dans batman begins

        $cast6 = new Casting ($actor4, $role3, $movie4); // Keaton dans Batman

       
       echo $tarantino->getMoviesList();

       echo $artsMartiaux->getMoviesList();

       echo $movie1->getInfosMovie(); 

       echo $actor1->getFilmography();

       echo $role1->getActorsInRole();
       
       echo $movie1->getCasting();   

       echo $movie3->getCasting();

       echo $role3->getActorsInRole();

       echo $movie3->getInfosMovie();

       echo $action->getMoviesList();

    ?>

</h2>