<?php
//João Filipe, 13568
class Login
{
	var $bd;

	function __construct($bd)
	{
		$this->bd = $bd;
	}

	function user_auth($user, $pass)
	{
		$this->bd->connect();
		mysql_set_charset('utf8');
		$sql = "SELECT username, pass, id_tipo_utilizador, nome, id_utilizador FROM logins INNER JOIN utilizadores WHERE username='$user' AND pass ='$pass' AND logins.id_utilizador=utilizadores.id";

		$result = mysql_query($sql);

		$this->bd->close();
		
		if (mysql_num_rows($result) > 0) 
		{
			//start session
			session_start();

			$_SESSION['username'] = $user;
			$values = mysql_fetch_array($result);
			$_SESSION['type'] = $values['id_tipo_utilizador'];
			$_SESSION['nome'] = $values['nome'];
			$_SESSION['id_utilizador'] = $values['id_utilizador'];
			return 1;
        } 
        else
			return 0;
	}
}	
?>