<?php

namespace P;

use P\Personagem;

class Guerreiro implements Personagem{

    public function atacar(){
        echo "O guerreiro ataca com uma espada. 1d20+Força \n";
    }

}