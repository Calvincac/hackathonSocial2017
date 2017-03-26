<?php
  include('../partials/header.php');
?>

<main class="main cadastrar-vaga">

  <?php include('../partials/topo-empresa.php'); ?>

  <div class="container">
    <div class="content">
      <h1 class="text-center">Cadastrar nova vaga</h1>
      <form class="form" id="form-vagas">

        <div class="form-group">
          <label for="cargo">Cargo</label>
          <input type="text" id="cargo" name="cargo" class="form-control">
        </div>

        <div class="form-group">
          <label for="description">Descrição da vaga*</label>
          <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label for="description">Requisitos*</label>
          <input type="text" class="form-control" name="habilidades_necessarias">
        </div>

        <div class="form-group col-md-6 no-padding-left">
          <label for="faixa">Salário:*</label>
          <input type="text" name="faixa_salarial" class="form-control">
        </div>

        <div class="form-group col-md-6 no-padding-right">
          <label for="carga">Carga horária:*</label>
          <input type="text" name="carga_horaria" class="form-control">
        </div>

        <div class="form-group">
          <label for="local">Local:*</label>
          <input type="text" name="localizacao" class="form-control">
        </div>

        <div class="form-group">
          <label for="description">Benefícios</label>
          <input type="text" class="form-control" name="beneficios">
        </div>

        <div class="text-center">
          <button type="submit" class="btn-action btn btn-default btn-lg">
            Salvar
          </button>
        </div>

      </form>
    </div>
  </div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../js/cadastro-vaga.js"></script>
<?php
  include('../partials/footer.php');
?>
