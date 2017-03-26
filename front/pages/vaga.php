<?php
  include('../partials/header.php');
?>

<main class="main vaga" id="vaga" v-model="vaga">
  <?php include('../partials/topo-empresa.php'); ?>

  <div class="container">
    <div class="content">
      <div class="row">
        <div class="flex-cols">
          <div class="col-xs-12 col-md-8">
            <h1>{{ vaga.cargo }}</h1>
            <p>
              {{ vaga.descricao }}
            </p>
            <h3>Benefícios</h3>
            <ul class="list-itens">
              <li>{{ vaga.beneficios }}</li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-4">
            <ul class="list-skills">
              <li class="money">
                <span>
                  Salário <strong>{{ vaga.faixa_salarial | currency }}</strong>
                </span>
              </li>
              <li>
                <i class="fa fa-clock-o"></i>
                <span>{{ vaga.carga_horaria }}</span>
              </li>
              <li>
                <i class="fa fa-map-marker"></i>
                <span>{{ vaga.localizacao }}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="box-candidatos">
      <h2>Candidato</h2>

      <div class="list-candidatos">
        <div class="item-vaga">
          <div class="main-infos">
            <h3>{{ vaga.aluno.nome }}</h3>
            <div class="description">
              {{ vaga.aluno.experiencia }}
            </div>
          </div>
          <div class="action">
            <a href="perfil-aluno.php">
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
<script src="../js/vaga.js"></script>
