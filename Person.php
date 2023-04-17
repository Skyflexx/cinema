<?php 

    class Person{

        private string $firstname;
        private string $lastname;
        private string $sexe;
        private DateTime $birthDate;

        public function __construct(string $firstname, string $lastname, string $sexe, string $birthDate){

            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->sexe = $sexe;
            $this->birthDate = new Datetime($birthDate);

        }

    }

?>