<?php
//João Filipe, 13568
	class DB 
	{
		var $connection;

		public function __construct()
		{
			$this->bd = $bd;
		}

		function connect()
		{
			$this->connection = mysql_connect("localhost","root","");

		    if (!$this->connection)
		    {
		    	die('Could not connect:'. mysql_error());
		    }

	   		mysql_select_db("tg2", $this->connection);
	    }

	    function close()
	    {
	    	mysql_close($this->connection);
	    }
	}

?>