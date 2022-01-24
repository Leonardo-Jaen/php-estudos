<?php

//sintaxe -> sempre se atentar a finalizar a linha com ponto e virgula. Voce precisa seguir regrar para tudo poder funcionar.

echo "cindy é gata";

//tags -> normalmente usamos a "<?php" para abrir e '? >' para fechar. Podemos usar "<?= ? >" para coisas simples e rapidas, os fechamentos nao tem espaço.

echo "Eu te mamo, cindy";

//funcoes de saida -> Echo é importante para achar um bug, voce coloca varios para achar o erro.

echo "eae cley" . PHP_EOL;

//var_dump é feito para explicar coisas mais especificas, tipo, "oi", é uma string com 2 caracteres.

var_dump("eae");

//tipos de dados -> boolean, é só TRUE ou FALSE, nao tem meio termo.


var_dump(True);
var_dump(False);
var_dump(True);
var_dump(False);

//inteiros é um conjunto Z = (.. -2, -1, 0, 1, 2)

echo "Exemplos de numeros inteiros" . PHP_EOL;

var_dump(1234);

var_dump(-2, -1, 0);

//numeros flutuantes

echo "Exemplos de numeros flutuantes" . PHP_EOL;

var_dump(1.2);

var_dump(1.321);

var_dump(4.231);

var_dump(7E-10);

//strings -> é uma serie de caracteres, onde 1 caractere é o mesmo que 1 byte para o armazenamento na memoria. O php tem suporte a somente 256 caracteres.

echo "meu deus, jesuias" . PHP_EOL;

var_dump("melhor kuduairo do wolrd");

//arrays -> vetores

echo "meu deus, jesuias, é um vetuairo" . PHP_EOL;

var_dump(
    [1,2,3,4,5,6,7]
);

//variaveis

$idade = '19 anos';

echo "Me chamo leonardo e tenho " . $idade . PHP_EOL; 

$idade = '20 anos';

echo "Porém, fiz aniversario e agr tenho" . $idade . PHP_EOL;

//operadores aritimeticos 

$anoAtual = date('Y');
$minhaIdade = 20;

echo "Ano que eu nasci: " . ($anoAtual - $minhaIdade). PHP_EOL;

$x = 401231323;

$y = 903423242;

echo "Resultado da operação: " . ($x / $y) . PHP_EOL;
echo "Resultado da operação: " . ($x + $y) . PHP_EOL;
echo "Resultado da operação: " . ($x * $y) . PHP_EOL;
echo "Resultado da operação: " . ($x % $y) . PHP_EOL;
echo "Resultado da operação: " . ($y - $x) . PHP_EOL;

//bitwise é algo binario, normalmente usado em maratonas de facul ou trabalhar com codigo de baixo nivel.

//operadores de atribuicao -> ++ é mais 1, -- é menos 1.

$valor = 12;
$valor2 = 13;
$valor3 = 14;
$valor5 = 15;

$resultado = $valor + $valor2 + $valor3 + $valor5 + 20.2;

echo $resultado . PHP_EOL;


//comparacao de valores -> true-verdadeiro. false-falso. 1-true. 0-false. PHP_EOL é para quebrar linha.

echo (0 == false) . PHP_EOL; //true
echo('123' === 123) . PHP_EOL; //true
echo('um' == 1) . PHP_EOL; //false
echo(123.0 == 123) . PHP_EOL; //false

//operadores de diferença

echo(0 != false) . PHP_EOL; // false
echo('123' != 123) . PHP_EOL; //f false
echo('um' != 1) . PHP_EOL; // true
echo(123.0 != 123) . PHP_EOL; // false

//igual igual "==="

echo(0 === false) . PHP_EOL; // true
echo('123' === 123) . PHP_EOL; // true
echo('um' === 1) . PHP_EOL; // true
echo(123.0 === 123) . PHP_EOL; // true

//nao identico

echo(0 !== false) . PHP_EOL; // true
echo('123' !== 123) . PHP_EOL; // true
echo('um' !== 1) . PHP_EOL; // true
echo(123.0 !== 123) . PHP_EOL; // true

//Maior/menor que -> ">" maior que "<" menor que "<=" menor igual que ">=" maior igual que.

echo (2 < 3) . PHP_EOL; // true
echo (2 > 3) . PHP_EOL; // false
echo (2 <= 3) . PHP_EOL; // true
echo (2 >= 3) . PHP_EOL; // false

//operadores logicos

//E &&, and. "and" é pra ver se dois ou mais valores sao true

$a = true;
$b = true;

var_dump($a && $b) . PHP_EOL;

//ou OR, ||. 

$a = true;
$b = false;

var_dump($a || $b) . PHP_EOL;


//xor ^, xor é um operador logico conhecido como OU exclusivo e vai retnornar true se um dos operados for verdadeiro, mas nao ambos.

$a = true;
$b = true;

var_dump($a ^ $b) . PHP_EOL;

//nao !, not. um operador de negacao

$a = true;

var_dump(!$a) . PHP_EOL;

//operador de execucao. CUIDADO COM ESTE!!!

//$output = `ls -al`;

//echo "<pre>$output<pre>";

//estruturas condicionais - if / else

$idade = 22;

if($idade >= 20) {
    echo "vc é adulto";
} else {
    echo "vc nao é";
}

$grupo = "dedo no cu e gritaria";

if($grupo == "sim, eu grito") {
    echo "vc é gay";
} else {
    echo "ta maluco? YO SOY HERNANDO E SOY MACHO";
}
//
$cindy = "kanabrava";

if($cindy == "kanabrava") {
    echo "voce é fujoshi";
} else {
    echo "vc nao é fujoshi";
}
//
$estouLogado = true;

if ($estouLogado) {
    echo "continue na app";
} else {
    echo "vai para o login";
}
//
$userCi = "cindy";
$senhaCi = "unitato123";

$userLeo = "leo";
$senhaLeo = "leo123";

if ($userCi == "cindy" && $senhaCi == "unitato123") {
    echo "Bem vindo, cineneci";
} else if ($userLeo == "leo" && $senhaLeo == "leo123") {
    echo "Bem vindo, leozin";
} else {
    echo "quem sois vos?";
}

$comando = "insta";

switch($comando){
    case "!insta";
        echo "Link: https://www.instagram.com/sky__blu3e/";
        echo "Esse é o insta dessa desgraçada";
        break;
    case "!cibele";
        echo "Link: https://www.instagram.com/belesouza71/";
        echo "insta da bele";
        break;
    case "!eu";
        echo "Link: https://www.instagram.com/_n3ajj_/";
        echo "meu insta";
        break;
    default;
        echo "ngm tem insta";
        break;
}   