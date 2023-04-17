<?php 

    // Classe Genre. Qui regroupera les films par genre. 1 genre contiendra tels films.
    // Lors de la création d'un film, un array Genre sera pushé.

    class Genre{

        private string $movieGenre;
        private array $listMovies;

        public function __construct(){
            $this->movieGenre = $typeOfMovie;
            $this->listMovies = array(); // Array qui contient les films du genre de $this.
        }

    }

?>