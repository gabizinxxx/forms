<?php

if(isset($_POST['submit']))
{
    print_r($_POST['name']);
    print_r($_POST['cpf']);
    print_r($_POST['genero']);
    print_r($_POST['idade']);
    print_r($_POST['email']);
    print_r($_POST['senha']);

    include_once('config.php');

    $nome = $_POST['name'];
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">          
    <link rel="stylesheet" href="style.css"><link >
    <title>cadastramento</title>
</head>
<body>
    <body>
        <div class="container">
            <h2>Se cadastre agora</h2>
            <form action="config.php" method="POST">
                <div class="form-group">
                    <label for="Nome">Nome</label>
                    <input type="text" id="Nome" name="name" placeholder="Digite seu nome" autocomplete="family-name" required>
                </div>
                <div class="form-group">
                    <label for="text">CPF</label>
                    <input type="text" id="cpf" name="cpf" placeholder="Ex: 000.000.000-00" autocomplete="off" required>
                </div>

                <p>Sexo</p>
               <div class="mas">
                <input type="radio" id="masc" name="genero" value="masculino" required>
               <label for="masc"><h6>Masculino</h6></label>
               </div>
                <div class="fem">
                    <input type="radio" id="fem" name="genero" value="feminino" required>
               <label for="fem"><h6>Feminino</h6></label>
                </div>
               <div class="other">
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro"><h6>Outro</h6></label>
               </div>

                <div class="form-group">
                    <label for="idade">Idade</label>
                    <input type="date" id="idade" name="idade"  autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"
                    placeholder="Ex: ''InsiraSeuEmail@gmail.com''" autocomplete="on" required>
                </div> 
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Crie uma boa senha" autocomplete="off" required>
                </div>
                 <button type="submit" name="submit" id="submit">Finalizar</button>
    
            </form>
        </div>
        <footer>
        <p>&copy; Cadastro</p>
        </footer>
    </body>
</body>
</html>