<?php 

    // Classe Acteur, héritée de "Personne". Un acteur possède une liste de films. A chaque création de film on pushera l'array de la filmogaphie de l'acteur en question.

    class Actor extends Person{ 

        private Role $role; // l'acteur est lié à un rôle déjà instancié. 
        private array $movies; // Les films de cet acteur.

        public function __construct(string $firstname, string $lastname, string $sexe, string $birthDate, Role $role){    

            parent :: __construct($firstname, $lastname, $sexe, $birthDate);
            $this->role = $role; 
            $this->movies = array(); // Films dans lesquels l'acteur a joué    
            
            // Quand on créé un acteur, ça ajoute immédiatement son nom au rôle qu'il a joué.
            $role->addRole($this) 
            // la fct sera créée plus tard. cette fonction pushera l'array Role de cet acteur.

        }
    }

?>
