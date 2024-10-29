<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta </title>
    <link rel="stylesheet" href="consulta.css">
</head>
<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3176/3176107.png">
<body>
  <fieldset>
    <h1>Consulta</h1><br>
    <a href="index.html">Voltar para página inicial</a><br><br>
    <table>
        <tr>
            <th>Id do Cliente</th>           
            <th>Id Bibliotecario</th>
            <th>Id do Livro</th>
            <th>Data do Emprestimo</th>
            <th>Data Prevista para Devoluçao</th>
        </tr>
        </fieldset>
        <tbody>
             <?php 
            include "conexao.php";
            $sql = "SELECT * FROM emprestimos";
            $dados = mysqli_query($con, $sql);

            while ($linha = mysqli_fetch_array($dados)){
                
                $id_cliente = $linha['id_cliente'];
                $id_bibliotecario = $linha['id_bibliotecario'];
                $id__livro = $linha['id__livro'];
                $data_emprestimo = $linha['data_emprestimo'];
                $data_devolucao = $linha['data_devolucao'];

                echo "<tr>
                    <td>$id_cliente</td>
                    <td>$id_bibliotecario</td>
                    <td>$id__livro</td>
                    <td>$data_emprestimo</td>
                    <td>$data_devolucao</td>
                </tr>";
            } 
            ?>
          
        </tbody>
    </table>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
</body>
</html>


