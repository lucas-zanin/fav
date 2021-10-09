<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="contant-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <form action="cad.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nomeie o site a ser favoritado"required/>
                <br/>
                <label>Entre com um https://URL:</label>
                <input type="url" name="link" placeholder="https://exemplo.com"pattern="https://.*" size="50"required/>
                <br/>
                <br/>
                <button type="submit" class="btn btn-success">Favoritar</button>
            </div>
        </form>
    </body>
</html>