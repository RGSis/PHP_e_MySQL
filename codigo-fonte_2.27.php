<?php
    // Escrevendo um arquivo
    $file = fopen('dados.txt', 'w');
    fwrite($file, 'Escrevendo ');
    fwrite($file, 'no arquivo. ');
    fclose($file);

    // Lendo um Arquivo
    $filepath = "dados.txt";
    $file = fopen($filepath,"r");
    $bufer = fread($file, filesize($filepath));
    fclose($file);
    echo($bufer); // Resultado: Escrevendo no arquivo.

?>