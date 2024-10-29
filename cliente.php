<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

echo "Nome: ", $nome;
echo "<br>";
echo "E-mail: ", $email;
echo "<br>";
echo "Telefone: ", $telefone;
echo "<br>";
echo "Endereço: ", $endereco;


// Conecta no banco de dados
include "conexao.php";

$sql = "INSERT INTO `clientes` (`nome`, `email`, `telefone`, `endereco`) 
    VALUES ('$nome', '$email', '$telefone', '$endereco')";

// Verifique se a variável de conexão $con está correta
if (mysqli_query($con, $sql)) {
    echo "Cadastro realizado com sucesso!";
    echo "<br> <a href='index.html'>voltar</a>";
} else {
    echo "Erro no cadastro " ; 
}

 ?>

