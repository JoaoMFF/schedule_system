<?php 
//João Filipe, 13568

include_once('Controller/controller.php');
		
if(isset($_GET['controller'])) 
{
	$controller = new Controller($_GET['controller']);
} 
else 
{
	$controller = new Controller(['index']);
}

?>