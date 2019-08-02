<?php

class Carro {

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo() {
		return $this->modelo;
	}
	public function setModelo($modelo) {
		$this->modelo = $modelo;
	}

	public function getMotor() {
		return $this->motor;
	}
	public function setMotor($motor) {
		$this->motor = $motor;
	}
	public function getAno():int {
		return $this->ano;
	}
	public function setAno($ano) {
		$this->ano = $ano;
	}

	public function exibir() { //Método para exibir informação da classe Carro

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);

	}

}

$Palio = new Carro();
$Palio->setModelo("Palio");
$Palio->setMotor("1.0");
$Palio->setAno("2000");

var_dump($Palio->exibir());

?>