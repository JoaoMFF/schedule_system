<!-- João Filipe, 13568 -->
<?php
    include_once('Model/model.php');
    session_start();
    define('SMARTY_DIR','libs/smarty-3.1.30/libs/');
    define('SMARTY_TPL','View/templates/');
    define('SMARTY_CPL','View/templates/compile/');
    require_once(SMARTY_DIR.'Smarty.class.php');

    $smarty = new Smarty;

    class View_ConsultarRestricao
    {
        public function __construct($model) 
        {		
        	global $smarty;

            $smarty->assign("totalrestricoes", sizeof($model->restricao->getRestricao())-1);
            $smarty->assign("getListBD", $model->restricao->getRestricao());

            $smarty->display(SMARTY_TPL.'Coordenador.tpl');
        }
    }	

    class View_Coor_Header
    {
        public function __construct($model) 
        {       
            global $smarty;
            $smarty->assign('session', $_SESSION['nome']);

            $smarty->display(SMARTY_TPL.'Header.tpl');
        }
    }
?>