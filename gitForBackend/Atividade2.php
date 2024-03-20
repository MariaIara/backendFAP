Exercício 02 - Desenvolvimento Web Back-end
Todos as questões fazem referências a questões do BeeCrowd


<!-- 1. (1013) The Greatest -->

<?php
$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = intval(fgets(STDIN));
$MaiorAB = ($a + $b + abs($a - $b)) / 2;
$maior = ($MaiorAB + $c + abs($MaiorAB - $c)) / 2;
echo "$maior eh o maior";


// 2. (1018) Banknotes

<?php
function CalculoDeNotas($valor)
{
$notas = [100, 50, 20, 10, 5, 2, 1];
$quantidades = [];
foreach ($notas as $nota) {
$quantidade = intval($valor / $nota);
$quantidades[$nota] = $quantidade;
$valor -= $quantidade * $nota;
}
return $quantidades;
}
$valor = (int)readline("");
$notasNecessarias = CalculoDeNotas($valor);
echo "Valor total: R$ " . $valor . "\n";
foreach ($notasNecessarias as $nota => $quantidade) {
echo $quantidade . " nota(s) de R$ " . $nota . ",00\n";
}



// 3. (1133) Rest of a Division

<?php
Curso ADS/ Sistemas de Informação Turno NOITE Semestre 2024.1 Data
Disciplina Desenvolvimento Web Back-end Professor(a) Jhonatta Pietro de Oliveira
$num1 = intval(readline());
$num2 = intval(readline());
$menor = min($num1, $num2);
$maior = max($num1, $num2);
echo "=============== \n";
for ($i = $menor + 1; $i < $maior; $i++) {
if ($i % 5 == 2 || $i % 5 == 3) {
echo $i . "\n";
}
}


// 4. (1101) Sequence of Numbers and Sum

<?php
while (true) {
fscanf(STDIN, "%d %d", $M, $N);
if ($M <= 0 || $N <= 0) {
break;
}
$menor = min($M, $N);
$maior = max($M, $N);
$soma = 0;
for ($i = $menor; $i <= $maior; $i++) {
echo $i . " ";
$soma += $i;
}
echo "Soma= " . $soma . "\n";
}




// 5. (1789) The Race of Slugs


<?php
while (fscanf(STDIN, "%d", $n) === 1) {
$velocidades = explode(" ", trim(fgets(STDIN)));
$maior_velocidade = max($velocidades);
if ($maior_velocidade < 10) {
echo "1\n";
} elseif ($maior_velocidade < 20) {
echo "2\n";
} else {
echo "3\n";
}
}



// 6. (1071) Sum of Consecutive Odd Numbers I

<?php
function isOdd($num) {
return $num % 2 != 0;
}
function sumOfOddNumbers($x, $y) {
$sum = 0;
$start = min($x, $y);
$end = max($x, $y);
for ($i = $start; $i <= $end; $i++) {
if (isOdd($i)) {
$sum += $i;
}
}
return $sum;
}
echo "Digite o valor de X: ";
$x = intval(trim(fgets(STDIN)));
echo "Digite o valor de Y: ";
$y = intval(trim(fgets(STDIN)));
$result = sumOfOddNumbers($x, $y);
echo "$result\n";
?>




// 7. (1103) Alarm Clock

<?php
$input = explode(" ", readline());
$a = intval($input[0]);
$b = intval($input[1]);
$c = intval($input[2]);
$maior_ab = ($a + $b + abs($a - $b)) / 2;
$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;
echo $maior . " eh o maior\n";
?>




// 8. (1024) Encryption

<?php
$N = intval(fgets(STDIN));
for ($i = 0; $i < $N; ++$i) {
$M = rtrim(fgets(STDIN));
$n = strlen($M);
for ($j = 0; $j < $n; ++$j) {
if (ctype_alpha($M[$j])) {
$M[$j] = chr(ord($M[$j]) + 3);
}
}
for ($j = 0; $j < $n / 2; ++$j) {
$aux = $M[$j];
$M[$j] = $M[$n - 1 - $j];
$M[$n - 1 - $j] = $aux;
}
for ($j = $n / 2; $j < $n; ++$j) {
$M[$j] = chr(ord($M[$j]) - 1);
}
echo $M . "\n";
}
?>




// 9. (1168) LED

?php
function contar_leds($numero) {
$leds = ['0' => 6, '1' => 2, '2' => 5, '3' => 5, '4' => 4, '5' => 5, '6' => 6, '7' => 3, '8' => 7, '9' => 6];
$total_leds = 0;
for ($i = 0; $i < strlen($numero); $i++) {
$total_leds += $leds[$numero[$i]];
}
return $total_leds;
}
$num_casos_teste = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $num_casos_teste; $i++) {
$numero = trim(fgets(STDIN));
$total_leds = contar_leds($numero);
echo $total_leds . " leds\n";
}
?>




// 10. (1253) Caesar Cipher

<?php
function decifra_cesar($texto_codificado, $deslocamento)
{
$texto_decodificado = '';
$tamanho_alfabeto = 26;
foreach (str_split($texto_codificado) as $caractere) {
$ascii = ord($caractere);
if ($ascii >= 65 && $ascii <= 90) {
$novo_ascii = (($ascii - 65 - $deslocamento + $tamanho_alfabeto) % $tamanho_alfabeto) +
65;
$texto_decodificado .= chr($novo_ascii);
} else {
$texto_decodificado .= $caractere;
}
}
return $texto_decodificado;
}
$n = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $n; $i++) {
$texto_codificado = trim(fgets(STDIN));
$deslocamento = intval(trim(fgets(STDIN)));
echo decifra_cesar($texto_codificado, $deslocamento) . "\n";
}





// 11. (1259) Even and Odd


<?php
$quantidade = intval(trim(fgets(STDIN))); // Lê a quantidade de números a serem inseridos
$pares = [];
$impares = [];
// Lê os números e os classifica em pares e ímpares
for ($i = 0; $i < $quantidade; $i++) {
$num = intval(trim(fgets(STDIN)));
if ($num % 2 == 0) {
$pares[] = $num; // Adiciona o número par ao array de pares
} else {
$impares[] = $num; // Adiciona o número ímpar ao array de ímpares
}
}
sort($pares); // Ordena os números pares em ordem crescente
rsort($impares); // Ordena os números ímpares em ordem decrescente
// Imprime os números pares seguidos dos ímpares
foreach ($pares as $par) {
echo $par . "\n";
}
foreach ($impares as $impar) {
echo $impar . "\n";
}
?>




// 12. (1028) Collectable Cards


<?php
function mdc($a, $b) {
while ($b != 0) {
$temp = $b;
$b = $a % $b;
$a = $temp;
}
return $a;
}
function tamanho_maximo_pilha($f1, $f2) {
$divisor_comum = mdc($f1, $f2);
return $divisor_comum;
}
$N = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $N; $i++) {
$entrada = explode(" ", trim(fgets(STDIN)));
$F1 = intval($entrada[0]);
$F2 = intval($entrada[1]);
echo tamanho_maximo_pilha($F1, $F2) . "\n";
}
?>