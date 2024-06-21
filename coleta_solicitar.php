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

            <div class="col-md-12">
                <textarea class="form-control" name="descricao" placeholder="Descrição do material a ser coletado"></textarea>
            </div>

            <div class="col-md-6">

                <select name="materiais" class="form-control">
                    <option>Selecione o tipo do material</option>
                    <option style="background-color: #FFF500;">Metal</option>
                    <option style="background-color: #0012FF;">Papel</option>
                    <option style="background-color: #FF0000;">Plástico</option>
                    <option style="background-color: #00FF0A;">Vidro</option>
                    <option>Outro</option>
                </select>

            </div>

            <div class="col-md-6">
                <input type="date" class="form-control" placeholder="Data para coleta">
            </div>

            <div class="col-md-12">
                <label>Selecione uma foto sobre o item</label>
                <input type="file" class="form-control">
            </div>



        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: left;">


                <input type="submit" class="btn btn-success" value="Solicitar">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: left;">


                <input formaction="index.php" type="submit" class="btn btn-danger" value="Voltar">
            </div>
        </div>

        <?php require "rodape.php" ?>



    </div>


    </div>
</body>

</html>