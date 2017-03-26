<?php
  include('../partials/header.php');
?>

<main class="home-empresa">
  <?php include('../partials/topo-empresa.php'); ?>

  <div class="container">
    <div class="content-page" id="home-empresa">
      <div class="topo-home-empresa">
        <h2 class="title-page">Vagas</h2>

        <a href="cadastro-vagas.php" title="Cadastrar página" class="btn btn-primary pull-right">
          Cadastra vaga
        </a>
      </div>

      <div class="list-vagas">
        <div class="item-vaga" v-for="v in vagas">
          <div class="main-infos">
            <h3>{{ v.Nome }}</h3>
            <div class="description">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>
          </div>
          <div class="qtd-indicados">
            <span class="qtd">10</span>
            indicados
          </div>
          <div class="action">
            <a href="vaga.php">
              <img src="../images/chevron-right.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
  include('../partials/footer.php');
?>
