<?php

require_once "./config.php";
require_once "./produtos/Produto.php";
require_once "./fornecedores/Fornecedor.php";


$produto = new Produto();
$id_produto = $_GET['id'];
$produtos = $produto->info_produto($id_produto);
// print_r($produtos);
if (isset($_POST['id_produto'])) {
    $produto->editar($id_produto);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estiloproduto.css">
    <title>Entrada</title>
</head>
<body>

    <div class="menu">  
        <?php require_once "./menu.php";?>
    </div>  


    <div class="fundo">           
            
            <div class="container">
                <fieldset>
                    <legend> Editar Produto </legend>
                    <form method="POST">
                        <div class="row">
                            <label>Nome Produto</label>
                            <input type="text" class="form-control" name="nome_produto" value="<?php echo $produtos['nome_produto']?>"/>

                            <label>Unidade Medida</label>
                            <input type="text" class="form-control" name="unidade_medida" value="<?php echo $produtos['unidade_medida']?>"/>

                            <label>Data Validade</label>
                            <input type="text" class="form-control" name="data_validade" value="<?php echo $produtos['data_validade']?>"/> 

                            <label>id Nota</label>
                            <input type="number" class="form-control" name="id_nota" value="<?php echo $produtos['id_nota']?>"/>
                            
                            <label>Fornecedor</label>
                            <select class="form-control" name="id_fornecedor" value="<?php echo $produtos['id_fornecedor']?>"> 
                                <option value="">Selecione</option>
                                <?php foreach($fornecedores as $fornecedor):?>
                                <option value="<?php echo $fornecedor['id_fornecedor'] ?>"><?php echo $fornecedor['nome_fornecedor'] ?></option>

                                <?php endforeach; ?>    
                            </select>
                         
                            <label>id Recurso</label>
                            <input type="number" class="form-control" name="id_recurso" value="<?php echo $produtos['id_recurso']?>"/>

                            <input type="hidden" name="id_produto" value="<?php echo $id_produto['id_produto'] ?>"/>


                            <button type="submit" class="btn btn-success">Atualizar</button>
                        </div>    
                    </form>
                </fieldset>
            </div> 

        </div>


    
</body>
</html>