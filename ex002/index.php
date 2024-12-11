<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando o php</title>
</head>
<body>
    <?php 
    // atividade do curso para mostra so o que aparece para o cliente
    // nao mostra nosso codigo.
    // mostra como o servidor trabalha.
    date_default_timezone_set("america/Recife");
    print "hoje e dia" .date("d/M/Y");
    print "e a hora atual e" .date("G:i:s T");
    
    ?>
</body>
</html>