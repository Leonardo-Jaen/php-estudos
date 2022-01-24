<?php 


$name = 'cindy';

//vou deixar o if pq eu n manjo mt aksdka

if($name === "cindy") {
    echo "a mais gata, linda!";

} else {
    echo "é a mais linda, gata";
}

//continha

$a = 300000;

$b = 3410240;

$soma = $a * $b;

echo $soma . PHP_EOL;


//atribuição


$a = 20;

$soma += 20;

echo $soma . PHP_EOL;


//operador de incremento (incrementar é adicionar, normalmente adiciona 1, decrementar é o oposto, obvio!)


$valorInteiro = 10;

echo 'O valor da variavel foi incrementado e agr é = ' . ++$valorInteiro . PHP_EOL;

echo 'O valor da variavel foi incrementado, mas ainda nao mudou então continua sendo = ' , $valorInteiro++ . PHP_EOL;

echo 'O valor da variavel agr é = ' . $valorInteiro . PHP_EOL;


//comparação de valores

$idade = 20;

var_dump($idade >19);
var_dump($idade !== 19);
var_dump($idade == "21");
var_dump($idade != 21);

//combinacao e concatenacao de strings

$cindy = 150;

echo "a cindy tem " . $cindy . " de altura";


//string 

$string = "coe";

echo "minha string $string"; //podemos usar assim para "concatenar", mas nao é recomendado.


//operadores de arrays

//essa é a minha forma favorita, assim é estéticamente mais bonito e aparentemente mais detalhado, tendo uma visao melhor doq estou fazendo!

$pessoa = [

    'name' => 'cindy Kana Brava',
    'age' => 19,
    'city' => 'SP'

];

$pessoa['x'] = 'fodasemermao';

var_dump($pessoa);

//operadores logicos -> valores booleanos.

$nome = "cindy";
$morta = false;

// ||->ou && -> e

var_dump($name || $morta);


//operadores de execucao


$cmd = `ls -ll`;
//PERIGO
var_dump($cmd);

//estrutura de controle

$age = 12;

// if, estou entendendo, uhull 

if($age > 21) {
    echo "vc e maior de idade states";
} else if ($age > 18) {
    echo "vc é maior de idade no br";
} else {
    echo "vc nao e maior em lugar nenhum";
}



//loops 

$numeros = [
    20,
    30,
    40,
    50,
    60,
    70,
    80,
];

var_dump(count($numeros));

for ($i = 0; $i < count($numeros); $i++) {
    echo " vc recebeu um salve da cindy " . $numeros[$i] . " vezes " . PHP_EOL;
}

//while - enquanto- enquanto algo for verdadeiro, vai ser executado pra sempre

$viva = true;

$incremento = 0;

while($incremento <= 10) {
    echo "vai meu amor, te amo cindy";

    $incremento++;
}