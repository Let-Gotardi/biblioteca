<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta </title>
    <link rel="stylesheet" href="consulta.css">
</head>
<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3176/3176107.png">
<body><fieldset>
    <h1>Consulta</h1><br>
    <a href="index.html">Voltar para página inicial</a><br><br>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Ano de Publicação</th>
            <th>Gênero</th>
            <th>Quantidade</th>
            <th>ISBN</th>
            <th>Disponível</th>
            
        </tr>
        </fieldset>
        <tbody>
             <?php 
            include "conexao.php";
            $sql = "SELECT * FROM livro";
            $dados = mysqli_query($con, $sql);

            while ($linha = mysqli_fetch_array($dados)){
                
                $titulo = $linha['titulo'];
                $autor = $linha['autor'];
                $editora = $linha['editora'];
                $ano_publicacao = $linha['ano_publicacao'];
                $genero = $linha['genero'];
                $quantidade = $linha['quantidade'];
                $isbn = $linha['isbn'];
                $disponivel = $linha['disponivel'] ; 
    

                echo "<tr>
                    <td>$titulo</td>
                    <td>$autor</td>
                    <td>$editora</td>
                    <td>$ano_publicacao</td>
                    <td>$genero</td>
                    <td>$quantidade</td>
                    <td>$isbn</td>
                    <td>$disponivel</td>
                
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


