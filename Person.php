<?php 

    class Person{ // Attributs en protected car classe Parent.

        protected string $firstname;
        protected string $lastname;
        protected string $sexe;
        protected DateTime $birthDate;

        public function __construct(string $firstname, string $lastname, string $sexe, string $birthDate){

            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->sexe = $sexe;
            $this->birthDate = new Datetime($birthDate);

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
    }

?>