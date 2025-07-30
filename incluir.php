<?php
include 'config.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_produto = $_POST['nome_produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade_estoque = $_POST['quantidade_estoque'];
    $foto = $_POST['foto'];

    $sql = "UPDATE produto SET 
            nome_produto = '$nome_produto', 
            descricao = '$descricao', 
            preco = $preco, 
            quantidade_estoque = $quantidade_estoque, 
            foto = '$foto' 
            WHERE idProduto = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} else {
    $sql = "SELECT * FROM produto WHERE idProduto = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <title>Editar Produto</title>
</head>

<body>
    <h1>Editar Produto</h1>
    <form method="post">
        <label>nome_produto:</label><br>
        <input type="text" name="nome_produto" value="<?php echo $row['nome_produto']; ?>" required><br>
        <label>Descrição:</label><br>
        <input type="text" name="descricao" value="<?php echo $row['descricao']; ?>"><br>
        <label>Preço:</label><br>
        <input type="number" step="0.01" name="preco" value="<?php echo $row['preco']; ?>" required><br>
        <label>Quantidade em Estoque:</label><br>
        <input type="number" name="quantidade_estoque" value="<?php echo $row['quantidade_estoque']; ?>" required><br>
        <label>foto:</label><br>
        <input type="text" name="foto" value="<?php echo $row['foto']; ?>"><br>
        <input type="submit" value="Salvar">
    </form>
    <a href="index.php">Voltar</a>
</body>

</html>

<?php
$conn->close();
?>