<?php
/* Smarty version 3.1.30, created on 2017-02-15 19:42:25
  from "C:\xampp\htdocs\DaW\DAW_EN_P2_13568\View\templates\Coordenador.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a4a111c7b394_72007376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5232c30593178aff55347bb36c2da0c1d1b857b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaW\\DAW_EN_P2_13568\\View\\templates\\Coordenador.tpl',
      1 => 1487178207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a4a111c7b394_72007376 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--João Filipe, 13568 -->
<section id="separador">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="col-md-4 div_padding active">
          <a class="div_nav" href="#">Restrições</a>
        </div>
        <div class="col-md-4 div_padding">
          <a class="div_nav" href="#">Unidades Curriculares</a>   
        </div>
      </div>  
    </div>
  </div>
</section>

<section class="accordions">
 <div class="container">
  <p><strong>Restrições Recebidas</strong></p>
  
  <div id="accordion" role="tablist" aria-multiselectable="true">
  <?php ob_start();
echo $_smarty_tpl->tpl_vars['totalrestricoes']->value;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_prefixVariable1+1 - (0) : 0-($_prefixVariable1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
  <div class="panel-group">
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h5 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $_smarty_tpl->tpl_vars['getListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['id_restricao'];?>
" aria-expanded="true" aria-controls="<?php echo $_smarty_tpl->tpl_vars['idListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['id_restricao'];?>
">
          <?php echo $_smarty_tpl->tpl_vars['getListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['nome'];?>

        </a>
      </h5>
    </div>
    <div id="<?php echo $_smarty_tpl->tpl_vars['getListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['id_restricao'];?>
" class="collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block panel-body">
          <p>Sala: <?php echo $_smarty_tpl->tpl_vars['getListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['sala'];?>
</p>
          <p>Hora Inicial: <?php echo $_smarty_tpl->tpl_vars['getListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['hora_inicial'];?>
</p>
          <p>Hora Final: <?php echo $_smarty_tpl->tpl_vars['getListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['hora_final'];?>
</p>
          <p>Dia da Semana: <?php echo $_smarty_tpl->tpl_vars['getListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['dia_semana'];?>
</p>
          <p>Descrição: <?php echo $_smarty_tpl->tpl_vars['getListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['descricao'];?>
</p>
          <button type="button" class="btn btn-success">Aprovar</button>
      </div>
    </div>
    </div>
  </div>  
  <?php }
}
?>

  </div>
</div>
</section><?php }
}
