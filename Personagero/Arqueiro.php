<?php

namespace P;

use P\Personagem;

class Arqueiro implements Personagem{

    public function atacar(){
        echo "O arqueiro ataca com um arco. 1d20+Destreza \n";
    }

}
