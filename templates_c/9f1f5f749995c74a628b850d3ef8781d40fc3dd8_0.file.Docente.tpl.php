<?php
/* Smarty version 3.1.30, created on 2017-02-15 19:32:54
  from "C:\xampp\htdocs\DaW\DAW_EN_P2_13568\View\templates\Docente.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a49ed656c307_69649478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1f5f749995c74a628b850d3ef8781d40fc3dd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaW\\DAW_EN_P2_13568\\View\\templates\\Docente.tpl',
      1 => 1487178214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a49ed656c307_69649478 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--João Filipe, 13568 -->
<section id="separador">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="col-md-4 div_padding active">
          <a class="div_nav" href="#">Restrições de Horário</a>
        </div>
        <div class="col-md-4 div_padding">
          <a class="div_nav" href="#">Horário Pessoal</a>   
        </div>
      </div>  
    </div>
  </div>
</section>

<section id="section_model">
  <div class="container">
    <div class="row">
      <div class="col-md-10">

        <form id="myForm" method="POST" action="horario.php?restricao=1&action=addResctricao">
          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Sala:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ex: S10" name="sala">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Hora Inicial: *</label>
            <div class="col-sm-10">
              <select class="form-control" name="hora_inicial">
                  <option VALUE="8:00" selected="">8:00</option>
                  <option VALUE="9:00">9:00</option>
                  <option VALUE="10:00">10:00</option>
                  <option VALUE="10:00">10:00</option>
                  <option VALUE="11:00">11:00</option>
                  <option VALUE="12:00">12:00</option>
                  <option VALUE="13:00">13:00</option>
                  <option VALUE="14:00">14:00</option>
                  <option VALUE="15:00">15:00</option>
                  <option VALUE="16:00">16:00</option>
                  <option VALUE="17:00">17:00</option>
                  <option VALUE="18:00">18:00</option>
                  <option VALUE="19:00">19:00</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Hora Final: *</label>
            <div class="col-sm-10">
              <select class="form-control" name="hora_final">
                  <option VALUE="9:00" selected>9:00</option>
                  <option VALUE="10:00">10:00</option>
                  <option VALUE="10:00">10:00</option>
                  <option VALUE="11:00">11:00</option>
                  <option VALUE="12:00">12:00</option>
                  <option VALUE="13:00">13:00</option>
                  <option VALUE="14:00">14:00</option>
                  <option VALUE="15:00">15:00</option>
                  <option VALUE="16:00">16:00</option>
                  <option VALUE="17:00">17:00</option>
                  <option VALUE="18:00">18:00</option>
                  <option VALUE="19:00">19:00</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Dia Semanal: *</label>
            <div class="col-sm-10">
              <select class="form-control" name="dia_semana">
                  <option VALUE="2ºF" selected>2ºF</option>
                  <option VALUE="3ºF">3ºF</option>
                  <option VALUE="4ºF">4ºF</option>
                  <option VALUE="5ºF">5ºF</option>
                  <option VALUE="6ºF">6ºF</option>
              </select>
            </div>
          </div>
            
          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Descrição: *</label>
            <div class="col-sm-10">
              <input id="desc" type="text" class="form-control" placeholder="Descrição da Restrição" name="disc" required>
            </div>
          </div>

          <div class="form-group row">
            <p>* Campos obrigatorios</p>
          </div>
           <button type="submit" class="btn btn-success">Enviar Restrição</button>
           <button type="button" class="btn btn-success" onclick="window.location='horario.php?restricao=1';">Atualizar Lista</button>
          </form>
      </div>
    </div>
  </div>
</section>

<section class="accordions">
 <div class="container">
  <p><strong>Restrições Enviadas</strong></p>
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
      </div>
    </div>
    </div>
  </div>  
  <?php }
}
?>

  </div>
</div>
</section>
<?php }
}
