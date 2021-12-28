<?php
 $comando_pg = "SELECT COUNT(produto_id) AS num_result FROM produtos";
 $resultado_pg = mysqli_query($conexao,$comando_pg);
 $row_pg = mysqli_fetch_assoc($resultado_pg);
 $comando_ult = "SELECT produtos_nome FROM produtos WHERE produto_id=(SELECT max(produto_id) FROM produtos)";
 $result_ult = mysqli_query($conexao,$comando_ult);
 $row_ult = mysqli_fetch_assoc($result_ult);
 $ultimo = $row_ult['produtos_nome'];

?>