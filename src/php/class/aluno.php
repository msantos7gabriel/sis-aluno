<?php

class aluno
{

    private $nome;
    private $endereco;
    private $senha;
    private $idade;


    // Construtor
    public function __construct($nome, $endereco, $senha, $idade)
    {
        $this->setNome(strtolower($nome));
        $this->setEndereco($endereco);
        $this->setSenha($senha);
        $this->setIdade($idade);
    }

    // Métodos Especiais

    /**
     * Get the value of nome
     */
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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

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
