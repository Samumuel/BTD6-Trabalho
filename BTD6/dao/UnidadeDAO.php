<?php

require_once("modelo/Unidade.php");
require_once("modelo/Macaco.php");
require_once("modelo/Construcao.php");

require_once("util/Conexao.php");

class UnidadeDAO
{

    public function inserirUnidade(Unidade $unidade)
    {


        $sql = "INSERT INTO btd6 (tipo, nome, classe, valor, alcance, area, funcao)
                VALUES
                (?,?,?,?,?,?,?)";

        $con = Conexao::getCon();

        $stm = $con->prepare($sql);
        if ($unidade instanceof UMacaco) {
            $stm->execute(array(
                $unidade->getTipo(),
                $unidade->getNome(),
                $unidade->getClasse(),
                $unidade->getValor(),
                $unidade->getAlcance(),
                $unidade->getArea(),
                null
            ));
        } elseif ($unidade instanceof UConstrucao) {

            $stm->execute(array(
                $unidade->getTipo(),
                $unidade->getNome(),
                $unidade->getClasse(),
                $unidade->getValor(),
                $unidade->getAlcance(),
                null,
                $unidade->getFuncao()
            ));
        }
    }

    public function listarUnidades()
    {
        $sql = "SELECT * FROM btd6";

        $con = Conexao::getCon();

        $stm = $con->prepare($sql);
        $stm->execute();
        $registros = $stm->fetchAll();

        $unidades = $this->mapUnidades($registros);
        return $unidades;
    }

    public function buscarPorId(int $idUnidade)
    {
        $con = Conexao::getCon();

        $sql = "SELECT * FROM btd6  WHERE id = ?";

        $stm = $con->prepare($sql);
        $stm->execute([$idUnidade]);

        $registros = $stm->fetchAll();

        $unidades = $this->mapUnidades($registros);

        if (count($unidades) > 0) {
            return $unidades[0];
        } else
            return null;
    }

    public function excluirPorId(int $idUnidade)
    {
        $con = Conexao::getCon();

        $sql = " DELETE FROM btd6 WHERE id = ?";

        $stm = $con->prepare($sql);
        $stm->execute([$idUnidade]);
    }

    private function mapUnidades(array $registros)
    {
        $unidades = array();

        foreach ($registros as $reg) {
            $unidades = null;
            if ($reg['tipo'] == 'Macaco') {
                $unidade = new UMacaco();
                $unidade->setNome($reg['nome']);
                $unidade->setClasse($reg['classe']);
            } else {
                $unidade = new UConstrucao();
                $unidade->setNome($reg['nome']);
                $unidade->setClasse($reg['classe']);
            }
            $unidade->setId($reg['id']);
            $unidade->setValor($reg['valor']);
            $unidade->setAlcance($reg['alcance']);
            $unidade->setArea($reg['area']);
            array_push($unidades, $unidade);
        }

        return $unidades;
    }
}
