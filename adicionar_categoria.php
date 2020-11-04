<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        #botao {
            background-color: #FF1168;
            color> #ffffff;
        }
    </style>
</head>
<body>
    

    <div class="container" style="margin-top: 40px; width: 500px">
        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h4>Cadastro de Categoria</h4>
        <form action="inserir_categoria.php" method="post">
            <label>Categoria</label>
            <div class="form-group">
                <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da Categoria" autocomplete="off">
            </div>
            <div style="text-align: right">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>  
</body>
</html>