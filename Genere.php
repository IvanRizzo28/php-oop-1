<?php
class Genere{
    private string $nome;
    private string $descrizione;

    public function __construct(string $nome,string $descrizione){
        $this->nome=$nome;
        $this->descrizione=$descrizione;
    }
}