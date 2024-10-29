<?php

$nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 $telefone = $_POST['telefone'];

echo "Nome: ", $nome;
echo "<br>";
echo "E-mail: ", $email;
echo "<br>";
echo "Senha: ", $senha;
echo "<br>";
echo "Telefone: ", $telefone;

// Conecta no banco de dados
include "conexao.php";

$sql = "INSERT INTO `bibliotecario` (`nome`, `email`, `senha`, `telefone`) 
    VALUES ('$nome', '$email', '$senha', '$telefone')";

// Verifique se a variável de conexão $con está correta
if (mysqli_query($con, $sql)) {
    echo "Cadastro realizado com sucesso!";
    echo "<br> <a href='index.html'>voltar</a>";
} else {
    echo "Erro no cadastro " ; 
}

 ?>