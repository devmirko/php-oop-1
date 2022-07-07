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
        self::$num_of_film++;
        $this->OldAge();
        
    }

    public function OldAge() {
        $now = date("Y");
        //se la sottrazzione di anno film e anno attuale e meno di 5 il film è 'recente'
        if ( $now - $this->anno < 5) {
            echo "il film è recente";
            
        } else {
            echo "il film è vecchio";
        }
        
        
    }
}