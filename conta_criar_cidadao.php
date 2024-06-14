<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "referencias.php"?>
</head>

<body>

    <form method="post">
        <div class="container">
            <div class="row">

                <?php require "cabecalho_pagina.php" ?>

                <div class="col-md-12">
                    <h1 style="color: #278C40;">Criando</h1>
                </div>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="nome" placeholder="Informe o seu nome" />
                </div>

                <div class="col-md-6">
                    <input type="email" class="form-control"  name="email" placeholder="E-mail para acesso" />
                </div>

                <div class="col-md-6">
                    <input type="password" class="form-control"  name="email" placeholder="Senha para acesso" />
                </div>

            </div>

            <div class="row">
                <div class="col-md-12" style="text-align: left;">
                    <input type="submit" class="btn btn-success" value="Criar conta">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="text-align: left;">
                    <input formaction="index.php" type="submit" class="btn btn-danger" value="Voltar">
                </div>
            </div>

        </div>
    </form>

</body>
</html>