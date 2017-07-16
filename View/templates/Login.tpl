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
				  <input type="text" name="username" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Username">

				  <label class="sr-only" for="inlineFormInputGroup">Password</label>
				  <input type="password" name="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">

				  <button type="submit" class="btn btn-success" value="Login">Entrar</button>
				</form>
			</div>
		</div>
	</div>
</section>