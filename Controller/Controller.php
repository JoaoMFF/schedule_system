<?php
error_reporting(E_ALL & ~E_NOTICE ^ E_DEPRECATED);
	//João Filipe, 13568
	include_once('View/View.php');
	include_once('View/View_Aluno.php');
	include_once('View/View_Docente.php');
	include_once('View/View_Coordenador.php');
	include_once('View/View_Login.php');
	include_once('Model/model.php');
	include_once('Model/db.php');

	class Controller{

		var $bd;
		var $view;
		var $model;

		public function __construct()
		{
			$this->model = new Model();

			if (isset($_GET['login']) && $_GET['login']=="1")
			{
            	$this->view = new View_Login($this->model);

            	if (isset($_GET['action']) && $_GET['action']=="login")
				{
					$user = $_POST['username'];
					$pass = $_POST['password'];

					$this->model->login->user_auth($user, $pass);

					if(isset($_SESSION['username']))
					{
						switch ($_SESSION['type']) 
						{
							case 1:
								Header( "Location: horario.php?ano=1&semestre=1" );
								break;
							case 2:
								Header( "Location: horario.php?restricao=1" );
								break;
							case 3:
								Header( "Location: horario.php?coord=1" );
								break;
							default:
								Header( "Location: horario.php?login=1" );
								break;
						}
					}
				}
			}

			if (isset($_GET['ano']) && $_GET['ano']=="1" && isset($_GET['semestre']) && $_GET['semestre']=="1")
			{
				$this->view = new View_Aluno_Header($this->model);
            	$this->view = new View_1semestre($this->model);
			}

			if (isset($_GET['ano']) && $_GET['ano']=="1" && isset($_GET['semestre']) && $_GET['semestre']=="2")
			{
				$this->view = new View_Aluno_Header($this->model);
            	$this->view = new View_2semestre($this->model);
			}

			if (isset($_GET['ano']) && $_GET['ano']=="2" && isset($_GET['semestre']) && $_GET['semestre']=="1")
			{
				$this->view = new View_Aluno_Header($this->model);
            	$this->view = new View_1semestre_2015_2016($this->model);
			}

			if (isset($_GET['ano']) && $_GET['ano']=="2" && isset($_GET['semestre']) && $_GET['semestre']=="2")
			{
				$this->view = new View_Aluno_Header($this->model);
            	$this->view = new View_2semestre_2015_2016($this->model);
			}

			if (isset($_GET['restricao']) && $_GET['restricao']=="1")
			{
				$this->view = new View_Docente_Header($this->model);
            	$this->view = new View_Restricao($this->model);

            	if (isset($_GET['action']) && $_GET['action']=="addResctricao")
				{
	            	$sala=$_POST['sala'];
					$hora_inicial=$_POST['hora_inicial'];
					$hora_final=$_POST['hora_final'];
					$dia_semana=$_POST['dia_semana'];
					$disc=$_POST['disc'];
					$docente=$_SESSION['id_utilizador'];
	
	            	$this->model->restricao->insertDB($sala, $hora_inicial, $hora_final, $dia_semana, $disc, $docente);
				}
			}

			if (isset($_GET['coord']) && $_GET['coord']=="1")
			{
				$this->view = new View_Coor_Header($this->model);
            	$this->view = new View_ConsultarRestricao($this->model);
			}
		}
	}
?>