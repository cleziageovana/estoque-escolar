<?php

require_once "config.php";
require_once "./produtos/Produto.php";

$produto = new Produto();
$produtos = $produto->listar();
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


    <div class="tabela">
                <fieldset>
                    <legend>Lista de Registros</legend>
                    </hr>
                    <table class="table" >
                        <thrad>
                            <th> Nome Produto</th>
                            <th> Unidade Medida</th>
                            <th> Data Validade</th>
                            <th> id Nota</th>
                            <th> id Fornecedor</th>
                            <th> id Recurso</th>
                            <th> Opeções</th>
                        </thead>

                        <tbody>
                        <?php foreach($produtos as $produto): ?>
                                <tr>
                                        <td><?php echo $produto['nome_produto']?></td>

                                        <td><?php echo $produto['unidade_medida']?></td>

                                        <td><?php echo $produto['data_validade']?></td>

                                        <td><?php echo $produto['id_nota']?></td>

                                        <td><?php echo $produto['id_fornecedor']?></td>
                                        
                                        <td><?php echo $produto['id_recurso']?></td>

                                        <td>
                                            <a href="excluir-produtos.php?id=<?php echo $produto['id_produto'] ?>" class="btn btn-danger"> Excluir </a>
                                            <a href="editar-produtos.php?id=<?php echo $produto['id_produto'] ?>" class="btn btn-warning"> Editar </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
    </div>

    
</body>
</html>