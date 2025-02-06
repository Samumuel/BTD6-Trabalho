<?php 

require_once("Unidade.php");

class UConstrucao extends Unidade {
    
    private string $funcao;


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