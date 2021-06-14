<?php

echo "<hr>";
echo "Velocidade Inicial: " . $_POST["inic"];
echo "<br>";
echo "Aceleração: " . $_POST["aceler"];
echo "<br>";
echo "Tempo: " . $_POST["tempo"];
echo "<hr>";

$vO = $_POST["inic"];
$a = $_POST["aceler"];
$t = $_POST["tempo"];

$v = $vO + ($a*$t);
$vm = 3.6 *$v;

echo "<b>Velocidade Média: " . $vm . " Km/h </b>";

?>