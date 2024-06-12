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


<div class="col-md-12">
    <img src="imagens/reciclagem_maos.png" alt="Kattar Logo" class="img-fluid" id="logoTopo">
    <h1 style="color: #278C40;">Kattar</h1>
</div>

            <div class="col-md-12">
                <textarea class="form-control" name="descricao" placeholder="Descrição do material a ser coletado"></textarea>
            </div>

            <div class="col-md-6">

                <select name="materiais" class="form-control">
                    <option style="background-color: #99AA00" ;>Metal</option>
                    <option style="background-color: #008855" ;>Papel</option>
                    <option>Plástico</option>
                    <option>Vidro</option>

                </select>

            </div>

            <div class="col-md-6">
                <input type="date" class="form-control" placeholder="Data para coleta">
            </div>

            <div class="col-md-12">
                <input type="file" class="form-control">Selecione uma foto sobre o item
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



    </div>


    </div>
</body>

</html>