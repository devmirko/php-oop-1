<?php

class Film{
    public $nome;
    public $genere;
    public $regista;
    public $anno;

    static public $num_of_film;

    public function __construct(string $nome_film, string $genere_film, string $regista_film, int $anno_film)
    {
        $this->nome = $nome_film;
        $this->genere = $genere_film;
        $this->regista = $regista_film;
        $this->anno = $anno_film;
        
    }
}