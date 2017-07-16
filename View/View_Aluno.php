<!-- João Filipe, 13568 -->
<?php
	include_once('Model/model.php');
    session_start();
	define('SMARTY_DIR','libs/smarty-3.1.30/libs/');
	define('SMARTY_TPL','View/templates/');
	define('SMARTY_CPL','View/templates/compile/');
	require_once(SMARTY_DIR.'Smarty.class.php');

	$smarty = new Smarty;

    class View_Aluno_Header
    {
        public function __construct($model) 
        {       
            global $smarty;
            $smarty->assign('session', $_SESSION['nome']);

            $smarty->display(SMARTY_TPL.'Header.tpl');
        }
    }

	class View_1semestre
	{
		var $horas = array("09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00");

		public function __construct($model) 
		{		
			global $smarty;

			//Assign do ano lectivo
        	$smarty->assign("totalAnosBD", sizeof($model->anolectivo->getAno()['ano_lectivo'])+1);
        	$smarty->assign("anosListBD", $model->anolectivo->getAno());
        	//Assign do semestre
        	$smarty->assign("totalSemestresBD", sizeof($model->semestre->getSemestre()['semestre'])+1);
        	$smarty->assign("semestresListBD", $model->semestre->getSemestre());
        	//Assign do array horas
        	$smarty->assign("sizeHoras", sizeof($this->horas)-1);
        	$smarty->assign("horas", $this->horas);
        	//Assign das disciplinas
        	$smarty->assign("disc1", $model->horario->getHorario()[0]['disciplina']);
        	$smarty->assign("disc2", $model->horario->getHorario()[1]['disciplina']);
        	$smarty->assign("disc3", $model->horario->getHorario()[2]['disciplina']);
        	$smarty->assign("disc4", $model->horario->getHorario()[3]['disciplina']);
        	$smarty->assign("disc5", $model->horario->getHorario()[4]['disciplina']);

        	$smarty->display(SMARTY_TPL.'Aluno.tpl');
		}
	}

	class View_2Semestre
	{
		var $horas = array("09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00");

		public function __construct($model) 
		{		
			global $smarty;
			//Assign do ano lectivo
        	$smarty->assign("totalAnosBD", sizeof($model->anolectivo->getAno()['ano_lectivo'])+1);
        	$smarty->assign("anosListBD", $model->anolectivo->getAno());
        	//Assign do semestre
        	$smarty->assign("totalSemestresBD", sizeof($model->semestre->getSemestre()['semestre'])+1);
        	$smarty->assign("semestresListBD", $model->semestre->getSemestre());
        	//Assign do array horas
        	$smarty->assign("sizeHoras", sizeof($this->horas)-1);
        	$smarty->assign("horas", $this->horas);
        	//Assign das disciplinas
        	$smarty->assign("disc6", $model->horario->getHorario()[5]['disciplina']);
        	$smarty->assign("disc7", $model->horario->getHorario()[6]['disciplina']);
        	$smarty->assign("disc8", $model->horario->getHorario()[7]['disciplina']);
        	$smarty->assign("disc9", $model->horario->getHorario()[8]['disciplina']);
        	$smarty->assign("disc10", $model->horario->getHorario()[9]['disciplina']);

        	$smarty->display(SMARTY_TPL.'Aluno_2Semestre.tpl');
		}
	}

    class View_1semestre_2015_2016
    {
        var $horas = array("09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00");

        public function __construct($model) 
        {       
            global $smarty;
            //Assign do ano lectivo
            $smarty->assign("totalAnosBD", sizeof($model->anolectivo->getAno()['ano_lectivo'])+1);
            $smarty->assign("anosListBD", $model->anolectivo->getAno());
            //Assign do semestre
            $smarty->assign("totalSemestresBD", sizeof($model->semestre->getSemestre()['semestre'])+1);
            $smarty->assign("semestresListBD", $model->semestre->getSemestre());
            //Assign do array horas
            $smarty->assign("sizeHoras", sizeof($this->horas)-1);
            $smarty->assign("horas", $this->horas);
            //Assign das disciplinas
            $smarty->assign("disc1", $model->horario->getHorario()[0]['disciplina']);
            $smarty->assign("disc2", $model->horario->getHorario()[1]['disciplina']);
            $smarty->assign("disc3", $model->horario->getHorario()[2]['disciplina']);
            $smarty->assign("disc4", $model->horario->getHorario()[3]['disciplina']);
            $smarty->assign("disc5", $model->horario->getHorario()[4]['disciplina']);

            $smarty->display(SMARTY_TPL.'Aluno_1Semestre_2015_2016.tpl');
        }
    }

    class View_2semestre_2015_2016
    {
        var $horas = array("09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00");

        public function __construct($model) 
        {       
            global $smarty;
            //Assign do ano lectivo
            $smarty->assign("totalAnosBD", sizeof($model->anolectivo->getAno()['ano_lectivo'])+1);
            $smarty->assign("anosListBD", $model->anolectivo->getAno());
            //Assign do semestre
            $smarty->assign("totalSemestresBD", sizeof($model->semestre->getSemestre()['semestre'])+1);
            $smarty->assign("semestresListBD", $model->semestre->getSemestre());
            //Assign do array horas
            $smarty->assign("sizeHoras", sizeof($this->horas)-1);
            $smarty->assign("horas", $this->horas);
            //Assign das disciplinas
            $smarty->assign("disc6", $model->horario->getHorario()[5]['disciplina']);
            $smarty->assign("disc7", $model->horario->getHorario()[6]['disciplina']);
            $smarty->assign("disc8", $model->horario->getHorario()[7]['disciplina']);
            $smarty->assign("disc9", $model->horario->getHorario()[8]['disciplina']);
            $smarty->assign("disc10", $model->horario->getHorario()[9]['disciplina']);

            $smarty->display(SMARTY_TPL.'Aluno_2Semestre_2015_2016.tpl');
        }
    }
		
 ?>