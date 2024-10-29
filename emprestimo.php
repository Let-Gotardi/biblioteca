<?php

$id_cliente = $_POST['id_cliente'];
$id_bibliotecario = $_POST['id_bibliotecario'];
$id__livro = $_POST['id__livro'];
$data_emprestimo = $_POST['data_emprestimo'];
$data_devolucao = $_POST['data_devolucao'];

echo "ID Cliente: ", $id_cliente;
echo "<br>";
echo "ID Bibliotecário: ", $id_bibliotecario;
echo "<br>";
echo "ID Livro: ", $id__livro;
echo "<br>";
echo "Data do Empréstimo: ", $data_emprestimo;
echo "<br>";
echo "Data Prevista de Devolução: ", $data_devolucao;

// Conecta no banco de dados
include "conexao.php";

$sql = "INSERT INTO `emprestimos` (`id_cliente`, `id_bibliotecario`, `id__livro`, `data_emprestimo`, `data_devolucao`) 
    VALUES ('$id_cliente', '$id_bibliotecario', '$id__livro', '$data_emprestimo', '$data_devolucao')";

// Verifique se a variável de conexão $con está correta
if (mysqli_query($con, $sql)) {
    echo "Cadastro realizado com sucesso!";
    echo "<br> <a href='index.html'>voltar</a>";
} else {
    echo "Erro no cadastro: ";
}

?>
