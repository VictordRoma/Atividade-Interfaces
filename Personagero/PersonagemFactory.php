<?php

namespace P;

use P\Personagem;
use P\Guerreiro;
use P\Arqueiro;
use P\Mago;
use Exception;

class PersonagemFactory{

    public static function criar(string $classe){

        switch ($classe) {
            case 'guerreiro':
                return new Guerreiro();
            case 'arqueiro':
                return new Arqueiro();
            case 'mago':
                return new Mago();
            default:
                throw new Exception("Classe inválida.");
                
        }

    }

}
