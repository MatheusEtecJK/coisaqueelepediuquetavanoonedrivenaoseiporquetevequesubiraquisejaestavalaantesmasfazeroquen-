<?php

require_once 'Pessoa.php';

$oi = new Pessoa();

$oi->cadastro("Coringa","9874-8748","coringasorridente@batman.com");

$oi->mostraDados();