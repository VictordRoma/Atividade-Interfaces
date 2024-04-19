<?php

namespace M;

use M\Mensageiro;

class Sms implements Mensageiro{

    public function enviar(string $mensagem){
        echo "Mensagem por SMS: $mensagem \n";
    }

}