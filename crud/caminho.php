<?php
include("conexao.php");
include("header.php");
if(empty($_POST["nome"]) || empty($_POST["marca"])) {
    header('Location: adicionar.php');
    exit;
}
$produtos_nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$produtos_marca = mysqli_real_escape_string($conexao,$_POST['marca']);

$query = "insert into produtos (produtos_nome,produtos_marca) values ('{$produtos_nome}','{$produtos_marca}')
";
$result = mysqli_query($conexao,$query);
if($result == 1){
   ?><div class="content"> 
       <a href="index.php">
           <div class="sucesso">
               <h2><?php echo $produtos_nome?> salvo com sucesso!</h2> 
            </div>
        </a>
        
    </div>   
    <?php
}
exit;