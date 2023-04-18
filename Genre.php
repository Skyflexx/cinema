<?php 

    // Classe Genre. Qui regroupera les films par genre. 1 genre contiendra tels films.
    // Lors de la création d'un film, un array Genre sera pushé.

    class Genre{

        private string $genre;
        private array $movies;

        public function __construct(string $genre){
            $this->genre = $genre;
            $this->movies = array(); // Array qui contient les films du genre de $this.
        }
      
        public function getgenre()
        {
                return $this->genre;
        }

      
        public function setgenre($genre)
        {
                $this->genre = $genre;

                return $this;
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

            $list = "<h3>Liste des films du genre $this :</h3>";

            foreach ($this->movies as $movie){

                $list .= "$movie <br>";

            }

            return $list;
        }

        public function __toString(){
            return $this->genre;
        }
        
    }

?>