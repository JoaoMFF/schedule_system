<?php
/* Smarty version 3.1.30, created on 2017-02-15 19:26:52
  from "C:\xampp\htdocs\DaW\DAW_EN_P2_13568\View\templates\Header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a49d6c8efd33_09779188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'debaeed29bdfb87db124ed284d88f4b90492e433' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaW\\DAW_EN_P2_13568\\View\\templates\\Header.tpl',
      1 => 1487178221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a49d6c8efd33_09779188 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="intro">
    <div class="intro-body" style="background-color: green">
        <div class="container" >
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-8">
                   <h1>Sistema de Gestão de Horários</h1>
                </div>
                <div class="col-md-4 logout">
                  <?php echo $_smarty_tpl->tpl_vars['session']->value;?>
 <a type="button" href="./horario.php?login=1" class="btn btn-danger">Sair</a>
                </div>
              </div>
            </div>
        </div>
    </div>
</section><?php }
}
