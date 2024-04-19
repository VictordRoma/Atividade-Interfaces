<?php

namespace M;

use M\Mensageiro;
use M\Email;
use M\Sms;
use M\Whatsapp;
use Exception;

class MensageiroFactory{

    public static function criar(string $tipo): Mensageiro{

        switch ($tipo) {
            case 'email':
                return new Email();
            case 'sms':
                return new Sms();
            case 'whatsapp':
                return new Whatsapp();
            default:
                throw new Exception("Tipo de mensageiro inválido.");
                
        }

    }

}