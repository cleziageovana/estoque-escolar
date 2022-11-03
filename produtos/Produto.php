<?php
class Produto{
    public function cadastrar(){
        $nome_produto = $_POST['nome_produto'];
        $unidade_medida = $_POST['unidade_medida'];
        $data_validade = $_POST['data_validade'];
        $id_nota = $_POST['id_nota'];
        $id_fornecedor = $_POST['id_fornecedor'];
        $id_recurso = $_POST['id_recurso'];

        global $db;

        $sql = "INSERT INTO produtos SET nome_produto = :nome_produto, unidade_medida = :unidade_medida,
        data_validade = :data_validade, id_nota = :id_nota, id_fornecedor = :id_fornecedor, id_recurso = :id_recurso";
        $sql = $db->prepare($sql);
        $sql->bindValue(":nome_produto", $nome_produto);
        $sql->bindValue(":unidade_medida", $unidade_medida );
        $sql->bindValue(":data_validade", $data_validade);
        $sql->bindValue(":id_nota", $id_nota);
        $sql->bindValue(":id_fornecedor", $id_fornecedor);
        $sql->bindValue(":id_recurso", $id_recurso);
        $sql->execute();
        
        // print_r($sql->errorInfo());
        // exit; 
        if($sql) {
            header("Location:listar-produtos.php");
        }
    }
    
    public function listar(){
        global $db;
        $produtos = array();
        $sql = "SELECT * FROM produtos";
        $sql = $db->prepare($sql);
        $sql->execute();
        $produtos = $sql->fetchALL();
        return $produtos;
    }


    public function info_produto($id_produto){
        global $db;

        $id_produto = $_GET['id'];
        $produto = array();

        $sql = "SELECT * FROM produtos WHERE id_produto = :id_produto";
        $sql = $db->prepare($sql);
        $sql->bindValue(":id_produto", $id_produto);
        $sql->execute();
        $produto = $sql->fetch();
        return $produto;

    //   echo "<pre>"; print_r($sql->errorInfo()); exit;
        }

    public function editar(){
        global $db;
        $produto = array();

        $id_produto=$_GET['id'];
        
        $id_produto = $_POST['id_produto'];
        $nome_produto = $_POST['nome_produto'];
        $unidade_medida = $_POST['unidade_medida'];
        $data_validade = $_POST['data_validade'];
        $id_nota = $_POST['id_nota'];
        $id_fornecedor = $_POST['id_fornecedor'];
        $id_recurso = $_POST['id_recurso'];


        $sql = "UPDATE produtos SET  nome_produto = :nome_produto,  
        unidade_medida = :unidade_medida, data_validade = :data_validade,
        id_nota = :id_nota, id_fornecedor = :id_fornecedor, id_recurso = :id_recurso WHERE id_produto = :id";
        // echo $sql;
        $sql = $db->prepare($sql);
        $sql->bindValue(":nome_produto", $nome_produto );
        $sql->bindValue(":unidade_medida", $unidade_medida);
        $sql->bindValue(":data_validade", $data_validade);
        $sql->bindValue(":id_nota", $id_nota);
        $sql->bindValue(":id_fornecedor", $id_fornecedor);
        $sql->bindValue(":id_recurso", $id_recurso);
        $sql->bindValue(":id", $id_produto);
        $sql->execute();
    
        header("Location:listar-produtos.php");

        // echo "<pre>"; print_r($sql->errorInfo()); exit;

    }

    public function excluir(){

    global $db;
    $id_produto=$_GET['id'];
    
    $sql = "DELETE FROM produtos WHERE id_produto = :id";
    $sql = $db->prepare($sql);
    $sql->bindValue(":id", $id_produto);
    $sql->execute();
    $dados = $sql->fetchALL();
    }
}
?>