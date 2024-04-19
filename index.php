<?php

require 'vendor/autoload.php';

use M\MensageiroFactory;
use P\PersonagemFactory;

$tipo = "email";
$mensageiro = MensageiroFactory::criar($tipo);

$mensageiro->enviar("Olá!");

$classe = "guerreiro";
$personagem = PersonagemFactory::criar($classe);

$personagem->atacar();
