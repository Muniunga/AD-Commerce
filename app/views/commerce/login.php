<?php
$this->view("/header",$dados) 
//include_once ""
?>
	<section id="form" style="margin: 5px 0 85px 0;">
		<div class="container">
			<div class="row" style="text-align: center;">
				<div class="col-sm-4 col-sm-offset-1" style="float:none; display: inline-block;">
					<div class="login-form"><!--login form-->
						<h2>Entrar</h2>
						<form action="#">
							<input type="text" placeholder="Nome " />
							<input type="password" placeholder="Palavra-passe " />
							<span>
								<input type="checkbox" class="checkbox"> 
								Manter-me logado							
							</span>
							<button type="submit" class="btn btn-default">Entar</button>
						</form>
						<a href="<?= ROTA?>criarConta">Não tem uma conta? Criar conta</a>
					</div><!--/login form-->
				</div>
				
			</div>
		</div>
	</section><!--/form-->
	
	<?php
	$this->view("/footer") 
//include_once ""
?>

  
 
