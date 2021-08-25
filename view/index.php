<!DOCTYPE html>
<html lang="pt br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Vacina - Covid</title>
</head>
<body class="back">
    <div class="content">
        <div class="imagidiv">
            <center>
                <img class="ima1" src="https://digital.saude.ce.gov.br/resource/icones/logoVacinacaoAgenda.svg"
                    alt="Covid 19">
            </center>
        </div>
        <div class="miolo">
            <div class="card center">
                <div class="texttitulo">
                    Fique Atento
                </div>
                <div class="txt">
                    Bem-vindo ao cadastro Estadual Único para vacinação da COVID-19 no Ceará.
                    <br>
                    O novo sistema tem como objetivo ajudar a organizar e otimizar o plano de
                    imunização da população do Ceará com inovação e eficiência. Dessa forma, os
                    municípios que aderirem possuem a possibilidade:
                </div>
                <div class="txt">
                    <ul class="lista">
                        <li>Acompanhar o cadastro da sua população nos grupos prioritários</li>
                        <li>Agendar a vacinação dos seus cidadãos</li>
                        <li>Dar transparência as filas de agendamento e cidadãos vacinados</li>
                        <li>Envio da aplicação das doses diretamente para o SIPNI</li>
                    </ul>
                </div>
                <div class="txt">
                    Para o cidadão significa facilidade do cadastro através da ampliação dos
                    canais online, além de mais informação e maior segurança na hora de receber
                    a sua vacina.
                </div>
            </div>
            <div class="buttons center">
                <div class="espacoTopo"></div>
                <div class="div">
                    <button class="buttonC" onclick="document.location='login.php'">Já tenho cadastro</button>
                </div>
                <div class="div">
                    <button class="buttonM" onclick="document.location='cadastro.php'">Ainda não tenho
                        cadastro</button>
                </div>
                <div class="div">
                    <button class="buttonB" onclick="document.location='../controller/controle.php?acao=listar' ">Dúvidas frequentes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Feito por Fco. Wellington - Turma 2 de Programação Web</p>
    </div>
</body>

</html>