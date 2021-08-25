<?php
    require_once '../model/cadastro.php';
    session_start();
    $cadastros = $_SESSION["cadastros"];
?>

<!DOCTYPE html>
<html lang="pt br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/duvida.css">
    <title>Listagem</title>
</head>

<body class="back">
    <div class="content">
        <div class="imagidiv">
            <center>
                <img class="ima1" src="https://digital.saude.ce.gov.br/resource/icones/logoVacinacaoAgenda.svg" alt="Covid 19">
            </center>
        </div>
        <hr>
        <div class="miolo">
            <div class="consulta">
                <center>
                <table border="1">
                    <tr style="background-color: black; color:white;">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>SUS</th>
                        <th>Idade</th>
                        <th>Comorbidade</th>
                        <th>Endereço</th>
                    </tr>
                    <?php foreach ($cadastros as $cadastro) { ?>
                    <tr>
                        <th><?php echo $cadastro->getId(); ?></th>
                        <th><?php echo $cadastro->getNome(); ?></th>
                        <th><?php echo $cadastro->getCpf(); ?></th>
                        <th><?php echo $cadastro->getSus(); ?></th>
                        <th><?php echo $cadastro->getIdade(); ?></th>
                        <th><?php 
                                $doenca = $cadastro->getComorbidade() == 0 ? $prov = "Não" : $prov = "Sim";
                                echo $doenca; 
                            ?></th>
                        <th><?php echo $cadastro->getEndereco(); ?></th>
                    </tr>
                    <?php } ?>
                </table>
                </center>
            </div>
        </div>
    </div>
</body>

</html>