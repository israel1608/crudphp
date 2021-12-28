<?php
include("conexao.php");
include("header.php");
if(empty($_POST["id_produto"])) {
    header('Location: remover-itens.php');
    exit;
}
$produtos_id = mysqli_real_escape_string($conexao,$_POST['id_produto']);
$query = "DELETE FROM produtos where produto_id = $produtos_id";
$result = mysqli_query($conexao,$query);
if($result == 1){
    ?> 
    <div class="content"> 
       <a href="remover-itens.php">
           <div class="sucesso">
               <h2>Item removido com sucesso!</h2> 
           </div>
       </a>
    </div>
 <?php
} 
exit;