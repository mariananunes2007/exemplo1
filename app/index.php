<?php
//$nome = $_GET['nome'];
$nome = '';
$periodo = '';
if($_SERVER['RESQUEST_METHOD'] == 'POST') {
    $nome = $POST['nome'];
    $periodo = $_POST['periodo'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeira Aplicação</title>
</head>
    <body>
        <h1>
            <?php if($periodo == 'm'): ?>
                Bom dia <?= $nome ?>

        </h1>
        <form action="/idex.php" method="post"> 
            <label for="periodo">Selecione o Período</label>
            <select name="periodo">
                <option value="m">Manhã</option>
                <option value="t">Tarde</option>
                <option value="n">Noite</option>
            </select>
            <label for="nome">Digite seu nome</label>
            <input type="text" name="nome" />
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>