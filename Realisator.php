<?php 

    // Classe Réalisateur (héritée de Personne). Chaque réalisateur a une filmographie qui sera pushée à chaque création de film.

    class Realisator extends Person {
        
        private array $moviesRealised; //Liste des films réalisés. Chaque film aura un réal et donc incrémentera une liste. Récursion.

        public function __construct(string $firstname, string $lastname, string $sexe, string $birthDate){

            parent :: __construct (string $firstname, string $lastname, string $sexe, string $birthDate);
            
            $this->moviesRealised = array();

        }
        
    }

?>