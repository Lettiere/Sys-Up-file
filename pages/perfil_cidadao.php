
  <main id="main" class="main">


<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <h3 class="mt-3" style="text-align: center;"><?= $rows_cidadao['nome'] ?></h3>

          <h3>Web Designer</h3>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Cidadão</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Documentos</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">Sobre</h5>
              <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

              <h5 class="card-title">Dados do Perfil</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nome </div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['nome'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Endereço</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['tipo'] ?><?= $rows_cidadao['endereco'] ?>,  Nº <?= $rows_cidadao['numero'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Bairro</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['bairro'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Povoado</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['povoado'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Região</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['regiao'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Contato</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['contato'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['email'] ?></div>
              </div>

            </div>
            <div class="tab-pane fade show active profile-overview" id="profile-edit">
              <h5 class="card-title">Sobre</h5>
              <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

              <h5 class="card-title">Dados do Perfil</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nome </div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['cpf'] ?></div>
              </div>

          <div class="row">
                <div class="col-lg-3 col-md-4 label">Bairro</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['rg'] ?> - <?= $rows_cidadao['orgao'] ?> - <?= $rows_cidadao['uf_emissao_rg'] ?> Data<?= $rows_cidadao['emissao'] ?>  </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Povoado</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['povoado'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Região</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['regiao'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Contato</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['contato'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?= $rows_cidadao['email'] ?></div>
              </div>

            </div>

            

            <div class="tab-pane fade pt-3" id="profile-settings">

              <!-- Settings Form -->
              <form>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                  <div class="col-md-8 col-lg-9">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="changesMade" checked>
                      <label class="form-check-label" for="changesMade">
                        Changes made to your account
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="newProducts" checked>
                      <label class="form-check-label" for="newProducts">
                        Information on new products and services
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="proOffers">
                      <label class="form-check-label" for="proOffers">
                        Marketing and promo offers
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                      <label class="form-check-label" for="securityNotify">
                        Security alerts
                      </label>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End settings Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form>

                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form><!-- End Change Password Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->