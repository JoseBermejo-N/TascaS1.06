<?php

require_once 'Tema.php';
require_once 'TipoDeRecurso.php';
require_once 'RecursoDidacticos.php';


$recurso1 = new RecursoDidacticos("Introducción a los Métodos Mágicos", 
                                 Tema::PHP, 
                                 "https://www.php.net/manual/es/language.oop5.magic.php", 
                                 TipoDeRecurso::ARTICLE);

echo $recurso1;
