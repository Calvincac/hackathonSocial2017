<?php
  include('../partials/header.php');
?>

<main class="main jovem" id="perfil-aluno" v-model="vaga">
  <?php include('../partials/topo-empresa.php'); ?>

  <div class="container">
    <div class="content">
      <div class="top">
        <figure class="image">
          <img src="//placehold.it/120x120" alt="Nome" class="img-circle img-responsive">
        </figure>

        <div class="cont">
          <div class="main-infos">
            <div class="right">
              <h2>{{ vaga.aluno.nome | nomeAluno }}, <span>{{ vaga.aluno.idade }}</span></h2>
              <!-- <a href="#" class="edit">Editar perfil</a> -->
            </div>
            <button type="button" v-if="vaga.selecionado" disabled class="btn btn-selecionar selected btn-action btn-lg">
              Demonstrar interesse
            </button>
            <button type="button" v-else v-on:click="selected" class="btn btn-selecionar btn-action btn-lg">
              Demonstrar interesse
            </button>
          </div>
        </div>
      </div>
      <div class="middle more-about">
        <div class="block col-xs-12 col-md-4">
          <h3>Escolaridade</h3>
          <p>{{ vaga.aluno.escolaridade }}</p>
        </div>
        <div class="block col-xs-12 col-md-4">
          <h3>Habilidades</h3>
          <p>{{ vaga.aluno.habilidade }}</p>
        </div>
        <div class="block col-xs-12 col-md-4">
          <h3>Experiência</h3>
          <p>{{ vaga.aluno.experiencia }}</p>
        </div>
        <!-- <div class="block col-xs-12 col-md-4">
          <h3>Idiomas</h3>
          <p>Português</p>
        </div>
        <div class="block col-xs-12 col-md-4">
          <h3>Hobbies</h3>
          <p>Vídeo Games</p>
        </div> -->
      </div>
    </div>
  </div>
</main>

<?php
  include('../partials/footer.php');
?>
<script src="../js/perfil-aluno.js"></script>
