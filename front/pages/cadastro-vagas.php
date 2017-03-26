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
    <header class="header">
      <div class="container">
        <div class="flex-top">
          <img src="//placehold.it/120x70/000/fff" alt="Logo">
          <ul class="main-menu">
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Quem somos</a>
            </li>
            <li>
              <a href="#">Lorem Ipsum</a>
            </li>
          </ul>
          <a href="#" class="btn btn-default">Acessar</a>
        </div>
      </div>
    </header>

    <main class="content home">
      <div class="container">
        <h1>Cadastro de vagas</h1>

        <form class="form">
          <div class="form-group">
            <label for="description">Descrição da vaga*</label>
            <textarea name="description" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="description">Requisitos*</label>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Requisito 1">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Requisito 2">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Requisito 3">
            </div>
          </div>
          <div class="form-group">
            <label for="carga">Carga horária:*</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="faixa">Faixa salarial:*</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="beneficios">Benefícios:*</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="local">Local:*</label>
            <input type="text" class="form-control">
          </div>
          <a href="#" class="btn btn-success"><i class="fa fa-check"></i> Salvar</a>
        </form>
      </div>
    </main>

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
