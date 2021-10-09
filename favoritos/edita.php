<?php
    $arquivo=fopen("contatos.txt", "r");
    $arquivo2=fopen("contatos2.txt", "a+");
    while(!feof($arquivo))
    {
        $pessoa=explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $posicao=$_GET['posicao'];
    $nome=$_POST['nome'];
    $link=$_POST['link'];
    $pessoa[$posicao]=$nome;
    $pessoa[$posicao+1]=$link;
    unlink("contatos.txt");
    rename("contatos2.txt","contatos.txt");
    $arquivo=fopen("contatos.txt", "a+");
    $contador=count($pessoa);
    $i=0;
    while($i<=$contador-2)
    {
        $gravar=$pessoa[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo2);
    fclose($arquivo);
    echo "<script>
        alert('Contato editado com sucesso!');
        window.location.href='index.php';
        </script>";
?>