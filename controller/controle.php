<?php

session_start();
require_once("../model/cadastro.php");
require_once("../model/cadastroDAO.php");

$acao = $_GET["acao"];
$cadastroDAO = new CadastroDAO();

if ($acao == "cadastrar") {
    $nome = $cpf = $sus = $idade = $comorbidade = $endereco = "";
    if (!empty($_POST["name"])) {
        $nome = $_POST["name"];
        $cpf = $_POST["cpf"];
        $sus = $_POST["sus"];
        $idade = $_POST["idade"];
        $comorbidade = $_POST["comorbidade"];
        $endereco = $_POST["endereco"];
        if ($nome == "" || $cpf == "" || $idade == "" || $comorbidade == "" || $endereco == "") {
            echo '<script>alert("Não foi possivel efetuar o seu cadastro!!");</script>';
        } else {
            $cadastro = new Cadastro();
            $cadastro->setNome($nome);
            $cadastro->setCpf($cpf);
            $cadastro->setSus($sus);
            $cadastro->setIdade($idade);
            $cadastro->setComorbidade($comorbidade);
            $cadastro->setEndereco($endereco);
            $cadastroDAO->inserir($cadastro);
            header('Location: ../view/login.php');
        }
    } else {
        echo '<script>alert("Não foi possivel efetuar o seu cadastro!!");</script>';
    }
} else if ($acao == "listar") {
    $_SESSION["cadastros"] = $cadastroDAO->recuperarTodos();
    header('Location: ../view/duvidas.php');
} else if ($acao == "excluir") {
    $id = $_GET["id"];
    $cadastro = new Cadastro();
    $cadastro->setId($id);
    $cadastroDAO->excluir($cadastro);
    header('Location: ../control/controle.php?acao=listar');
} else if ($acao == "recuperar") {
    $cpf = $_POST["fcpf"];
    $cadastro = $cadastroDAO->recuperarPorCpf($cpf);
    $_SESSION["cadastro"] = $cadastro;
    header('Location: ../view/sistema.php');
} else if ($acao == "editar") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $sus = $_POST["sus"];
    $idade = $_POST["idade"];
    $comorbidade = $_POST["comorbidade"];
    $endereco = $_POST["endereco"];
    $cadastro = new Cadastro();
    $cadastro->setId($id);
    $cadastro->setNome($nome);
    $cadastro->setCpf($cpf);
    $cadastro->setSus($sus);
    $cadastro->setIdade($idade);
    $cadastro->setComorbidade($comorbidade);
    $cadastro->setEndereco($endereco);
    $cadastroDAO->atualizar($cadastro);
    header('Location: ../control/controle.php?acao=listar');
}
