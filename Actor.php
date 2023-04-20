<?php 

    // Classe Acteur, héritée de "Personne". Un acteur possède une liste de films. A chaque création de film on pushera l'array de la filmogaphie de l'acteur en question.

    class Actor extends Person{ 
        
        private array $castings; 

        public function __construct(string $firstname, string $lastname, string $sexe, string $birthDate){    

            parent :: __construct($firstname, $lastname, $sexe, $birthDate);
             
            $this->castings = array();               

        }

        
        public function getFirstname()
        {
                return $this->firstname;
        }

       
        public function setFirstname($firstname)
        {
                $this->firstname = $firstname;

                return $this;
        }

       
        public function getLastname()
        {
                return $this->lastname;
        }

      
        public function setLastname($lastname)
        {
                $this->lastname = $lastname;

                return $this;
        }

        
        public function getSexe()
        {
                return $this->sexe;
        }

       
        public function setSexe($sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

        
        public function getBirthDate()
        {
                return $this->birthDate;
        }

        
        public function setBirthDate($birthDate)
        {
                $this->birthDate = $birthDate;

                return $this;
        }

        // METHODES GENERALES
        
        

        public function addCasting($casting){                  
                
                $this->castings[] = $casting; 
        
        }

        public function getFilmography(){          
               

            $list = "<h3> Filmographie de $this : </h3>";

            foreach ($this->castings as $casting){

                $list .= $casting->getMovie()." <br> ";

            }              

            return $list;
        }

        

        public function __toString(){
            return $this->firstname." ".$this->lastname;
        }
    }

?>
