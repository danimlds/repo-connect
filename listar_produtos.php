<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
        
    <div class="container" style="margin-top: 40px">
        <h3>Lista de Produtos</h3>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nro Produto</th>
                <th scope="col">Nome Produto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Fornecedor</th>
                </tr>
            </thead>
                <tr>
                    <?php
                        include 'conexao.php';
                        $sql = "SELECT * FROM `estoque`";
                        $busca = mysqli_query($conexao, $sql);

                        while($array = mysqli_fetch_array($busca)) {
                            $id_estoque = $array['id_estoque'];
                            $nroproduto = $array['nroproduto'];
                            $nomeproduto = $array['nomeproduto'];
                            $categoria = $array['categoria'];
                            $quantidade = $array['quantidade'];
                            $fornecedor = $array['fornecedor'];
                    ?>
                <tr>
                    <td><?php echo $nroproduto ?></td>
                    <td><?php echo $nomeproduto ?></td>
                    <td><?php echo $categoria ?></td>
                    <td><?php echo $quantidade ?></td>
                    <td><?php echo $fornecedor ?></td>
                </tr>
                    <?php } ?>

                </tr>
        </table>

    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>