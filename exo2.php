<?php
    $genre="femme";
    $age=20;

    if ($genre=="femme" AND $age<=18){
        echo 'Vous êtes une femme et vous êtes mineure!';
    }
    elseif ($genre=="femme" AND $age>=18){
        echo 'Vous êtes une femme et vous êtes majeure!';
    }
    elseif ($genre=="homme" AND $age<=18){
        echo 'Vous êtes un homme et vous êtes mineur!';
    }
    elseif ($genre=="homme" AND $age>=18){
        echo 'Vous êtes un homme et vous êtes majeur!';
    }
    else{
        echo 'Je ne sais pas qui vous êtes.';
    }
?>