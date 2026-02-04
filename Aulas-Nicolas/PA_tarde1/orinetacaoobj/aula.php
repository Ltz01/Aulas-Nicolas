<?php

    class Automovel{
        public $modelo;
        public $ano;
        public $motor;

        function __construct(string $modelo, float $ano, string $motor){
            
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->ano = $ano;
        }

        function dirigir(){
            echo "{$this->modelo} ta andando<br>";
        }
        function virar(){
            echo "{$this->modelo} ta virando<br>";
        }
        function tras(){
            echo "{$this->modelo} ta dando ré<br><br>";
        }
    }

    $carro = new Automovel("Carro", 2019, "GF198");

    $carro->dirigir();
    $carro->virar();
    $carro->tras();


    $moto = new Automovel("Moto", 2012, "GF100");

    $moto->dirigir();
    $moto->virar();
    $moto->tras();

    $onibus = new Automovel("Onibus", 2022, "GF001");

    $onibus->dirigir();
    $onibus->virar();
    $onibus->tras();


    class Animal{
        public $especie;
        public $idade;
        public $nome;

        function __construct(string $especie, float $idade, string $nome){

            $this->especie = $especie;
            $this->idade = $idade;
            $this->nome = $nome;
        }

        function andar(){
            echo "{$this->nome} ta andando<br>";
        }
        function perigo(){
            echo "{$this->nome} é perigoso<br><br>";
        }
    }

    $cachorro = new Animal("Cachorro", 12, "Max");

    $cachorro->andar();
    $cachorro->perigo();

    $hiena = new Animal("Hiena", 20, "Peter");

    $hiena->andar();
    $hiena->perigo();

    $taturana = new Animal("Taturana", 185, "Black");

    $taturana->andar();
    $taturana->perigo();

    class Filme{
        public $genero;
        public $ano;
        public $nome;

        function __construct(string $genero, float $ano, string $nome){
            
            $this->genero = $genero;
            $this->ano = $ano;
            $this->nome = $nome;
        }

        function filme(){
            echo "O filme {$this->nome} do ano de {$this->ano} é do genero de {$this->genero}<br>";
        }
    }

    $homemaranha = new Filme("ficção científica", 2020, "Homem aranha");
    $quarteto = new Filme("superheroi", 2024, "Quarteto fantático");
    $vf = new Filme("corrida", 2014, "Velozes e furiosos");

    $homemaranha->filme();
    $quarteto->filme();
    $vf->filme();