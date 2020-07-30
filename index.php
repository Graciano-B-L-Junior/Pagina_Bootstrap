<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Dev Web</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">GB Sistemas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Preços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Contato</a>
        </li>
      </ul>
    </div>
</nav>
    <div class="box">
    <section class="banner">
      <div class="overlay"></div>
      <div class="container chamada-banner">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>GB Sistemas</h2>
            <p>Empresa voltada para desenvolvimento web e marketing digital</p>
            <a href="">Saiba Mais</a>
          </div>
        </div>
        teste
      </div>
    </section>
    <section class="cadastro-lead">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center">
            <h2><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Entre para nossa lista</h2>
          </div>
          <div class="col-md-6">
            <form method="post">
              <input type="text" name="nome">
              <input type="submit" name="nome">
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="depoimento">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Depoimento</h2>
            <blockquote>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget nisi purus. Pellentesque id sollicitudin magna. Aenean eros nunc, posuere sit amet malesuada vel, hendrerit in nulla."</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <section class="diferenciais text-center">
      <h2>Conheça nossa empresa</h2>
      <div class="container diferenciais-container">
        <div class="row">
          <div class="col-md-4">
            <h3></h3>
            <h2>Diferencias #1</h2>
             <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget nisi purus. Pellentesque id sollicitudin magna. Aenean eros nunc, posuere sit amet malesuada vel, hendrerit in nulla."</p>
          </div>
          <div class="col-md-4">
            <h3></h3>
            <h2>Diferencias #2</h2>
             <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget nisi purus. Pellentesque id sollicitudin magna. Aenean eros nunc, posuere sit amet malesuada vel, hendrerit in nulla."</p>
          </div>
          <div class="col-md-4">
            <h3></h3>
            <h2>Diferencias #3</h2>
             <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget nisi purus. Pellentesque id sollicitudin magna. Aenean eros nunc, posuere sit amet malesuada vel, hendrerit in nulla."</p>
          </div>
        </div>
      </div>
    </section>

    <section class="equipe">
      <h2>Equipe</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-3">
                  <div class="user-picture"></div>
                </div>
                <div class="col-md-9">
                  <h3>Guilherme</h3>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget nisi purus. Pellentesque id sollicitudin magna. Aenean eros nunc, posuere sit amet malesuada vel, hendrerit in nulla."</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-3">
                  <div class="user-picture"></div>
                </div>
                <div class="col-md-9">
                  <h3>Guilherme</h3>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget nisi purus. Pellentesque id sollicitudin magna. Aenean eros nunc, posuere sit amet malesuada vel, hendrerit in nulla."</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="final-site">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form action="/action_page.php">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label>Mensagem:</label>
                <textarea class="form-control"></textarea>
              </div>
              <button style="background: green; color:white;" type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
          <div class="col-md-6">
  
                      <h2>Nossos planos</h2>
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Plano Semanal</th>
                                <th>Plano Diário</th>
                                <th>Plano Anual</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>

                              <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>

                               <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>
                            </tbody>
                          </table>
          </div>
        </div>
      </div>
    </section>
    <footer class="text-center">
      <p>Todos os direitos reservados</p>
    </footer>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>