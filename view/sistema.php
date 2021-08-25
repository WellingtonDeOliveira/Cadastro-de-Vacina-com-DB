<?php
    require_once("../model/cadastro.php");
    session_start();
    $cadastro = $_SESSION["cadastro"];
?>

<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/sistema.css">
    <title>Sistema</title>
</head>
<body class="back">
    <div class="content">
        <div class="imagidiv">
            <center>
                <img class="ima1" src="https://digital.saude.ce.gov.br/resource/icones/logoVacinacaoAgenda.svg" alt="Covid 19">
            </center>
        </div>
        <div class="miolo">
            <div class="card center">
                <div>
                    <div class="boaVinda" style="text-align: center;">Seja Bem-vindo(a)!</div>
                    <span class="descri">Aqui você pode acompanhar o resultado da liberação de informações do seu agendamento</span>
                </div><br>
                <div class="nomeUsu" style="color: black;">
                <?php echo $cadastro->getNome();?>
                </div><hr>
                <div class="susUsu" style="font-size: small; letter-spacing: 0.5px; color: black;">
                <?php echo $cadastro->getSus();?>
                </div>
                <div class="destaque" style="text-align: left; font-size: 10pt;">
                    Classificação
                </div>
                <div class="prioridade">
                    <?php
                    $idade = $cadastro->getIdade();
                     if($idade >= 80){
                        echo "1° Fase: acima dos 80 anos";
                     } else if($idade >= 60 && $idade < 80){
                        echo "2° Fase: acima dos 60 anos";
                     } else if($idade >= 40 && $idade < 60){
                        echo "3° Fase: acima dos 40 anos";
                     } else{
                        echo "Fase final: independe a idade";
                     }
                    ?>
                    Quadro de Prioridade
                </div>
            </div>
            <div class="card center">
                <div class="destaque" style="text-align: left; font-size: 10pt;">
                    Atenção
                </div>
                <div class="prioridade" style="text-align: left;">
                    <center> Seu cadastro já está validado!! </center>
                    <p>
                        Seu endereço:
                    </p>
                    <p>
                    <?php echo $cadastro->getEndereco();?>
                    </p>
                    <p>
                        <?php
                        $priori = $cadastro->getComorbidade();
                        if($priori == "1"){
                            echo "Atendimento prioridario ao chegar no ponto de atendimneto";
                        }else{
                            echo "Atendimento normal";
                        }
                        ?>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Feito por Fco. Wellington - Turma 2 de Programação Web</p>
    </div>
</body>
</html>