<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano_publicacao = $_POST['ano_publicacao'];
$genero = $_POST['genero'];
$quantidade = $_POST['quantidade'];
$isbn = $_POST['isbn'];
$disponivel= $_POST['disponivel'];

echo "Ttitulo: ", $titulo;
echo "<br>";
echo "Autor: ", $autor;
echo "<br>";
echo "Editora: ", $editora;
echo "<br>";
echo "Ano de publicação: ", $ano_publicacao;
echo "<br>";
echo "Genero: ", $genero;
echo "<br>";
echo "Quantidade: ", $quantidade;
echo "<br>";
echo "ISBN: ", $isbn;
echo "<br>";
echo "Disponivel: ", $disponivel;



// Conecta no banco de dados
include "conexao.php";

$sql = "INSERT INTO `livro` (`titulo`, `autor`, `editora`, `ano_publicacao`, `genero`, `quantidade`, `isbn`, `disponivel`) 
    VALUES ('$titulo', '$autor', '$editora', '$ano_publicacao', '$genero', '$quantidade', '$isbn', '$disponivel')";

// Verifique se a variável de conexão $con está correta
if (mysqli_query($con, $sql)) {
    echo "Cadastro realizado com sucesso!";
    echo "<br> <a href='index.html'>voltar</a>";
} else {
    echo "Erro no cadastro " ; 
}

 ?>