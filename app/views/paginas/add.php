<?php include ("c:/xampp/htdocs/calendarioMVC/app/configuracao.php");?>
<?php include ("c:/xampp/htdocs/calendarioMVC/app/views/topo.php");?>

<?php 
$date =new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Aula</title>
</head>
<body>
    <div class="container mt-5">
        <form name="formAdd" id="formAdd" method="post" action="http://localhost/calendarioMVC/app/controllers/ControllerAdd.php" method="post">

            <h2 class="form-title">Formulário de Cadastro de Aula</h2>

            <div class="form-group">
                <label for="date">Data:</label>
                <input type="date" class="form-control" name="date" id="date" value="<?= $date->format('Y-m-d');?>">
            </div>
            
            <div class="form-group">
                <label for="time">Hora Inicio:</label>
                <input type="time" class="form-control" name="start" id="start" value="<?= $date->format('H:i');?>">
            </div>

            <div class="form-group">
                <label for="time">Hora Fim:</label>
                <input type="time" class="form-control" name="end" id="end" value="">
            </div>
            <div class="form-group">
                <label for="title">Nome prof - turma - Laboratorio:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Ex : Prof.Lucas - 305 - Lab 1">
            </div>
            
            <div class="form-group">
                <label for="description">Materiais:</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Ex : 10L de leite, 10Kg de Milho...">
            </div>
            <button type="submit" class="btn btn-primary">Marcar Aula</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php include ("c:/xampp/htdocs/calendarioMVC/app/views/rodape.php");?>