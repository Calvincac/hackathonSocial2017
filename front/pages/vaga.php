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
              <li>Lorem ipsum</li>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem</li>
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
                <span>40h semanais</span>
              </li>
              <li>
                <i class="fa fa-map-marker"></i>
                <span>Porto Alegre - RS</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <h2>Candidatos</h2>

    <div class="list-candidatos">
      <div class="item-vaga">
        <div class="main-infos">
          <h3>Nome do candidato</h3>
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </div>
        </div>
      </div>
      <div class="item-vaga">
        <div class="main-infos">
          <h3>Nome do candidato</h3>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
          </div>
        </div>
        <div class="action">
          <a href="vaga.php" title="" class="btn btn-default">mais informações</a>
        </div>
      </div>
      <div class="item-vaga">
        <div class="main-infos">
          <h3>Nome do candidato</h3>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
          </div>
        </div>
        <div class="action">
          <a href="vaga.php" title="" class="btn btn-default">mais informações</a>
        </div>
      </div>
      <div class="item-vaga">
        <div class="main-infos">
          <h3>Nome do candidato</h3>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
          </div>
        </div>
        <div class="action">
          <a href="vaga.php" title="" class="btn btn-default">mais informações</a>
        </div>
      </div>
      <div class="item-vaga">
        <div class="main-infos">
          <h3>Nome do candidato</h3>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
          </div>
        </div>
        <div class="action">
          <a href="vaga.php" title="" class="btn btn-default">mais informações</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
  include('../partials/footer.php');
?>
<script src="../js/vaga.js"></script>
