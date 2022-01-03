<?php 


namespace Poo\Loja\Classes;

use Poo\Loja\Abstracts\Computador;

class ComputadorGame extends Computador {
    public $tipoComputador = "Game";
    private $quantidadeMemoria;


    public function getQuantidadeMemoria(): int {
        return (int) $this->quantidadeMemoria;
    }
    public function setQuantidadeMemoria(int $quantidadeMemoria): void {
        $this->quantidadeMemoria = $quantidadeMemoria;
    }
    
    public function toString(): string {
        print_r($this);
        return "";
    }

    public function __construct(string $nome, float $preco, string $dataFabricacao)
    {
        parent::__construct($nome, $preco, $dataFabricacao);
    }

    public function jogarNeedForSpeed(): void {
        
        // print parent::estaLigado() ? 'Jogando Need For Speed...' : 'Computador está desligado...';
        
        if(parent::estaLigado()){
            print 'Jogando Need For Speed...';
        } else {
            print("Computador está desligado...");
        }
    }
}