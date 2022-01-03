<?php
require __DIR__."/../../vendor/autoload.php";

use Poo\Loja\Classes\ComputadorGame;
use Poo\Loja\Classes\ComputadorParrudo;
use Poo\Loja\Classes\ComputadorSimples;





$computador= new ComputadorSimples("PC Simples", 2960, date('Y.m.d'));
// $computadorSimples->setNome("PC Simples");
// $computadorSimples->setPreco(2960);
// $computadorSimples->setdataFabricacao(date('Y.m.d'));

$computador->acessarInternet();
$computador->ligar();
echo '<p></p>';
// $computador->jogarPaciencia();

echo '<pre>';
$computador->toString();

echo '<hr>';

$computador = new ComputadorParrudo("PC Parrudo", 5.650, date('d.m.Y'));
// $computadorParrudo->setNome("PC Parrudo");
// $computadorParrudo->setPreco(5.650);
// $computadorParrudo->setdataFabricacao(date('d.m.Y'));
$computador->setCorDoGabinete("Prata");
$computador->desligar();
$computador->acessarInternet();
echo '<p></p>';
$computador->jogarCS();
echo '<p></p>';
$computador->toString();


echo '<hr>';

$computador = new ComputadorGame("PC Game", 10000, "2003-06-05");
// $computadorGame->setNome("PC Game");
// $computadorGame->setPreco(10000);
// $computadorGame->setdataFabricacao("2003-06-05");
$computador->setQuantidadeMemoria(1354654);
$computador->ligar();
$computador->acessarInternet();
echo '<p></p>';
$computador->jogarNeedForSpeed();
echo '<p></p>';
$computador->toString();


