<?php

namespace M;

use M\Mensageiro;

class Whatsapp implements Mensageiro{

    public function enviar(string $mensagem){
        echo "Mensagem pelo Whatsapp: $mensagem \n";
    }

}