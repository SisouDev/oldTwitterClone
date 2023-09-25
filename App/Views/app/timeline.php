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
                <section class="col tweetBox">
                    <form method="post" action="/tweet">
                        <textarea name="tweet" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                        <section class="col mt-2 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Tweet</button>
                        </section>

                    </form>
                </section>
            </section>

            <?php foreach($this->view->tweets as $id_tweet => $tweet){ ?>
                <section class="row tweet">
                    <section class="col">
                        <p><strong><?php echo $tweet['nome'] ?></strong><small><span class="text text-muted">- <?php echo $tweet['data'] ?></span></small></p>
                        <p><?php echo $tweet['tweet'] ?></p>

                        <br />
                        <form>
                            <section class="col d-flex justify-content-end">
                                <button type="submit" class="btn btn-danger"><small>Remover</small></button>
                            </section>
                        </form>
                    </section>
                </section>
        <?php } ?>
        </section>

        <section class="col-md-3">
            <section class="quemSeguir">
                <span class="quemSeguirTitulo">Quem seguir</span><br />
                <hr />
                <a href="/quem_seguir" class="quemSeguirTxt">Procurar por pessoas conhecidas</a>
            </section>
        </section>

    </section>
</section>