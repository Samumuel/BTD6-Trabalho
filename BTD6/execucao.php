<?php

require_once("modelo/Macaco.php");
require_once("modelo/Construcao.php");
require_once("dao/UnidadeDAO.php");
require_once("util/conexao.php");

$conexao = new Conexao();
$con = Conexao::getCon();
//print_r($con);

$opcao = 0; 

do {
    echo "\n-----------CADASTRO DE CLIENTES-------\n";
    echo "1- Cadastrar Macaco\n";
    echo "2- Cadastrar Contrução\n";
    echo "3- Listar Unidades\n";
    echo "4- Buscar Unidades\n";
    echo "5- Excluir Unidades\n";
    echo "0- Sair\n";

    $opcao = readline("Informe opcao: ");
    switch ($opcao) {
        case 1:

            $unidade = new UMacaco();
            $unidade->setNome(readline("Informe o nome do Macaco: "));
            $unidade->setClasse(readline("Informe a classe deste Macaco: "));
            $unidade->setValor(readline("Informe o valor do Macaco: "));
            $unidade->setArea(readline("Informe a área deste Macaco: "));
            $unidade->setAlcance("Informe o alcance deste Macaco: ");

            $BTD6DAO = new  UnidadeDAO();
            $BTD6DAO->inserirUnidade($unidade);

            echo "Macaco cadastrado com sucesso!\n\n";
            break;
        case 2:
            $unidade = new UConstrucao();
            $unidade->setNome(Readline("Informe o Nome da Construção: "));
            $unidade->setClasse(Readline("Informe a Classe da Construção: "));
            $unidade->setValor(Readline("Informe o valor da Construção: "));
            $unidade->setAlcance(Readline("Informe o Alcance da Construção: "));
            $unidade->setFuncao(readline("Informe a Função da Construção: "));

            $BTD6DAO = new UnidadeDAO();
            $BTD6DAO->inserirUnidade($unidade);

            echo "Construção cadastrado com sucesso!\n\n";

            break;
        case 3:
            //buscar os objetos no banco de dados
            $BTD6DAO = new UnidadeDAO();
            $unidade = $BTD6DAO->listarUnidades();

            //exbibir os dados dos objetos
            foreach ($unidades as $u) {
                
                    printf("%d- %s | %s | %s | %s | %s\n",
                $u->getId(), $u->getTipo(), $u->getNome(),
                $u->getValor(), $u->getClasse(), $u->getArea(),
                $u->getAlcance(), $u->getFuncao);
                
            }

            break;
        case 4:
            //buscar cliente pelo ID

            //1- ler o ID

            $id = readline("Informe o ID da Unidade: ");

            //2- Chamar o metodo que retorna o objeto do cliente do banco de dados
            $BTD6DAO = new UnidadeDAO();
            $unidade = $BTD6DAO->buscarPorId($id);

            //3- verificar se o cliente retomar é diferente de null
            //3.1- se for diferente de null, mostrar os dados do cliente
            //3.2- Se for igual a null, mostrar mensagem que o cliente nao foi encontrado

            if($cliente != null){
                echo $cliente; //fazer to_string
            }
            else 
                echo "Cliente não encontrado\n";


            break;
        case 5:
            //exclusao pelo id do cliente

            //1-listar clientes

            $BTD6DAO = new UnidadeDAO();
            $unidades = $BTD6DAO->listarUnidades();

            //exbibir os dados dos objetos
            foreach ($unidades as $u) {
                
                echo $u;
                
            }

            //2- solicitar o id

            $id = readline("informe o id da unidade que deseja excluir: ") ;

            $unidade = $BTD6DAO->buscarPorId($id);
            if($unidade){
            
            //3- chamar o clienteDAO para remover da base de dados

            $BTD6DAO->excluirPorId($id);
            

            //4- Informar que o cliente foi excluido
            echo "Unidade excluido com sucesso";}
            else   
                    echo "\nUnidade não encontrado.\n";
            
            break;
        case 0:
            break;
    }
} while ($opcao != 0);
