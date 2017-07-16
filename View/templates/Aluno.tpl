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
          {for $i = 0 to {$totalSemestresBD} step 1}
            <option value="{$i+1}">{$semestresListBD[$i]['semestre']}</option>
          {/for}  
          </select>

          <select id="filter_ano">
          {for $i = 0 to {$totalAnosBD} step 1}
            <option value="{$i+1}">{$anosListBD[$i]['ano_lectivo']}</option>
          {/for}  

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
            {for $hora = 0 to {$sizeHoras} step 1}
              <tr>
              <th> {$horas[$hora]} </th>
              {if $hora < 4}
                <th>{$disc1}</th>
                <th>{$disc2}</th> 
              {else}
                <th></th>
                <th></th>
              {/if}
              {if $hora < 2}
                <th>{$disc3}</th>
              {else}
                <th></th>
              {/if}
              {if $hora < 3}
                <th>{$disc4}</th>
                <th>{$disc5}</th> 
              {else}
                <th></th>
                <th></th>
              {/if}
            {/for}
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
