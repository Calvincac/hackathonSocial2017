<?php
  include('../partials/header.php');
?>

<main class="main vaga" id="vaga">
  <?php include('../partials/topo-empresa.php'); ?>

  <div class="container" >
    <div class="content" v-model="vaga">
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
      <h2>Alunos</h2>

      <div class="list-candidatos list-indicados">
        <div class="item-vaga" v-for="a in alunos" v-on:click="changeSelected">
          <div class="main-infos" :data-id="a._id">
            <h3>{{ a.nome | nomeAluno }}</h3>
            <div class="description">
              {{ a.experiencia }}
            </div>
          </div>
          <div class="action">
            <button type="submit" class="btn btn-indicar btn-action btn-default" data-text-selecionar="Indicar" data-text-selecionado="Indicado">
              Indicar
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php
  include('../partials/footer.php');
?>

<script>
  $('.list-indicados').on('click', '.btn-indicar', function(event) {
    event.preventDefault();

    var $parentItem = $(this).closest('.item-vaga');
    var siblings = $parentItem.siblings();

    siblings.removeClass('item-selecionado');

    if ($parentItem.hasClass('item-selecionado')) {
      $(this).html($(this).data('text-selecionar'));
    } else {
      $(this).html($(this).data('text-selecionado'));
    }

    $parentItem.toggleClass('item-selecionado');


  });
</script>
<script src="../js/vaga-pao.js"></script>
