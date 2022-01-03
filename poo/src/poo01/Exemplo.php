<?php 

namespace Poo\poo01;

use stdClass;

class Exemplo
{
    private $nome = null;
    private $email = null;
    private $senha = null;
    private $token = null;
    private $refresh_token = null;
    private $time_exp = null;
    private $time_cre = null;
    public $data = null;
    
    public function get_nome() { return $this->nome; }    
    public function set_nome(): Exemplo { 
        if($this->data) $this->nome = $this->data->nome;
        return $this;
    }

    public function get_email() { return $this->email; }    
    public function set_email(): Exemplo {
        if($this->data) $this->email = $this->data->email;
        return $this;        
    }

    public function get_senha() { return $this->senha; }    
    public function set_senha(): Exemplo {
        if($this->data) $this->senha = $this->data->senha;
        return $this;
    }

    public function get_token() { return $this->token; }    
    public function set_token(): Exemplo{ 
        if($this->data) $this->token = $this->data->token;
        return $this;
    }

    public function get_refresh_token() { return $this->refresh_token; }    
    public function set_refresh_token(): Exemplo {
        if($this->data) $this->refresh_token = $this->data->refresh_token;
        return $this;    
    }

    public function get_time_exp() { return $this->time_exp; }    
    public function set_time_exp(): Exemplo  {
        if($this->data) $this->time_exp = $this->data->time_exp;
        return $this;
    }

    public function get_time_cre(): string { return $this->time_cre; }    
    public function set_time_cre(): Exemplo { 
        if($this->data) $this->time_cre = $this->data->time_cre;
        return $this;
    }

    public function __construct(stdClass $object_data){
        $this->data = $object_data;
    }

}


