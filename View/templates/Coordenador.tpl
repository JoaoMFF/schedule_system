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
  {for $i = 0 to {$totalrestricoes} step 1}
  <div class="panel-group">
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h5 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#{$getListBD[$i]['id_restricao']}" aria-expanded="true" aria-controls="{$idListBD[$i]['id_restricao']}">
          {$getListBD[$i]['nome']}
        </a>
      </h5>
    </div>
    <div id="{$getListBD[$i]['id_restricao']}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block panel-body">
          <p>Sala: {$getListBD[$i]['sala']}</p>
          <p>Hora Inicial: {$getListBD[$i]['hora_inicial']}</p>
          <p>Hora Final: {$getListBD[$i]['hora_final']}</p>
          <p>Dia da Semana: {$getListBD[$i]['dia_semana']}</p>
          <p>Descrição: {$getListBD[$i]['descricao']}</p>
          <button type="button" class="btn btn-success">Aprovar</button>
      </div>
    </div>
    </div>
  </div>  
  {/for}
  </div>
</div>
</section>