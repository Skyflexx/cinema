<?php

  function tri($casting1, $casting2){
    
                return $casting1->movie->getReleaseDate() > $casting2->movie->getReleaseDate() ? -1 : 1;
            
            }
            
            function sortMovies($castings){
            
                usort($castings, "tri"); 
                
            }   



// NOTES PERSO :

        // Si casting1 > casting 2, alors casting 1 doit être avant casting 2 (-1)
        // Sinon casting 1 doit être après casting 2 (1)
        // pas de return 0 si casting 1 == casting 2 vu qu'il n'y a qu'une règle unique. Si on avait +ieurs règles, la dernière ne doit jamais retourner 0 sinon ça indique que 
        // le comparateur n'est pas "juste".

        // règles pour tri ASC
        // a < b => -1
        // a > b => 1
        // a == b => 0

        // 1. pts team
        // 2. kills
        // 3. victoires
        // ...
        // n. tps de survie (sûrement en ms) La dernière règle ne doit jamais retourner 0 pour garantir un tri unique
?>