<?php

class Veiculo {

    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
    echo "Andou<br>";
    }

    public function Parar() {
    echo "Parou<br>";
    }
}

class Carro extends Veiculo{


}

class Moto extends Veiculo{

}

$carro = new Carro();

$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;

$carro->Andar();

var_dump($carro);

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;

$moto->Parar();

// Incluindo linha teste para GIT

?>