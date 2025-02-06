<?php

require_once("Unidade.php");

class UConstrucao extends Unidade
{

    private string $funcao;


    public function __toString()
    {
        return sprintf(
            "%d | Tipo: %s | Nome: %s | Classe: %s | Valor: %d | Alcance: %s | Função: %s\n",
            $this->getId(),
            $this->getTipo(),
            $this->getNome(),
            $this->getClasse(),
            $this->getValor(),
            $this->getAlcance(),
            $this->getFuncao()
        );
    }


    public function getTipo()
    {
        return "Contrução";
    }

    /**
     * Get the value of funcao
     */
    public function getFuncao(): string
    {
        return $this->funcao;
    }

    /**
     * Set the value of funcao
     */
    public function setFuncao(string $funcao): self
    {
        $this->funcao = $funcao;

        return $this;
    }
}
