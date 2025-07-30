<?php
include 'config.php';

// Selecionar dados da tabela Produto
$sql = "SELECT * FROM produto";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <title>Produtos da Lojinha</title>
</head>

<body>
  <h1>Lista de Produtos da Lojinha</h1>
  <a href="adicionar.php">Adicionar Produto</a>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Foto</th>
      <th>Ações</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
                    <td>" . $row["idProduto"] . "</td>
                    <td>" . $row["nome_produto"] . "</td>
                    <td>" . $row["descricao"] . "</td>
                    <td>" . $row["preco"] . "</td>
                    <td>" . $row["quantidade_estoque"] . "</td>
                    <td>" . $row["foto"] . "</td>
                    <td>
                        <a href='incluir.php?id=" . $row["idProduto"] . "'>Editar</a>
                        <a href='excluir.php?id=" . $row["idProduto"] . "'>Excluir</a>
                    </td>
                </tr>";
      }
    } else {
      echo "<tr><td colspan='9'> Produto não encontrado</td></tr>";
    }
    ?>
  </table>
</body>

</html>

<?php
$conn->close();
?>