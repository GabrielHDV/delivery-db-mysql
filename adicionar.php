<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_produto = $_POST['nome_produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade_estoque = $_POST['quantidade_estoque'];
    $foto = $_POST['foto'];

    $sql = "INSERT INTO produto (nome_produto, descricao, preco, quantidade_estoque, foto )
            VALUES ('$nome_produto', '$descricao', $preco, $quantidade_estoque, '$foto')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <title>Adicionar Produto</title>
</head>

<body>
    <h1>Adicionar Produto</h1>
    <form method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome_produto" required><br>
        <label>Descrição:</label><br>
        <input type="text" name="descricao"><br>
        <label>Preço:</label><br>
        <input type="number" step="0.01" name="preco" required><br>
        <label>Quantidade em Estoque:</label><br>
        <input type="number" name="quantidade_estoque" required><br>
        <label>Foto:</label><br>
        <input type="text" name="foto"><br>
        <input type="submit" value="Salvar">
    </form>
    <a href="index.php">Voltar</a>
</body>

</html>

<?php
$conn->close();
?>