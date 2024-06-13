<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require "referencias.php" ?>


</head>

<body>
    <div class="container">
        <div class="row">
            <?php require "cabecalho_pagina.php" ?>

            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="coleta_solicitar.php" value="Coleta" />
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="coleta_historico.php" value="Exibir histórico" />
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="coleta_instrucoes.php" value="Instruções informativas" />
            </div>


        </div>

        <?php require "rodape.php" ?>

        


    </div>

</body>

</html>