<?php 

include ("c:/xampp/htdocs/calendarioMVC/app/configuracao.php");

$objEvents = $objEvents = new \Helpers\ClassEventos();
$date = filter_input(INPUT_POST,'date', FILTER_DEFAULT);
$id = filter_input(INPUT_POST,'id', FILTER_DEFAULT);
$inicio = filter_input(INPUT_POST,'start', FILTER_DEFAULT);
$fim = filter_input(INPUT_POST,'end', FILTER_DEFAULT);
$title = filter_input(INPUT_POST,'title', FILTER_DEFAULT);
$description= filter_input(INPUT_POST,'description', FILTER_DEFAULT);
$start = new \DateTime($date.''.$inicio, new \DateTimeZone('America/Sao_Paulo'));
$end = new \DateTime($date.''.$fim, new \DateTimeZone('America/Sao_Paulo'));


$objEvents->atualizarEvento($id,$title,$description,$start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s'),);