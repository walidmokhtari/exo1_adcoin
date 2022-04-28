<?php

function sumArray($nb1, $nb2): int {
    
    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    //On initialise notre variable ou on va sauvegarder la somme a 0
    $sum = 0;
    
    //Vérifier si nb1 et nb2 ne sont pas négatifs 
    if ($nb1 >= 0 && $nb2 >= 0) {
        //Voir si nb1 est inférieur a nb2
        if ($nb1 < $nb2) {
            //Parcourir notre tableau en mettant dans chaque itération la valeur de la case dans la variable $key
            foreach ($array as $key) {
                //Si la valeur est inclut dans l'intervalle [nb1;nb2] on additionne la valeur de la key avec la somme précédante
                if ($key >= $nb1 && $key <= $nb2)
                    $sum += $key;
            }
            return $sum;
        } else 
            return 0;
    } else 
        return -1; 
}

//Tester sumArray($nb1, $nb2)
echo sumArray(-10,50);