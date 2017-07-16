<?php
/* Smarty version 3.1.30, created on 2017-02-15 19:26:52
  from "C:\xampp\htdocs\DaW\DAW_EN_P2_13568\View\templates\Aluno.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a49d6c966361_14520760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c68d4f90f906a39813f4a797b0e256f2f7ad1e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaW\\DAW_EN_P2_13568\\View\\templates\\Aluno.tpl',
      1 => 1487178150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a49d6c966361_14520760 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--João Filipe, 13568 -->
<section id="separador">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="col-md-4 div_padding active">
          <a class="div_nav" href="#">Horário Pessoal</a>
        </div>
        <div class="col-md-4 div_padding">
          <a class="div_nav" href="#">Horário Externo</a>   
        </div>
      </div>  
    </div>
  </div>
</section>

<section id="header_selects">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-8">
          <p>Horário Pessoal</p>
        </div>
        <div class="col-md-4 selects">

          <select id="filter">
          <?php ob_start();
echo $_smarty_tpl->tpl_vars['totalSemestresBD']->value;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_prefixVariable1+1 - (0) : 0-($_prefixVariable1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['semestresListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['semestre'];?>
</option>
          <?php }
}
?>
  
          </select>

          <select id="filter_ano">
          <?php ob_start();
echo $_smarty_tpl->tpl_vars['totalAnosBD']->value;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_prefixVariable2+1 - (0) : 0-($_prefixVariable2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['anosListBD']->value[$_smarty_tpl->tpl_vars['i']->value]['ano_lectivo'];?>
</option>
          <?php }
}
?>
  

          </select>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="section_table">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-8">
        <table class="table table-bordered tablecolor">
          <thead>
            <tr>
            <th></th>
            <th>2ªF</th>
            <th>3ªF</th>
            <th>4ªF</th>
            <th>5ªF</th>
            <th>6ªF</th>
            </tr>
            </thead>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['sizeHoras']->value;
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->tpl_vars['hora'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['hora']->step = 1;$_smarty_tpl->tpl_vars['hora']->total = (int) ceil(($_smarty_tpl->tpl_vars['hora']->step > 0 ? $_prefixVariable3+1 - (0) : 0-($_prefixVariable3)+1)/abs($_smarty_tpl->tpl_vars['hora']->step));
if ($_smarty_tpl->tpl_vars['hora']->total > 0) {
for ($_smarty_tpl->tpl_vars['hora']->value = 0, $_smarty_tpl->tpl_vars['hora']->iteration = 1;$_smarty_tpl->tpl_vars['hora']->iteration <= $_smarty_tpl->tpl_vars['hora']->total;$_smarty_tpl->tpl_vars['hora']->value += $_smarty_tpl->tpl_vars['hora']->step, $_smarty_tpl->tpl_vars['hora']->iteration++) {
$_smarty_tpl->tpl_vars['hora']->first = $_smarty_tpl->tpl_vars['hora']->iteration == 1;$_smarty_tpl->tpl_vars['hora']->last = $_smarty_tpl->tpl_vars['hora']->iteration == $_smarty_tpl->tpl_vars['hora']->total;?>
              <tr>
              <th> <?php echo $_smarty_tpl->tpl_vars['horas']->value[$_smarty_tpl->tpl_vars['hora']->value];?>
 </th>
              <?php if ($_smarty_tpl->tpl_vars['hora']->value < 4) {?>
                <th><?php echo $_smarty_tpl->tpl_vars['disc1']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['disc2']->value;?>
</th> 
              <?php } else { ?>
                <th></th>
                <th></th>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['hora']->value < 2) {?>
                <th><?php echo $_smarty_tpl->tpl_vars['disc3']->value;?>
</th>
              <?php } else { ?>
                <th></th>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['hora']->value < 3) {?>
                <th><?php echo $_smarty_tpl->tpl_vars['disc4']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['disc5']->value;?>
</th> 
              <?php } else { ?>
                <th></th>
                <th></th>
              <?php }?>
            <?php }
}
?>

            </tr>
          </table>
        </div>
        <div class="col-md-4">
        <p>Opções</p>
        <a href="#">Imprimir<br></a>
        <a href="#">Descarregar</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }
}
