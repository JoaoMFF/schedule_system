<?php
/* Smarty version 3.1.30, created on 2017-02-15 19:18:19
  from "C:\xampp\htdocs\DaW\DAW_EN_P2_13568\View\templates\Login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a49b6bc9fd92_20693745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4767b340ccec2517a1f414710a2400533203a800' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaW\\DAW_EN_P2_13568\\View\\templates\\Login.tpl',
      1 => 1487178227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a49b6bc9fd92_20693745 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="intro">
    <div class="intro-body" style="background-color: green">
        <div class="container" >
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-8">
                   <h1>Sistema de Gestão de Horários</h1>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<section id="section_login">
    <div class="container center_div">
	    <div class="row">
	    	<div class="col-md-12">
	    		<h1>Efectuar Sessão</h1>
				<form method="POST" action="horario.php?login=1&action=login" class="form-inline">
				  <label class="sr-only" for="inlineFormInput">Login</label>
				  <input type="text" name="username" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Login">

				  <label class="sr-only" for="inlineFormInputGroup">Password</label>
				  <input type="password" name="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">

				  <button type="submit" class="btn btn-success" value="Login">Entrar</button>
				</form>
			</div>
		</div>
	</div>
</section><?php }
}
