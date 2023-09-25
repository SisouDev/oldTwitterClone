<nav class="navbar navbar-expand-lg menu">
	<section class="container">
	  <section class="navbar-nav">
	  	<a class="menuItem" href="/timeline">
	  		Home
	  	</a>

	  	<a class="menuItem" href="/sair">
	  		Sair
	  	</a>
			<img src="../Assets/img/twitter.png" class="menuIco" />
	  </section>
	</section>
</nav>

<section class="container mt-5">
	<section class="row pt-2">
		
		<section class="col-md-3">

			<section class="perfil">
				<section class="perfilTopo">

				</section>

				<section class="perfilPainel">
					
					<section class="row mt-2 mb-2">
						<section class="col mb-2">
							<span class="perfilPainelNome">Nome do Usuário</span>
						</section>
					</section>

					<section class="row mb-2">

						<section class="col">
							<span class="perfilPainelItem">Tweets</span><br />
							<span class="perfilPainelItemValor">0</span>
						</section>

						<section class="col">
							<span class="perfilPainelItem">Seguindo</span><br />
							<span class="perfilPainelItemValor">0</span>
						</section>

						<section class="col">
							<span class="perfilPainelItem">Seguidores</span><br />
							<span class="perfilPainelItemValor">0</span>
						</section>

					</section>

				</section>
			</section>

		</section>

		<section class="col-md-6">
			
			<section class="row mb-2">
				<section class="col">
					<section class="card">
						<section class="card-body">
							<form action="/quem_seguir" method="get">
								<section class="input-group mb-3">
									<input name="pesquisarPor" type="text" class="form-control" placeholder="Quem você está procurando?">
									<section class="input-group-append">
										<button class="btn btn-primary" type="submit">Procurar</button>
									</section>
								</section>
							</form>
						</section>
					</section>
				</section>
			</section>

			<section class="row mb-2">
				<section class="col">
					<section class="card">
						<section class="card-body">
							<section class="row">
								<section class="col-md-6">
									Usuário
								</section>
							
								<section class="col-md-6 d-flex justify-content-end">
									<section>
										<a href="#" class="btn btn-success">Seguir</a>
										<a href="#" class="btn btn-danger">Deixar de seguir</a>
									</section>
								</section>
							</section>
						</section>
					</section>
				</section>
			</section>

		</section>
	</section>
</section>