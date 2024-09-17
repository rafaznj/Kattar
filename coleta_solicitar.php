<!DOCTYPE html>
<html lang="pt-br">

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
                <!-- 
                    ADICIONAR ESSAS FUNÇÕES:

                    Ficar a critério da cooperativa quais tipos de materiais elas recolhem, impactando na solicitação
                    de coletas.

                    Existirá três categorias principais: eletrodomésticos, eletrônicos e recicláveis.

                    Quando o usuário escolher a categoria do seu material, irá aparece uma lista de exemplos de materiais,
                    se o material não estiver de acordo, terá uma aba "outro" para poder informar qual é esse resíduo e
                    ficará á critério da cooperativa aceitar ou não a coleta do mesmo.
            
                -->
                <select name="materiais" class="form-control">
                    <option>Selecione o tipo de resíduo</option>
                    <option>Eletrodoméstico</option>
                    <option>Eletrônico</option>
                    <option>Reciclável</option>
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