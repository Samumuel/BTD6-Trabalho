<?php

abstract class Unidade {

    protected int $id;

    protected string $nome;

    private string $classe;

    private int $valor;

    private string $alcance;

    public abstract function getTipo();

    public function __toString() {
        return sprintf("%d- %s | %s | %s | %s | %s\n",
                        $this->id, $this->getTipo());
        }

        

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of classe
     */
    public function getClasse(): string
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     */
    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): int
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(int $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of alcance
     */
    public function getAlcance(): string
    {
        return $this->alcance;
    }

    /**
     * Set the value of alcance
     */
    public function setAlcance(string $alcance): self
    {
        $this->alcance = $alcance;

        return $this;
    }
}