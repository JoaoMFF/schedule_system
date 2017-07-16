<!-- João Filipe, 13568 -->
<?php
	include_once('Model/model.php');
	session_start();
	define('SMARTY_DIR','libs/smarty-3.1.30/libs/');
	define('SMARTY_TPL','View/templates/');
	define('SMARTY_CPL','View/templates/compile/');
	require_once(SMARTY_DIR.'Smarty.class.php');

	$smarty = new Smarty;

	class View_Restricao
	{
		public function __construct($model) 
		{		
			global $smarty;
			//print_r($_SESSION); 
			$smarty->assign("totalrestricoes", sizeof($model->restricao->getRestricaoDocente($_SESSION['id_utilizador']))-1);
            $smarty->assign("getListBD", $model->restricao->getRestricaoDocente($_SESSION['id_utilizador']));

        	$smarty->display(SMARTY_TPL.'Docente.tpl');
		}
	}	

	class View_Docente_Header
	{
        public function __construct($model) 
        {       
            global $smarty;
            $smarty->assign('session', $_SESSION['nome']);

            $smarty->display(SMARTY_TPL.'Header.tpl');
        }
	}
?>