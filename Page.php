<?php

require_once "vendor/autoload.php";

 $search = new Search;

 $resultado = $search->getNewAdressZipCode(59157260);

 print_r($resultado);