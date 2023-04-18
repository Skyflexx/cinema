<?php

    // La classe role. A chaque création d'un acteur, on créé l'objet role. Qui ira push un array avec les acteurs qui ont incarné ce role

    class Role {

        private string $roleName;
        private array $actors;
        private array $movies;

        public function __construct($roleName){

            $this->roleName = $roleName;
            $this->actors = array(); // Initialisation de l'array actors qui regroupera tous les acteurs de ce rôle.
            $this->movies = array();
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

            $list = "<h3> Acteurs qui ont joué $this : </h3>";

            foreach ($this->castings as $casting){

                $list .= $casting->getActor()." <br> ";

            }

            return $list;
        }

        public function __toString (){
            return $this->roleName;
        }
    }

?>