<?php
    include("conexao.php");

    if(!isset($_SESSION)){
        session_start();
    } 

    if(isset($_POST["lanche"])){
        
        $lanche = $_POST["lanche"];

        $preco = $_POST["preco"];

        $_SESSION["lanche"] = $_POST["lanche"];

        $_SESSION["preco"] = $_POST["preco"];

        $mysqli->query("INSERT INTO cadastro_lanche (lanche, preco) values('$lanche', '$preco')") or
            die($mysqlierrno);

    }

?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Lanches</title>

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
        <h1 class="text-center">Cadastro de Lanches</h1>

        <div class="card float-start  " style="width: 25rem; border: solid white 1px; ">
            <img src="img/misto.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" name="lanche">Misto Quente </h5> <h5><r1  name="preco">R$10,00</r1 >
                </h5>
                <p class="card-text">2 fatias de presunto magro <br> 2 fatias de pão de forma <br> 2 fatias de queijo
                    prato <br> 2 colheres (chá) de margarina</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>

        <div class="card float-start" style="width: 25rem; border: solid white 1px;">
            <img src="img/xsalada.avif" class="card-img-tops" alt="...">
            <div class="card-body">
              <h5 class="card-title" name="lanche">X-Salada </h5> <h5><r1 name="preco">R$17,99</r1 > </h5>
              <p class="card-text">500g de carne moída (pode ser uma mistura de carne bovina e suína) <br>
                1 cebola picada <br>
                1 envelope de Creme de Cebola <br>
                1 colher de mostarda dijon <br>
                2 colheres de ketchup <br>
                1 ovo </p>
              <input class="btn btn-primary" type="submit" value="Comprar"
                
                <?php
                     if(isset($_POST["lanche"])){
                        $lanche.on("click");
                        
                     }

                ?>

              >
            </div>
          </div>

          <div class="card" style="width: 25rem; border: solid white 1px;">
            <img src="img/xbacon.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" name="lanche">X-Bacon </h5> <h5> <r1 name="preco">R$12,29</r1 ></h5>
              <p class="card-text">1 hambúrguer bovino Perdigão <br>
                1 pão de hambúrguer <br>
                1 fatias de queijo muçarela <br>
                4 fatias de bacon Perdigão</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>

    </div>
</body>

</html>