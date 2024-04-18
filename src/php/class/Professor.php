<?php 

class Professor {

    private string $nome;
    private string $email;
    private string $senha;
    private string $endereço;
    private string $idade;

    public function __construct($nome, $email, $senha, $endereço, $idade)
    {
        $this-> nome = $nome;
        $this-> email = $email;
        $this-> senha = $senha;
        $this-> endereço = $endereço;
        $this-> idade = $idade;
    }
  
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of endereço
     */ 
    public function getEndereço()
    {
        return $this->endereço;
    }

    /**
     * Set the value of endereço
     *
     * @return  self
     */ 
    public function setEndereço($endereço)
    {
        $this->endereço = $endereço;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }
}