<?php



require_once 'Operacao.php';


$minhaConta = new Operacao();


$minhaConta->setValor1(10.0);
$minhaConta->setValor2(2.0);

echo "Valor 1: " . $minhaConta->getValor1() . "<br>";
echo "Valor 2: " . $minhaConta->getValor2() . "<br><br>";

echo "Soma: " . $minhaConta->somar() . "<br>";
echo "Subtração: " . $minhaConta->subtrair() . "<br>";
echo "Multiplicação: " . $minhaConta->multiplicar() . "<br>";
echo "Divisão: " . $minhaConta->dividir() . "<br>";
echo "Exponenciação: " . $minhaConta->exponenciar() . "<br>";
?>
