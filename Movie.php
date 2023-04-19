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
       

        public function __construct(string $name, string $releaseDate, int $duration, Genre $genre, string $synopsis, Realisator $realisator){

            $this->name = $name;
            $this->releaseDate = new Datetime($releaseDate);
            $this->duration = $duration;
            $this->genre = $genre;
            $this->synopsis = $synopsis;
            $this-> realisator = $realisator;  
            $this->castings = array(); 
                 

            // Lors de la création d'un film on push immédiatement sur la filmographie du réalisateur et sur le Genre concerné.

            $realisator->addMovie($this);
            $genre->addMovie($this);
        
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

        // METHODES PRINCIPALES

        

        public function durationFormat(){ 

                $hours = intdiv($this->duration, 60); // exemple : division entière de 140 par 60 minutes . On obtient 2 par exemple. 2 heures.

                $minuts = $this->duration - ($hours * 60); // Soustraction de 140 min - 2 * 60 = 20 minutes restantes.

                $duration = "$hours heures, $minuts minutes";

                return $duration;

        }

        public function getInfosMovie(){

                return "<h3>$this</h3> Réalisé par " . $this->realisator . "<br> Durée : ". $this->durationFormat(). ". <br> Genre : ". $this->genre
    
                ." <br> Résumé : ".$this->synopsis."<br>";
    
            }

        public function addCasting($casting){

            $this->castings[] = $casting;

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


    }



?>