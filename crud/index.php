<?php 
    include "header.php";
    include "conexao.php";
    include "functions.php";
?>

<body>
    <div class="row">
        <a class="col-sm-4 azul" href="adicionar.php">
        <div >
            <div>
                <h1>Adicionar produtos</h1>
                <span>Último produto adicionado: <?php echo $ultimo?></span>
            </div>
        </div>
        </a> 
        <a class="col-sm-4 verde" href="mostrar-itens.php">
        <div>
            <div>
                <h1>Mostrar produtos</h1>
                <span>total de itens: <?php echo $row_pg['num_result'];?></span>
            </div>
        </div>
        </a>
        <a class="col-sm-4 vermelho" href="remover-itens.php">
        <div>
            <h1>Remover produtos</h1>
            <span>Último produto removido : </span>
        </div>
        </a>
    </div>
        <footer>
            <div class="rodape">
                <ul style="list-style: none;">
                    <li><a href="#">Trabalhe conosco</a></li>
                    <li>4002-8922</li>
                    <li>guarda_produtos@mail.com</li>
                </ul>
            </div>
        </footer>
</body>
