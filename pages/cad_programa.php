<main id="main" class="main">
  <div class="pagetitle">
  </div><!-- End Page Title -->
  <section class="section dashboard">
    <!-- BLOCO 1  -->
    <div class="row">
      <div class="col-lg-12">
        <!--  Card -->
        <div class="col-xxl-12 col-md-12">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">CADASTRO DE PROGRAMAS</h5>
              <!-- Horizontal Form -->
              <form method="POST" action="f_cad/cad_programas.php">
                <div class="row mb-3">
                  <label for="codigo" class="col-sm-3 col-form-label">Código</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="nome"  disabled="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="nome" class="col-sm-3 col-form-label">Nome do Programa</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nome" name="nome">
                  </div>
                </div>
                <div class="col-sm-12" align="right">
                  <input class="btn btn-primary" name="SendCadCont" type="submit" value="Cadastrar">
                  <input class="btn btn-danger" type="button" value="Voltar" onClick="history.go(-1)">
                </div>
            </div>

            </form><!-- End Horizontal Form -->
          </div>
        </div>
      </div><!-- End Sales Card -->
    </div>
    </div>
  </section>
</main><!-- End #main -->