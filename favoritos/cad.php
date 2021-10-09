<?php
    require 'cadpessoa.php';
    $dados = Handler::arrayHandler();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="contant-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <center><img src="imagens/www.png" width="10%" height="10%"/></center>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <h3></h3>
            </div>
            </nav>
        </header>
        <br/><br/>
        <div class="row justify-content-center row-cols-2 row-cols-md-2 mb-3 text-justify">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-reader py-3 text-center">
                        <h4 class="my-0 fw-normal"><b></b></h4>
                    </div>
                    <div class="card-body">
                        <?php
                            echo "<b>Nome:</b>".$dados['nome']."<br/>";
                            echo "<b>Link:</b>".$dados['link']."<br/>";
                        ?>
                        <br/><br/>
                        <a href="index.php"><button class="btn btn-outline-dark">Voltar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr/>
            <center><b></b></center>
        </footer>
    </body>
</html>