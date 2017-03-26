<?php
  include('../partials/header.php');
?>

<main class="main vaga">
  <div class="container">
    <div class="content">
      <h1>Cadastrar nova vaga</h1>
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
  </div>
</main>

<?php
  include('../partials/footer.php');
?>
