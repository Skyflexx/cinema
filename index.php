<h1>Cinéma</h1>

<p>
    Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
</p>

<h2>

    <?php 

        include "Person.php";
        include "Actor.php";
        include "Realisator.php";
        include "Movie.php";
        include "Genre.php";
        include "Role.php";


        $batman= new Role("Batman"); // Batman instancié qu'une fois.        
        $superman = new Role("Superman"); // Superman instancié qu'une fois

        var_dump($batman);        

    ?>

</h2>