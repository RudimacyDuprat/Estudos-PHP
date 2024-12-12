<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>


    <?php 
    //Declarando uma variavel no php $ sinal, vindo com o nome de sua variavel.
    // exemplos de atribuicao variavel junto vem o = que temos que ler como recebe.
    //depois nosso valor ex: $nome="rudimacy"; 
//********************************************************* */
    // exemplos de mais 4 variaveis.
    //$idade=28
    //$peso=150.4
    //$casado=false;
    #$nome="rudimacy";
    #$sobrenome="Duprat";

    // e as constantes?
    //const nao tem o $, nome tem que ser em maisculo. igual ao exemplo, valor
    //constante nao muda.
    #const PAIS ="Brasil";

    #print "muito prazer, $nome $sobrenome voce mora no ".PAIS;
    //posso usar o echo mais tambem posso usar o print.
 //******************************************************** */
    //Regras para nomes identificadores

    //1 variaveis sempre comeca com simbolo $
    //2 O segundo pode ser letra ou _
    //3 Aceita caracteres [a-z],[A-Z],[0-9]e[_]
    //4 Aceita caracteres de tabela ASCII a partir de 128
    //5 Aceita caracteres acentuados como á,õ,ç
    //6 A linguagem é case sensitive em relação aos nomes
    //7 Nomes especiais como $this não pode ser usado

    //exemplos de variaveis sendo usadas nomes maisculos e menusculos
    //$nome = "pedro"
    //$NOME= "maria"
    //duas varuiaveis iguais, nome mais diferentes porque quando colocamos 
    //maiscula e manuscula ele diferencia as variaveis e colocamos outros valores.

    //************************************************************* */
    //Recomendações para dar nomes

    //1 Tentar dar nomes claros e de facil identificação
    //2 Evitar nomes muito curtos ou muito longos
    //3 Defina um padrão e siga em todo o projeto
    //4 Para variaveis, dê preferencia a letras menusculas
    //5 Para constantes, dê preferencia a letras maisculas
    //6 Use camelCase para métodos e atributos
    //7 Use o SNAKE_CASE para nomear constantes

    //exemplos camelCase, snake_case
    // $nomeCompletoCliente="Camel Case" perceba que tem letras maiusculas e menusculas
    // $telefone_contato_cliente="Snack_Case" tudo em menusculo ou tudo em maisculo com o _ no meio
    //

    
    ?>
</body>
</html>