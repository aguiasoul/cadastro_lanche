<?php
include("conexao.php");

if(!isset($_SESSION)){
    session_start();
} 

if(isset($_POST["nome"])){
        
    $nome = $_POST["nome"];

    $telefone = $_POST["telefone"];

    $email = $_POST["email"];
    
    $cpf = $_POST["cpf"];

    $senha = $_POST["senha"];

    $rep_senha = $_POST["rep_senha"];

}

if(isset($_POST["senha"])){
    $senha = $_POST["senha"];
    $rep_senha = $_POST["rep_senha"];

    if($senha === $rep_senha){
        $mysqli->query("INSERT INTO cadastro_cliente (nome, telefone, email, cpf, senha) values('$nome', '$telefone', '$email', '$cpf', '$senha')") or
            die($mysqlierrno);
            header("Location:cadastro_lanche.php");
    }else{
        echo "<div class='alert alert-danger' role='alert'>";
        echo "<div>";
    }

  $_SESSION["nome"] = $_POST["nome"];

  $_SESSION["telefone"] = $_POST["telefone"];

  $_SESSION["email"] = $_POST["email"];

  $_SESSION["cpf"] = $_POST["cpf"];

  $_SESSION["senha"] = $_POST["senha"];

    
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta placeholder="" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Css/style.php" />


    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container text-center">
        <h1 class="mt-3">Cadastro</h1>
    </div>
    <div class="container">
        <form action="" method="post">
            <label for="">Nome:</label>
            <input class="form-control" type="text" placeholder="Nome completo" name="nome" required>
            <label for="">Telefone:</label>
            <input class="form-control" type="text" name="telefone" required>
            <label for="">Email:</label>
            <input class="form-control" type="text" placeholder="Ex. marcelo123@gmail.com" name="email" required>
            <label for="">CPF:</label>
            <input class="form-control" type="text" placeholder="Ex. 123.456.789-12" name="cpf" required>
            <label for="">Senha:</label>
            <input class="form-control" type="password" name="senha" required>
            <label for="">Repetir Senha:</label>
            <input class="form-control" type="password" name="rep_senha" required>

            <?php
                if(isset($_POST["senha"])){
            
                if($senha === $rep_senha){
            
                }else{
                    echo "<div class='container text-center mt-3'> <p>Senha Incorreta</p> </div>";
                }
            }
            ?>

            <div class="container">
                <input class="form-control btn btn-success" type="submit" value="Cadastrar">
                <input class="form-control btn btn-secondary" type="reset" value="Redefinir">
            </div>
        </form>

    </div>