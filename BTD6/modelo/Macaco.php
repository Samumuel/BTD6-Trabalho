<?php

require_once("Unidade.php");

class UMacaco extends Unidade
{

    private string $area;

    public function __toString()
    {
        return sprintf(
            "%d | Tipo: %s | Nome: %s | Classe: %s | Valor: %d | Alcance: %s | Area: %s\n",
            $this->getId(),
            $this->getTipo(),
            $this->getNome(),
            $this->getClasse(),
            $this->getValor(),
            $this->getAlcance(),
            $this->getArea()
        );
    }

    public function getTipo()
    {
        return "Macaco";
    }

    /**
     * Get the value of area
     */
    public function getArea(): string
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }
}
