<?php include("c:/xampp/htdocs/calendarioMVC/app/configuracao.php"); ?>
<?php include("c:/xampp/htdocs/calendarioMVC/app/views/topo.php"); ?>

<?php
$objEvents = new \Helpers\ClassEventos();
$events = $objEvents->trazerEventosPeloId($_GET['id']);
var_dump($events);
$inicio=new \DateTime($events[0]['comeco_evento']);
$fim=new \DateTime($events[0]['fim_evento']);
?>


<form name="formEdit" id="formEdit" method="post" action="http://localhost/calendarioMVC/app/controllers/ControllerEdit.php" method="post">

    <h2 class="form-title">Formulário de Atualizacao de Aula</h2>

    <div class="form-group">
        <label for="date">Data:</label>
        <input type="date" class="form-control" name="date" id="date" value="<?= $inicio->format('Y-m-d')?>">
    </div>

    <div class="form-group">
        <label for="time">Hora Inicio:</label>
        <input type="time" class="form-control" name="start" id="start" value="<?= $inicio->format('H:i:s'); ?>">
    </div>

    <div class="form-group">
        <label for="time">Hora Fim:</label>
        <input type="time" class="form-control" name="end" id="end" value="<?=$fim->format("H:i:s")?>">
    </div>
    <div class="form-group">
        <label for="title">Nome prof - turma - Laboratorio:</label>
        <input type="text" class="form-control" name="title" id="title" value="<?=$events[0]['titulo_evento'];?>">
    </div>
    <input type="hidden" class="form-control" name="id" id="id" value="<?=$_GET['id']?>">

    <div class="form-group">
        <label for="description">Materiais:</label>
        <input type="text" class="form-control" name="description" id="description" value="<?=$events[0]['descricao_evento'];?>">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar Aula</button>

    <a href="http://localhost/calendarioMVC/app/controllers/ControllerDelete.php?id=<?=$_GET['id']?>" class="btn btn-primary btn-danger">Deletar Aula</a>
</form>
</div>

<?php include("c:/xampp/htdocs/calendarioMVC/app/views/rodape.php"); ?>