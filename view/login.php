<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login - Vacina</title>
</head>
<body class="back">
    <div class="content">
        <div class="imagidiv">
            <center>
                <img class="ima1" src="https://digital.saude.ce.gov.br/resource/icones/logoVacinacaoAgenda.svg" alt="Covid 19">
            </center>
        </div>
        <div class="miolo">
            <div class="texto">
                Para acessar o sistema para
                <b>Agendamento de Vacinação para COVID-19</b>
                , preencha corretamente os campos abaixo, digite o
                <span>"CPF"</span>
                que você usou no ato do seu cadastro.
            </div>
            <form action="../controller/controle.php?acao=recuperar" method="POST">
                <div class="dados center">
                    <label id="label" for="login">Informe sua CPF</label>
                    <input type="text" name="fcpf" placeholder="Digite aqui..."
                    value="<?php echo isset($_SESSION["fcpf"])?$_SESSION["fcpf"]:""; ?>">
                </div>
                <div class="press center">
                    <div class="espaco"></div>
                    <div class="div">
                        <button class="entrar" type="submit">Entrar</button>
                    </div>
                    <div class="div">
                        <button class="cadastro" type="button" onclick="document.location='cadastro.php'">Fazer Cadastro</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="footer">
            <p>Feito por Fco. Wellington - Turma 2 de Programação Web</p>
        </div>
</body>

</html>