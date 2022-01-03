<?php 


namespace Poo\Loja\Classes;

use Poo\Loja\Abstracts\Computador;

class ComputadorParrudo extends Computador {
    public $tipoComputador = "Parrudo";
    private $corDoGabinete;

    public function setCorDoGabinete(string $corDoGabinete): void {
        $this->corDoGabinete = $corDoGabinete;
    }
    public function getCorDoGabinete(): string {
        return (string) $this->corDoGabinete;
    }

    public function __construct(string $nome, float $preco, string $dataFabricacao)
    {
        parent::__construct($nome, $preco, $dataFabricacao);
    }

    public function toString(): string {
        print_r($this);
        return "";
    }
    public function jogarCS(): void {
        if(parent::estaLigado()){
            print 'Jogando Counter Strick 1.6...';
        } else {
            print("Computador está desligado...");
        }
    }
}