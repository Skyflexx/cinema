<?php

    // CLasse Film, chaque film est lié à un réalisateur. Ici on va push l'array de la filmographie du réal. Et on créé un array avec les acteurs dedans.

    
    class Movie{        

        private string $name;
        private DateTime $releaseDate;
        private int $duration;
        private Genre $genre; //type de film  
        private string $synopsis; // le résumé du film      
        private Realisator $realisator;
        private array $castings;
        private string $photoMovie;       

        public function __construct(string $name, string $releaseDate, int $duration, Genre $genre, string $synopsis, Realisator $realisator, string $photoMovie){

            $this->name = $name;
            $this->releaseDate = new Datetime($releaseDate);
            $this->duration = $duration;
            $this->genre = $genre;
            $this->synopsis = $synopsis;
            $this->realisator = $realisator;  
            $this->castings = array();  
            $this->photoMovie = $photoMovie;                 

            // Lors de la création d'un film on push immédiatement sur la filmographie du réalisateur et sur le Genre concerné.

            $realisator->addMovie($this);
            $genre->addMovie($this);            
        
        }
       
        
        // METHODES PRINCIPALES
                

        public function durationFormat(){ // Fonction permettant de convertir la durée d'un film en nbr d'heures et minutes.

                $hours = intdiv($this->duration, 60); // exemple : division entière de 140 par 60 minutes . On obtient 2 par exemple. 2 heures.

                $minuts = $this->duration % 60; // 140 modulo 60, le modulo c'est le restant de la division euclidienne. Une division qui récupère le reste soit 20 min.

                $duration = "$hours heures, $minuts minutes";

                return $duration;

        }

        public function getInfosMovie(){               

                return "<img src='$this->photoMovie' class='img-rounded' width='200' height='300'> ". $this->realisator . "<br> Durée : ". $this->durationFormat(). ". <br> Genre : ". $this->genre
    
                ." <br> Résumé : ".$this->synopsis."<br>"; // Insertion de l'image du film  avec une classe préétablie pour le css                   
    
            }

        public function addCasting($casting){

            $this->castings[] = $casting; // Ajoute l'objet Casting au tableau des Castings. C'est depuis ce tableau qu'on peut récupérer pour ce film ($this), le nom de l'acteur etc.            

        //     sortMovies($this->castings);
                          

        }

        public function getCasting(){               

            $list = "<h3> Casting de $this : </h3>";

            foreach ($this->castings as $casting){

                $list .=  $casting->getActor(). " dans le role de : ".$casting->getRole()." <br> ";

            }

            return $list;
        }   
               
      
        public function __toString(){
            return $this->name;
        }

        public function getName()
        {
                return $this->name;
        }

        
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

       
        public function getReleaseDate()
        {
                return $this->releaseDate;
        }

       
        public function setReleaseDate($releaseDate)
        {
                $this->releaseDate = $releaseDate;

                return $this;
        }

       
        public function getDuration()
        {
                return $this->duration;
        }

      
        public function setDuration($duration)
        {
                $this->duration = $duration;

                return $this;
        }

        
        public function getGenre()
        {
                return $this->genre;
        }

      
        public function setGenre($genre)
        {
                $this->genre = $genre;

                return $this;
        }

       
        public function getSynopsis()
        {
                return $this->synopsis;
        }

      
        public function setSynopsis($synopsis)
        {
                $this->synopsis = $synopsis;

                return $this;
        }

       
        public function getRealisator()
        {
                return $this->realisator;
        }

        
        public function setRealisator($realisator)
        {
                $this->realisator = $realisator;

                return $this;
        }

        public function getPhotoMovie()
        {
                return $this->photoMovie;
        }

        
        public function setPhotoMovie($photoMovie)
        {
                $this->photoMovie = $photoMovie;

                return $this;
        }

        
    }



?>