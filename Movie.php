<?php

    // CLasse Film, chaque film est lié à un réalisateur. Ici on va push l'array de la filmographie du réal. Et on créé un array avec les acteurs dedans.

    class Movie{

        private string $name;
        private DateTime $releaseDate;
        private int $duration;
        private string $type; //type de film
        private array $Actors; // La liste des acteurs sera actualisée dans un array. Un acteur sera lié à un film. Par récursion.
        private Realisator $realName;

        public function __construct(string $name, string $releaseDate, int $duration, string $type, array $actors, Realisator $realName){

            $this->name = $name;
            $this->releaseDate = new Datetime ($releaseDate);
            $this->duration = $duration;
            $this->type = $type;
            $this->actors = array(); // Liste des acteurs de ce film qui sera push à la création du film.
            $this->realisator = $realisator;

            // Lors de la création d'un film on push immédiatement sur la filmographie du réalisateur.

            $realisator->addMovie($this); // la méthode sera créée plus tard dans la classe Réalisateur.

            
            // Foreach ($this->actors as $movie){

                // $actor->addMovie($this);    // Actor étant l'objet contenu dans chaque partie de l'array

            //}

            // Pour chaque acteur de l'array, on va push ce film à leur filmographie           
           

        }
        
    }



?>