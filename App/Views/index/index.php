<section class="container-fluid h-100">
	<section class="row h-100">

		<section class="col-md-4 banner">
			<section class="row h-100 justify-content-center align-items-center">
				<section>
					<section class="communicationItem">
						<i class="fas fa-search fa-2x mr-3"></i>
						Siga o que lhe interessa.
					</section>
					<section class="communicationItem">
						<i class="fas fa-user-friends fa-2x mr-3"></i>
						Saiba sobre o que as pessoas estão falando.
					</section>
					<section class="communicationItem">
						<i class="far fa-comment fa-2x mr-3"></i>
						Participe da conversa.
					</section>
				</section>
			</section>
		</section>

		<section class="col-md-8 pt-4 pl-5 pr-5">
			<form method="POST" action="/autenticar">
				<section class="row">
					<section class="col">
						<input name="email" type="text" class="form-control" placeholder="E-mail">
					</section>
					<section class="col">
						<input name="senha" type="password" class="form-control" placeholder="Senha">
					</section>
					<section class="col-auto">
						<button type="submit" class="btn btn-primary mb-2">Entrar</button>
					</section>
				</section>
				<?php if($this->view->login == 'erro'){ ?>
					<section class="row">
						<section class="col">
							<span class="text text-danger">E-mail e/ou senha inválido(s).</span>
						</section>
					</section>
				<?php } ?>

				<section class="row pt-5 pl-5 pr-5">
					<section class="col pl-5 pr-5">
						<img src="../Assets/img/twitter.png" />
						<h1 class="title">Veja o que está acontecendo no mundo agora</h1>

						<h2 class="mt-5 subtitle">Participe hoje do Twitter.</h2>

						<a href="/inscrever" class="btn btn-primary btn-block mb-2">Inscrever-se</a>
					</section>
				</section>


		</section>

	</section>
</section>