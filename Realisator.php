<?php 

    // Classe Réalisateur (héritée de Personne). 

    class Realisator extends Person {
        
        private array $movies; //Liste des films réalisés. Chaque film aura un réal et donc incrémentera une liste. Récursion.

        public function __construct(string $firstname, string $lastname, string $sexe, string $birthDate){

            parent :: __construct ($firstname, $lastname, $sexe, $birthDate);
            
            $this->movies = array(); // Liste des films réalisés par ce réalisateur qui sera push à chaque création de film.

        }

        public function getMovies()
        {
                return $this->movies;
        }
        
        public function setMovies($movies)
        {
                $this->movies = $movies;

                return $this;
        }

        public function addMovie($movie){

            array_push($this->movies, $movie);

        }

        public function getMoviesList(){

            $list = "<h3>Liste des films de $this :</h3>";

            foreach ($this->movies as $movie){

                $list .= "$movie <br>";

            }

            return $list;
        }

        public function __toString(){
            return $this->firstname." ".$this->lastname;
        }
    }

?>