<?php 

    class Casting {

        private Actor $actor;
        private Role $role;
        private Movie $movie;

        public function __construct(Actor $actor, Role $role, Movie $movie){

            $this->actor = $actor;
            $this->role = $role;
            $this->movie = $movie;

            $actor->addCasting($this);            
            $role->addCasting($this);
            $movie->addCasting($this);
            
        }
        
        public function getActor()
        {
                return $this->actor;
        }

        
        public function setActor($actor)
        {
                $this->actor = $actor;

                return $this;
        }

        
        public function getRole()
        {
                return $this->role;
        }

        
        public function setRole($role)
        {
                $this->role = $role;

                return $this;
        }

        
        public function getMovie()
        {
                return $this->movie;
        }

        
        public function setMovie($movie)
        {
                $this->movie = $movie;

                return $this;
        }

              
        
    }

?>
