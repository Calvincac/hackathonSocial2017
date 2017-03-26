<?php
  include('../partials/header.php');
?>

<main class="main cadastrar-vaga">
  
  <?php include('../partials/topo-empresa.php'); ?>

  <div class="container">
    <div class="content">
      <h1 class="text-center">Cadastrar nova vaga</h1>
      <form class="form">
        
        <div class="form-group">
          <label for="carga">Cargo</label>
          <input type="text" class="form-control">
        </div>
        
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

        <div class="form-group col-md-6 no-padding-left">
          <label for="faixa">Faixa salarial:*</label>
          <input type="text" class="form-control">
        </div>

        <div class="form-group col-md-6 no-padding-right">
          <label for="carga">Carga horária:*</label>
          <input type="text" class="form-control">
        </div>

        <div class="form-group">
          <label for="local">Local:*</label>
          <input type="text" class="form-control">
        </div>

        <div class="form-group">
          <label for="description">Benefícios</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Benefício 1">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Benefício 2">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Benefício 3">
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary"> 
            Salvar
          </button>
        </div>

      </form>
    </div>
  </div>
</main>

<?php
  include('../partials/footer.php');
?>
