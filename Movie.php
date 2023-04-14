<?php

class Movie{
    private string $nome;
    private int $durata;
    private int $voto;
    private array $genere;

    public function __construct(string $nome,int $durata, int $voto, array $genere){
        $this->nome=$nome;
        $this->durata=$durata;
        $this->voto=$voto;
        $this->genere=$genere;
    }

    public function getNome(){
        return $nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getDurata(){
        return $durata;
    }

    public function setDurata($durata){
        $this->durata=$durata;
    }

    public function getVoto(){
        return $voto;
    }

    public function setVoto($voto){
        $this->voto=$voto;
    }

    public function getGenere(){
        return $genere;
    }

    public function setGenere($genere){
        $this->genere=$genere;
    }
}