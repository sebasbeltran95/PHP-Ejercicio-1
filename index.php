<?php


function espacio_juguete ($edad){
  

    if($edad < 5){
        echo "tu espacio es en la parte inferior de la bodega" ."<br>";
    } else if($edad >= 5 && $edad <= 7) {
        echo "tu espacio es en la aprte media de la bodega " ."<br>";
    } else if($edad > 7) {
        echo "tu espacio es en la aprte alta de la bodeg " ."<br>";
    } else {
        echo"tu espacio es en la parte de la bodega de al lado" ."<br>";
    }

}
espacio_juguete(3);
espacio_juguete(5);
espacio_juguete(10);


