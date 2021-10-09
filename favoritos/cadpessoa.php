<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a=[];
            $a['nome'] = $_POST['nome'];
            $a['link'] = $_POST['link'];
            $gravar=$_POST['nome']."|".$_POST['link']."|";
            $arquivo=fopen('contatos.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>