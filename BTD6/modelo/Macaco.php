<?php 

require_once("Unidade.php");

class UMacaco extends Unidade {
    
    private string $area;

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