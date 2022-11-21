<?php
$this->view("/header", $dados)
//include_once ""
?>

	<section id="form" style="margin: 5px 0 85px 0;">
		<!--form-->
		<div class="container" style="text-align: center;">
			<div class="row">


				<div class="col-sm-4" style="float:none; display: inline-block;">
					<div class="signup-form">
						<!--sign up form-->
						<h2>Criar nova conta!</h2>
						<form action="#" method="POST">
							<input name="nome" type="text" placeholder="Nome" />
							<input name="email" type="email" placeholder="Email" />
							<input name="dataNasc" type="date" placeholder="Data de Nascimento" />
							<input name="palavraPasse" type="password" placeholder="Palavra-passe" />
							<input name="palavraPasse2" type="password" placeholder="Confirmar Palavra-passe" />
							<button type="submit" class="btn btn-default">Criar Conta</button>
						</form>
					</div>
					<!--/sign up form-->
				</div>
			</div>
		</div>
	</section>

<!--/form-->

<?php
$this->view("/footer")
//include_once ""
?>