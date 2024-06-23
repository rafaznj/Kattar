<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "referencias.php" ?>
</head>
<body>

<div class="container">
        <form method="post">

            <div id="entrar">
                <div class="container">

                    <div class="row">
                        <?php require "cabecalho_pagina.php" ?>
                        
                        <div class="col-md-12">
                            <h1 style="color: #278C40; font-weight: bold;">Entrando na conta</h1>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="E-mail ou número de telefone">
                        </div>
                
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="CNPJ da cooperativa">
                        </div>
                   
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Senha de acesso">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12" style="text-align: left;">
                            <input type="submit" class="btn btn-success" formaction="" value="Entrar">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12" style="text-align: left;">


                            <input formaction="index.php" type="submit" class="btn btn-danger" value="Voltar">
                        </div>
                    </div>

                </div>
        </form>
    </div>
</body>

</html>