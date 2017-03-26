<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hackathon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="top">
      <div class="container">
        <div class="flex-top">
          <img src="//placehold.it/120x70" alt="Logo">
          <!-- <a href="#" class="btn btn-default">Sair</a> -->
        </div>
      </div>
    </div>
    <div class="topo-admin">
      <div class="jumbotron">
        <div class="banner">
          <div class="image">
            <img src="//placehold.it/1920x200" alt="" class="img-responsive">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <aside class="pull-left col-md-4">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="listagem-alunos.php" title="Listar alunos">
                Alunos
              </a>
            </li>
            <li class="list-group-item">
              <a href="listagem-empresas.php" title="Listar empresas">
                Empresas
              </a>
            </li>
            <li class="list-group-item">
              <a href="listagem-vagas.php" title="Listar vagas">
                Vagas
              </a>
            </li>
          </ul>
        </aside>
        <div class="pull-right col-md-8">
          <form class="form">
            <div class="form-group">
              <label for="carga">Nome:*</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="carga">Idade:*</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="carga">Escolaridade:*</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="description">Competências*</label>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Competência 1">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Competência 2">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Competência 3">
              </div>
            </div>
            <div class="form-group">
              <label for="carga">Idiomas:*</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="description">Interesses*</label>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Interesse 1">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Interesse 2">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Interesse 3">
              </div>
            </div>
            <a href="#" class="btn btn-success"><i class="fa fa-check"></i> Salvar</a>
          </form>
        </div>
      </div>
    </div>


    <footer class="footer">
      <div class="container">
        <div class="flex-footer">
          <ul class="footer-itens">
            <li>
              <i class="fa fa-phone"></i>
              <a href="#">51 0000 0000</a> \ <a href="#">51 0000 0000</a>
            </li>
            <li>
              <i class="fa fa-envelope"></i>
              <a href="#">institucional@paodospobres.com.br</a>
            </li>
          </ul>
          <ul class="footer-redes">
            <li>
              <a href="#" class="fb">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="#" class="yt">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
