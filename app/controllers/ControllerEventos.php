<?php 
include("../configuracao.php");
$objEvents = new \Helpers\ClassEventos();
echo $objEvents->trazerEventos();
