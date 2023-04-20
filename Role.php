<?php

    // La classe role. A chaque création d'un acteur, on créé l'objet role. Qui ira push un array avec les acteurs qui ont incarné ce role

    class Role {

        private string $roleName;
        private array $castings;        

        public function __construct($roleName){

            $this->roleName = $roleName;
            $this->castings = array(); // Initialisation de l'array actors qui regroupera tous les acteurs de ce rôle.
           
        }
        
         
        public function getRoleName()
        {
                return $this->roleName;
        }

        
        public function setRoleName($roleName)
        {
                $this->roleName = $roleName;

                return $this;
        }

        
        public function getActors()
        {
                return $this->actors;
        }

       
        public function setActors($actors)
        {
                $this->actors = $actors;

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

        public function addCasting($casting){

            $this->castings[] = $casting;

        }

        public function getActorsInRole(){

            $listOfCastings = $this->castings; // Récupération de l'array castings qui contient tous les objets de type Casting (et à l'intérieur de chaque objet, 1 film)

                usort($listOfCastings, [Role::class, "movieSort"]); // usort ira se baser depuis la $listOfMovies, tout en sachant que ce sont des class Actor. En y appliquant les règles de "movieSort()"

            $list = "<h3> Acteurs qui ont joué $this : </h3>";

            foreach ($listOfCastings as $casting){

                $list .= $casting->getActor()." dans le film ".$casting->getMovie()." <br> ";

            }

            return $list;
        }

        private static function movieSort($casting1, $casting2){ // La fonction va comparer la releaseDate du film contenu dans l'objet Casting. Donc entre 2 releaseDate.
                
            $releaseDate1 = strtotime($casting1->getMovie()->getReleaseDate()->format("y-m-d")); // La comparaison se fera entre 2 dates converties
            $releaseDate2 = strtotime($casting1->getMovie()->getReleaseDate()->format("y-m-d"));

            return ($releaseDate1 <=> $releaseDate2) ? -1 : 1; // Si date1 < date 2 alors -1 voudra dire que date1 doit être avant date2
    }        

        public function __toString (){
            return $this->roleName;
        }
    }

?>