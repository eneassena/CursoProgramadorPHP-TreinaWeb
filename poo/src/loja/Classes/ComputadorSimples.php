<?php 


namespace Poo\Loja\Classes;

use Poo\Loja\Abstracts\Computador;

class ComputadorSimples extends Computador {

    public $tipoComputador = "Simples";

    public function toString(): string {
        print_r($this);

        return "";
    }

    public function __construct(string $nome, float $preco, string $dataFabricacao)
    {
        parent::__construct($nome, $preco, $dataFabricacao);
    }

    public function jogarPaciencia(): void {
        if(parent::estaLigado()){
            print 'Jogando paciência...';
        } else {
            print("Computador está desligado...");
        }
    }
}