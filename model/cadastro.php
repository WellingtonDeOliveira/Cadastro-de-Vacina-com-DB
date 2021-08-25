<?php
class Cadastro{
    private $id;
    private $nome;
    private $cpf;
    private $sus;
    private $idade;
    private $comorbidade;
    private $endereco;
    

    /* GETTER */
    public function getId()
    {
        return $this->id;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function getCpf()
    {
        return $this->cpf;
    }
    
    public function getIdade()
    {
        return $this->idade;
    }
    
    public function getSus()
    {
        return $this->sus;
    }
    
    public function getComorbidade()
    {
        return $this->comorbidade;
    }
    
    public function getEndereco()
    {
        return $this->endereco;
    }

    /* SETTER */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function setSus($sus): self
    {
        $this->sus = $sus;

        return $this;
    }

    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function setComorbidade($comorbidade): self
    {
        $this->comorbidade = $comorbidade;

        return $this;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
}
