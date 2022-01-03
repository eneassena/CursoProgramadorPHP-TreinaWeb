<?php 

namespace Poo\Loja\Abstracts;

use Poo\Loja\Interfaces\InterfaceComputador;

abstract class Computador implements InterfaceComputador {

    private $nome;
    private $preco;
    private $dataFabricacao;
    private $ligado;
    
    public function __construct(string $nome, float $preco, string $dataFabricacao) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->dataFabricacao = $dataFabricacao;
        $this->ligado = false;
    }

    public function ligar(): void {
        $this->ligado = true;
    }
    public function desligar(): void {
        $this->ligado = false;
    }
    public function acessarInternet(): void {
        print('Connectado a internet');
    }
    protected function estaLigado(): bool {        
        return (bool) $this->ligado;
    }
    public abstract function toString(): string;
}
