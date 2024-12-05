<?php
//Exercício 1 - Tabuada
echo "<h3>1 Tabuada de 1 a 10</h3>";
function tabuada($numero) {
    for ($i = 1; $i <=10; $i++){
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado <br>";
    } 
}

tabuada(7);


// Exercício 2 - 
echo "<h3>2 Média Simples de 4 provas</h3> <br>";

$notas = array();
$i = 0;
$soma = 0;

while ($i < 4) {
    $nota = (float) readline("Digite a nota da prova $i:");
    $notas [] = $nota;
    $soma += $nota;
    $i++;
}

$media = $soma / count($notas);
echo "A média do aluno é: $media" . PHP_EOL;

if ($media >= 7) {
    echo "O aluno foi aprovado";
} else{
    echo "O aluno foi reprovado";
}


// Exercício 3 - 
echo "<h3>3 Calcular fatorial de um número</h3> <br>";

function fatorial($numero) {
    if ($numero < 0) {
        return "O fatorial não está definido para números negativos.";
    } else if ($numero == 0) {
        return 1;
    } else {
        $resultado = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }
}

echo fatorial(-10);


// Exercício 4 - 
echo "<h3>4 Maior e menor valor</h3> <br>";

function encontrarMaiorEMenor($array){
    if (empty($array)){
        return "O array está vazio";
}
$maior = $array [0];
$menor = $array [0];

foreach ($array as $valor) {
    if ($valor > $maior) {
        $maior = $valor;
    } elseif ($valor < $menor) {
        $menor = $valor;
    }
}
 return ["maior" => $maior, "menor" => $menor];
}

//
$numeros = [-5, 2, 9, -1, 5, 6];
$resultado = encontrarMaiorEMenor($numeros);

echo "O maior valor é: " . $resultado["maior"] . "\n";
echo "O menor valor é: " . $resultado["menor"] . "\n";


// Exercício 5 - 
echo "<h3>5 Ordenação de um array</h3> <br>";

function bubbleSort($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Troca os elementos
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

function insertionSort($array) {
    for ($i = 1; $i < count($array); $i++) {
        $key = $array[$i];
        $j = $i - 1;

        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }
        $array[$j + 1] = $key;
    }
    return $array;
}


$numeros = [5, 2, 9, -1, 5, 6];


$numerosOrdenadosBubble = bubbleSort($numeros);

$numerosOrdenadosInsertion = insertionSort($numeros);

print_r($numerosOrdenadosBubble);
print_r($numerosOrdenadosInsertion);


// Exercício 6 - 
echo "<h3>6 Contagem de vogais</h3> <br>";

function contarVogais($string){
    $string = strtolower($string);
    $vogais = "aeiou";
    $contador = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos($vogais, $string[$i]) !== false) {
            $contador++;
        }
    }
    return $contador;
}

$texto = "Este é um exemplo para contar vogais";
$resultado = contarVogais($texto);
echo "A quantidade de vogais é:" . $resultado;


// Exercício 7 - 
echo "<h3>7 Números pares e ímpares</h3> <br>";

$numeros = array ();
$pares = array ();
$impares = array ();

for ($i = 0; $i < 10; $i++) {
    $numeros[] = intval(readline("Digite o número" . ($i + 1) . ": "));
}

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}

echo "Números pares: ";
print_r($pares);

echo "Números ímpares: ";
print_r($impares);


// Exercício 8 - 
echo "<h3>8 Calculadora simples</h3> <br>";

function calcular($num1, $num2, $operador) {
    switch ($operador) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Divisão por zero não é permitida.";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Operador inválido.";
    }
}

// Usuário digita os dados

$num1 = 10;
$num2 = 5;
$operador = '+'; 
// Resultado das 4 operações, conforme se altera o sinal
$resultado = calcular($num1, $num2, $operador);
echo "Resultado: $resultado";


// Exercício 9 - 
echo "<h3>9 Contagem de positivos e negativos</h3> <br>";

$numeros = array(3, -5, 7, -2, 9, 10, -8, 4, -1, 6);

$conta_positivos = 0;
$conta_negativos = 0;

foreach ($numeros as $numero) {
    if ($numero > 0) {
        $conta_positivos++;
    } elseif ($numero < 0) {
        $conta_negativos++;
    }
}

echo "Quantidade de números positivos: $conta_positivos\n";
echo "Quantidade de números negativos: $conta_negativos\n";


// Exercício 10 - 
echo "<h3>10 Mostrar o dobro dos números de 01 à 100</h3> <br>";

function mostrarDobro() {
    for ($i = 1; $i <= 100; $i++) {
        $dobro = $i * 2;
        echo "Número: $i, Dobro: $dobro\n";
    }
}

mostrarDobro();

?>
