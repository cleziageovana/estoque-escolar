<?php
require_once "config.php";

?>


<div class="dropdown">
    <!-- BOTAO PRODUTOS-->
        <button class="btn btn-success btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="<?php echo $url ?>cad_produtos.php" class="botao-menu">Novo*</a></li>
            <li><a class="dropdown-item" href="<?php echo $url ?>listar-produtos.php" class="botao-menu">Listar</a></li>
        </ul>
<!-- FIM BOTAO PRODUTOS-->

</div>

<div class="dropdown">

<button class="btn btn-success btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fornecedores
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="<?php echo $url ?>fornecedor.php" class="botao-menu">Cadastrar</a></li>

            <li><a class="dropdown-item" href="<?php echo $url ?>lista-fornecedor.php" class="botao-menu">Lista</a></li>
        </ul>

</div>