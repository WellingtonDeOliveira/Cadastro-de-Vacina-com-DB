<!DOCTYPE html>
<html lang="pt br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/formulario.css">
    <title>Cadastro - Vacina</title>
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
            <form action="../controller/controle.php?acao=cadastrar" method="POST">
                <div class="part1 center">
                    <label for="fname">Seu Nome</label><small> *Obrigatorio</small>
                    <input type="text" name="name" placeholder="Digite aqui...">

                    <label for="fcpf">Sua CPF</label><small> *Obrigatorio</small>
                    <input type="text" name="cpf" placeholder="Digite aqui...">

                    <label for="fsus">Seu Cartão SUS</label><small class="opcional"> *Opcional</small>
                    <input type="text" name="sus" placeholder="Digite aqui...">
                </div>
                <div class="part2 center">
                    <label for="fidade">Sua idade</label><small> *Obrigatorio</small>
                    <input type="text" name="idade" placeholder="Digite aqui...">

                    <label for="fcomorbidade">Possui Comorbidade?</label><small> *Obrigatorio</small><br><br>
                    <input type="radio" name="comorbidade" value="1">
                    <label for="fcomorbidadeS">Sim</label>
                    <input type="radio" name="comorbidade" value="0">
                    <label for="fcomorbidadeN">Não</label><br><br>

                    <label for="fsus">Seu Endereço</label><small> *Obrigatorio</small>
                    <input type="text" name="endereco" placeholder="Digite aqui...">
                </div>
                <div class="baixo">
                    <a class="voltar" href="index.php">Voltar</a>
                    <button class="proximo" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
        <div class="footer">
            <p>Feito por Fco. Wellington - Turma 2 de Programação Web</p>
        </div>
</body>

</html>