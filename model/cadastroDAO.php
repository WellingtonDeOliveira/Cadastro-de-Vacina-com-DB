<?php

require_once("conexao.php");
require_once("cadastro.php");

class CadastroDAO{
    
    public $connection;

    public function getConnection(){
        if(is_null($this->connection)){
            $this->connection = new Conexao();
        }
        return $this->connection;
    }

    public function inserir(Cadastro $cadastro){
        $conn = $this->getConnection()->connectToDatabase();
        $nome = $cadastro->getNome();
        $cpf = $cadastro->getCpf();
        $sus = $cadastro->getSus();
        $idade = $cadastro->getIdade();
        $comorbidade = $cadastro->getComorbidade();
        $endereco = $cadastro->getEndereco();

        $query = "INSERT INTO dbusuarios(nome, cpf, sus, idade, comorbidade, endereco) 
        VALUES('$nome', '$cpf', '$sus', '$idade', '$comorbidade', '$endereco')";
        $r = mysqli_query($conn, $query);
        if(!$r){
            die("Erro ao inserir");
        }else{
            echo "Insert realizado com sucesso";
        }

        $this->connection->closeConnection();
    }

    public function atualizar(Cadastro $cadastro){
        $conn = $this->getConnection()->connectToDatabase();
        $id = $cadastro->getId();
        $nome = $cadastro->getNome();
        $cpf = $cadastro->getCpf();
        $sus = $cadastro->getSus();
        $idade = $cadastro->getIdade();
        $comorbidade = $cadastro->getComorbidade();
        $endereco = $cadastro->getEndereco();

        $query = "UPDATE dbusuarios SET nome = '$nome', cpf = '$cpf', sus = '$sus', idade = '$idade'
        comorbidade = '$comorbidade', endereco = '$endereco' WHERE id = '$id'";
        $r = mysqli_query($conn, $query);
        if(!$r){
            die("Erro ao atualizar");
        }else{
            echo "Update realizado com sucesso";
        }

        $this->connection->closeConnection();
    }

    public function excluir(Cadastro $cadastro){
        $conn = $this->getConnection()->connectToDatabase();
        $id = $cadastro->getId();

        $query = "DELETE FROM dbusuarios WHERE id = $id";
        $r = mysqli_query($conn, $query);
        if(!$r){
            die("Erro ao excluir");
        }else{
            echo "Delete realizado com sucesso";
        }

        $this->connection->closeConnection();
    }

    public function recuperarTodos(){
        $conn = $this->getConnection()->connectToDatabase();
        
        $query = "SELECT * FROM dbusuarios";
        $r = mysqli_query($conn, $query);
        if(!$r){
            die("Erro ao selecionar");
        }else{
            $cadastros = array();
            while($row = mysqli_fetch_array($r)){
                $cadastro = new Cadastro();
                $cadastro->setId($row["id"]);
                $cadastro->setNome($row["nome"]);
                $cadastro->setCpf($row["cpf"]);
                $cadastro->setSus($row["sus"]);
                $cadastro->setIdade($row["idade"]);
                $cadastro->setComorbidade($row["comorbidade"]);
                $cadastro->setEndereco($row["endereco"]);
                array_push($cadastros, $cadastro);
            }
            return $cadastros;
        }

        $this->connection->closeConnection();
    }
    
    public function recuperarPorNome($nome){
        $conn = $this->getConnection()->connectToDatabase();
        $query = "SELECT * FROM dbusuarios WHERE nome LIKE '%$nome%'";
        $r = mysqli_query($conn, $query);
        if (!$r){
            die("Erro ao efetuar select");
        }else{
            $cadastros = array();
            while ($row = mysqli_fetch_array($r)){
                $cadastro = new Cadastro();
                $cadastro->setId($row["id"]);
                $cadastro->setNome($row["nome"]);
                $cadastro->setCpf($row["cpf"]);
                $cadastro->setSus($row["sus"]);
                $cadastro->setIdade($row["idade"]);
                $cadastro->setComorbidade($row["comorbidade"]);
                $cadastro->setEndereco($row["endereco"]);
                array_push($cadastros, $cadastro);
            }
            return $cadastros;
        }
        $this->getConnection()->closeConnection();
        return null;
    }
    
     public function recuperarPorCpf($cpf){
        $conn = $this->getConnection()->connectToDatabase();
        $query = "SELECT * FROM dbusuarios WHERE cpf = $cpf";
        $r = mysqli_query($conn, $query);
        if (!$r){
            die("Erro ao efetuar select");
        }else{
            while ($row = mysqli_fetch_array($r)){
                $cadastro = new Cadastro();
                $cadastro->setId($row["id"]);
                $cadastro->setNome($row["nome"]);
                $cadastro->setCpf($row["cpf"]);
                $cadastro->setSus($row["sus"]);
                $cadastro->setIdade($row["idade"]);
                $cadastro->setComorbidade($row["comorbidade"]);
                $cadastro->setEndereco($row["endereco"]);
            }
            return $cadastro;
        }
        $this->getConnection()->closeConnection();
        return null;
    }
}
?>