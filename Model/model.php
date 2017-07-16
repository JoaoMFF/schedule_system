<?php
// João Filipe, 13568

include_once('Model/horario.php');
include_once('Model/anolectivo.php');
include_once('Model/semestre.php');
include_once('Model/restricao.php');
include_once('Model/login.php');

class Model
{
	var $anolectivo;
	var $semestre;
	var $horario;
	var $restricao;
	var $login;

	function __construct()
	{
		$this->bd = new DB();
		$this->login = new Login($this->bd);
		$this->anolectivo = new AnoLectivo($this->bd);
		$this->semestre = new Semestre($this->bd);
		$this->horario = new Horario($this->bd);
		$this->restricao = new Restricao($this->bd);
	}
}

?>