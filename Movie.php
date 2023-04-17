<?php

    // CLasse Film, chaque film est lié à un réalisateur. Ici on va push l'array de la filmographie du réal. Et on créé un array avec les acteurs dedans.

    class Movie{

        private string $name;
        private DateTime $releaseDate;
        private int $duration;
        private string $type; //type de film
        private array $listOfActors; // La liste des acteurs sera actualisée dans un array. Un acteur sera lié à un film. Par récursion.

        public function __construct(string $name, string $releaseDate, int $duration, string $type, array $actors, Realisator $realName){

            $this->name = $name;
            $this->releaseDate = new Datetime ($releaseDate);
            $this->duration = $duration;
            $this->type = $type;
            $this->actors = array();

        }
        
    }



?>