<?php
//João Filipe, 13568
class Restricao
{
	var $bd;

	function __construct($bd)
	{
		$this->bd = $bd;
	}

    public function getRestricao()
    {
        $restricao = array();

        $this->bd->connect();
        mysql_set_charset('utf8');
        $select = "SELECT * FROM `restricao` INNER JOIN utilizadores WHERE restricao.id_docente=utilizadores.id ORDER BY id_restricao";
        $query = mysql_query($select);
        $this->bd->close();
        $i = 0;

        while($row = mysql_fetch_array($query))
        {
            $restricao[$i]['id_restricao'] = $row['id_restricao'];
            $restricao[$i]['sala'] = $row['sala'];
            $restricao[$i]['hora_inicial'] = $row['hora_inicial'];
            $restricao[$i]['hora_final'] = $row['hora_final'];
            $restricao[$i]['dia_semana'] = $row['dia_semana'];
            $restricao[$i]['descricao'] = $row['descricao'];
            $restricao[$i]['nome'] = $row['nome'];
            $i++;
        }
        return $restricao;
    }

    public function insertDB($sala, $hora_inicial, $hora_final, $dia_semana, $disc, $id_docente) 
    {
        $this->bd->connect();
        mysql_set_charset('utf8');
		$insert = "INSERT INTO restricao (id_restricao, sala, hora_inicial, hora_final, dia_semana, descricao, id_docente) VALUES (NULL, '$sala', '$hora_inicial', '$hora_final', '$dia_semana', '$disc', '$id_docente')";

        $query = mysql_query($insert);
		$this->bd->close();
	}

    public function getRestricaoDocente($docente)
    {
        $restricao = array();

        $this->bd->connect();
        mysql_set_charset('utf8');
        $select = "SELECT * FROM `restricao` INNER JOIN utilizadores WHERE restricao.id_docente=utilizadores.id AND restricao.id_docente='$docente' ORDER BY id_restricao";
        $query = mysql_query($select);
        $this->bd->close();
        $i = 0;

        while($row = mysql_fetch_array($query))
        {
            $restricao[$i]['id_restricao'] = $row['id_restricao'];
            $restricao[$i]['sala'] = $row['sala'];
            $restricao[$i]['hora_inicial'] = $row['hora_inicial'];
            $restricao[$i]['hora_final'] = $row['hora_final'];
            $restricao[$i]['dia_semana'] = $row['dia_semana'];
            $restricao[$i]['descricao'] = $row['descricao'];
            $restricao[$i]['nome'] = $row['nome'];
            $i++;
        }
        return $restricao;
    }
}
?>