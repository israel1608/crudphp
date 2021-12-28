<?php
include("header.php");
?>
<body>
    <div class="content" style="margin-top: 50px;">
        <div class="input">
            <h4 style="padding-bottom: 15px;">Remova um produto</h1>
        <form action="remover.php" method="POST">
            <label for="nome">ID do produto:</label><br>
            <input type="number" id="id_produto" name="id_produto"  min = 1 required><br><hr>
            <input type="submit" id="remover" name="remover" value="Remover"><br>
        </form><br>
        <a href="index.php">Início</a>
        </div>
    </div>
</body>