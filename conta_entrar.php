<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require "referencias.php" ?>
</head>

<body>
<form>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-weight: bold;">Qual o tipo da sua Conta:</h1>
                </div>

                <div class="col-md-6">
                    <input type="submit" class="btn btn-success" value="Cooperativa" formaction="conta_entrar_cooperativa.php">
                </div>

                <div class="col-md-6">
                    <input type="submit" class="btn btn-success" value="Cidadão" formaction="conta_entrar_cidadao.php">
                </div>
            </div>
        </div>
    </form>
</body>
</html>