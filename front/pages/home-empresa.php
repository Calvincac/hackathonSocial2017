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
            <h3>{{ v.cargo }}</h3>
            <div class="description">
              <p>
                {{ v.descricao }}
              </p>
            </div>
          </div>
          <div class="action">
            <a v-bind:href="['vaga.php?id=' + v._id]">
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
<script src="../js/home-empresa.js"></script>
