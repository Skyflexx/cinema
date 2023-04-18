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

        $sf = new Genre ("Science Fiction");
        $artsMartiaux = new Genre ("Arts Martiaux");

        $movie1 = new Movie ("Kill Bill", "10/10/2003", 120, $artsMartiaux, "C'est l'histoire d'une dame qui veut absolument tuer Bill...", $tarantino );
        $movie2 = new Movie ("Kill Bill Vol. 2", "10/10/2005", 120, $artsMartiaux, "C'est l'histoire d'une dame qui veut ENCORE absolument tuer Bill...", $tarantino );

        $role1 = new Role ("Beatrix Kiddo");
        $role2 = new Role ("Bill");

        $actor1 = new Actor ("Uma", "Thurmann", "F", "04/29/1970");
        $actor2 = new Actor ("David", "Caradine", "M", "12/08/1936");

        $casting1 = new Casting ($actor1, $role1, $movie1);
        $casting2 = new Casting ($actor1, $role1, $movie2);
        $casting3 = new Casting ($actor2, $role2, $movie1);
        $casting4 = new Casting ($actor2, $role2, $movie2);

       
       echo $tarantino->getMoviesList();

       echo $artsMartiaux->getMoviesList();

       echo $movie1->getInfosMovie(); 

       echo $actor1->getFilmography();

       echo $role1->getActorsInRole();
       
       echo $movie1->getCasting();   

    ?>

</h2>