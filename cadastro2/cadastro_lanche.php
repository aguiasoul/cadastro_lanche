<?php
    include("conexao.php");

    if(isset($_POST["lanche"])){
            
        $lanche = $_POST["lanche"];
    
        $ingr = $_POST["ingr"];
    
        $preco = $_POST["preco"];

        $mysqli->query("INSERT INTO cadastro_de_lanches (lanche, ingr, preco) values('$lanche', '$ingr', '$preco')") or
            die($mysqlierrno);
            header("Location:cadastro_bebidas.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Lanche</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Css/style.php" />


    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Cadastro de Lanche</h1>
        <form action="" method="post">
                <label for="">Nome do Lanche:</label>
                <input class="form-control" type="text" placeholder="Lanche" name="lanche" required>
                <label for="">Ingredientes:</label>
                <input class="form-control" type="text" placeholder="Ingredientes" name="ingr" required>
                <label for="">Preço:</label>
                <input class="form-control" type="text" placeholder="Preço" name="preco" required>
                
                <input class="form-control btn btn-success" type="submit" value="Cadastrar">
                <input class="form-control btn btn-secondary" type="reset" value="Redefinir">
        </form>
    </div>
</body>

</html>