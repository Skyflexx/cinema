<?php 

    // Classe Acteur, héritée de "Personne". Un acteur possède une liste de films. A chaque création de film on pushera l'array de la filmogaphie de l'acteur en question.

    class Actor extends Person{ 
        
        private array $castings; 

        public function __construct(string $firstname, string $lastname, string $sexe, string $birthDate){    

            parent :: __construct($firstname, $lastname, $sexe, $birthDate);
             
            $this->castings = array();               

        }

        public function getCastings(){
                return $this->castings;
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
       
        public function getFilmography(){  // LA filmographie sera retournée dans l'ordre de sortie des films.
                
                $listOfCastings = $this->castings; // Récupération de l'array castings qui contient tous les objets de type Casting (et à l'intérieur de chaque objet, 1 film)

                usort($listOfCastings, [Actor::class, "movieSort"]); // usort ira se baser depuis la $listOfMovies, tout en sachant que ce sont des class Actor. En y appliquant les règles de "movieSort()"

                $list = "<h3> Filmographie de $this : </h3>";

                foreach ($listOfCastings as $casting){  // Initialement on parcourait l'array Castings qui contient tous les Casting sauf que la liste triée se trouve désormais dans listOfMovies.                

                $list .= $casting->getMovie()." ".$casting->getMovie()->getReleaseDate()->format('Y')." <br> ";

                }              

            return $list;
        }

        private static function movieSort($casting1, $casting2){ // La fonction va comparer la releaseDate du film contenu dans l'objet Casting. Donc entre 2 releaseDate.
                
                $releaseDate1 = strtotime($casting1->getMovie()->getReleaseDate()->format("y-m-d")); // La comparaison se fera entre 2 dates converties
                $releaseDate2 = strtotime($casting1->getMovie()->getReleaseDate()->format("y-m-d"));

                return ($releaseDate1 <=> $releaseDate2) ? -1 : 1; // Si date1 < date 2 alors -1 voudra dire que date1 doit être avant date2
        }        

        public function __toString(){
            return $this->firstname." ".$this->lastname;
        }
    }

?>
