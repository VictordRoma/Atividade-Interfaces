<?php

namespace M;

use M\Mensageiro;

class Email implements Mensageiro{

    public function enviar(string $mensagem){
        echo "Mensagem pelo Email: $mensagem";
    }

}