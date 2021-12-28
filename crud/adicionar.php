<?php
include"header.php";
?>
<body>
    <div class="content">
        <div class="input">
            <h4 style="padding-bottom: 15px;">Adicione um produto</h1>
        <form action="caminho.php" method="POST">
            <label for="nome">nome do produto:</label><br>
            <input type="text" id="nome" name="nome" required><br>
            <label for="marca">marca:</label><br>
            <input type="text" id="marca" name="marca" required><br><br>
            <input type="submit" id="enviar" name="enviar" value="Salvar">
        </form>
        
        </div>
    </div>
</body>
