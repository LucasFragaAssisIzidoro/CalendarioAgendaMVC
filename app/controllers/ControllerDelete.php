<?php 
include("../configuracao.php");
$id = filter_input(INPUT_GET,'id', FILTER_DEFAULT);
$objEvents = new \Helpers\ClassEventos();
echo $objEvents->deletarEvento($id);
header("Location:http://localhost/calendarioMVC/app/views/paginas/calendarioAdm.php");