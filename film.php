<?php

class Film{
    public $nome;
    public $genere;
    public $regista;
    public $anno;

    public $Age;

    static public $num_of_film;

    public function __construct(string $nome_film, string $genere_film, string $regista_film, int $anno_film)
    {
        $this->nome = $nome_film;
        $this->genere = $genere_film;
        $this->regista = $regista_film;
        $this->anno = $anno_film;
        $this->OldAge();
        self::$num_of_film++;
        
        
    }

    public function OldAge() {
        $now = date("Y");
        //se la sottrazzione di anno film e anno attuale e meno di 5 il film è 'recente'
        if ( $now - $this->anno < 5) {
            $this->Age = "il film è recente";
            
        } else {
            $this->Age = "il film è vecchio";
        }
        
        
    }

    public function Print(){
        echo '<div class="film">';
        echo "<p> Nome :" . $this->nome . "</p>";
        echo "<p> Genere :" . $this->genere . "</p>";
        echo "<p> Regista :" .$this->regista . "</p>";
        echo "<p> Anno :" . $this->anno . "</p>";
        echo "<p>". $this->Age . "</p>";
        echo "</div>";
        
    }
}