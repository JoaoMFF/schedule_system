<?php

//João Filipe, 13568
	
class Horario
{
	var $bd;

	function __construct($bd)
	{
		$this->bd = $bd;
	}

	public function getHorario()
	{
		$horario = array();
		$this->bd->connect();
		mysql_set_charset('utf8');
		$select = "SELECT * FROM Horario";
		$query = mysql_query($select);
		$this->bd->close();
		$i = 0;

		while($row = mysql_fetch_array($query))
		{
		    $horario[$i]['id_semestre'] = $row['id_semestre'];
		    $horario[$i]['id_ano_lectivo'] = $row['id_ano_lectivo'];
		    $horario[$i]['disciplina'] = $row['disciplina'];
		    $i++;
		}
		return $horario;
	}
}
?>