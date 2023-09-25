<section class="container">
  <section class="d-flex justify-content-center mt-5">
    <section class="card" style="width: 36rem;">
      <section class="card-body">

        <section class="d-flex justify-content-center">
          <img src="../Assets/img/twitter.png" />
        </section>

        <section class="row ms-1">
          <section class="col">
            <h2>Crie sua conta</h2>
          </section>
        </section>

        <section class="row mt-2">
          <section class="col">

            <form action="/registrar" method="post">
              <section class="form-group p-2">
                <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo $this->view->usuario['nome'] ?>">
              </section>

              <section class="form-group p-2">
                <input type="text" name="email" class="form-control" placeholder="E-mail" value="<?php echo $this->view->usuario['email'] ?>">
              </section>

              <section class="form-group p-2">
                <input type="password" name="senha" class="form-control" placeholder="Senha" value="<?php echo $this->view->usuario['senha'] ?>">
              </section>

              <section class="mt-4 mb-4 ms-2">
                <small class="form-text">
                  Ao inscrever-se, você concorda com os Termos de Serviço e com as Políticas de Privacidade, incluindo o
                  Uso de Cookies. Outras pessoas poderão encontrar você pelo e-mail ou número de telefone fornecido ·
                  Opções de Privacidade
                </small>
              </section>
              <section class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Inscrever-se</button>
                <?php
                  if($this->view->erroCadastro) { ?>
                    <small class="form-text text-danger">
                        Erro ao tentar realizar o cadastro, verifique se os campos foram
                        preenchidos corretamente.
                    </small>
                  <?php } ?> 
              </section>
            </form>

          </section>
        </section>

      </section>
    </section>
  </section>
</section>