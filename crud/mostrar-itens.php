<?php
session_start();
include("header.php");
include("conexao.php");

?>
<body>
    <div class="itens">
    <h1 style="text-align: center;">lista de produtos</h1>
    <?php
    $pagina_atual = filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1 ;
    //setar a quantidade de itens por página
    $qnt_result_pg = 5;
    // calacular o inicio vizualização
    $inicio = ($qnt_result_pg * $pagina)- $qnt_result_pg;
    $comando_produtos = "SELECT * FROM produtos LIMIT $inicio,$qnt_result_pg";
    $resultado_usuarios = mysqli_query($conexao,$comando_produtos);
    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
       echo "ID: " .$row_usuario ['produto_id']."<br>";
       echo "NOME: " .$row_usuario ['produtos_nome']."<br>";
       echo "MARCA: " .$row_usuario ['produtos_marca']."<br><hr>";
   }
   $comando_pg = "SELECT COUNT(produto_id) AS num_result FROM produtos";
   $resultado_pg = mysqli_query($conexao,$comando_pg);
   $row_pg = mysqli_fetch_assoc($resultado_pg);
   //echo $row_pg['num_result'];
   $quantidade_pg = ceil($row_pg['num_result']/$qnt_result_pg);
   //limitar links antes depois
   $max_links = 1 ;
   echo "<a href='mostrar-itens.php?pagina=1'>Primeira</a>";
   for($pag_ant = $pagina - $max_links ; $pag_ant <= $pagina - 1 ; $pag_ant++){
       if($pag_ant >=1){
            echo "<a href='mostrar-itens.php?pagina=$pag_ant'> $pag_ant </a>";
        }
    }
   echo " $pagina ";
   for($pag_post = $pagina + 1 ; $pag_post <= $pagina + $max_links ; $pag_post++){
        if($pag_post <= $quantidade_pg){
            echo "<a href='mostrar-itens.php?pagina=$pag_post'> $pag_post </a>";
        }
    }
   echo "<a href='mostrar-itens.php?pagina=$quantidade_pg'>Ultima</a>"."<br>";
   echo "<a href='index.php'>Início</a>";
    ?>
    </div>
</body>