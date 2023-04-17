<?php 

    // Classe Acteur, héritée de "Personne". Un acteur possède une liste de films. A chaque création de film on pushera l'array de la filmogaphie de l'acteur en question.

    class Actor extends Person{ 

        private string $role;
        private array $movies;

        public function __construct(string $firstname, string $lastname, string $sexe, string $birthDate, string $role){    

            parent :: __construct (string $firstname, string $lastname, string $sexe, string $birthDate);
            $this->role = $role;
            $this->movies = array();     
            
            test

        }
    }

?>
