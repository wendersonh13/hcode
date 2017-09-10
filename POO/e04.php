<?php

	class Endereco {

		private $lagradouro;
		private $numero;
		private $cidade;

		public function __construct ($a, $b, $c){

			$this->lagradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}

		public function __destruct(){

//			var_dump("Destruir");
		}

		public function __toString(){

			return $this->lagradouro.", ".$this->numero. " - ".$this->cidade;
		}
	}

	$meuEndereco = new Endereco("Av Melo Viana", "119", "Manhuaçu");

//	var_dump($meuEndereco);
//	unset($meuEndereco)

	echo $meuEndereco;

?>