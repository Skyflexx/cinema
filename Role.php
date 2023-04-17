<?php

    // La classe role. A chaque création d'un acteur, on créé l'objet role. Qui ira push un array avec les acteurs qui ont incarné ce role

    class Role {

        private string $roleName;
        private array $actors;

        public function __construct($roleName){

            $this->roleName = $roleName;
            $this->actors = array(); // Initialisation de l'array actors qui regroupera tous les acteurs de ce rôle.
        }
        
    }

?>