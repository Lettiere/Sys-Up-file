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
                            <h5 class="card-title">CADASTRO DE CIDADÃO</h5>
                            <!-- Horizontal Form -->
                            <form class="row g-3" action="f_cad/cad_cidadao.php" method="POST">
                                <div class="col-md-10">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="nome" placeholder="Nome Cidadão">
                                        <label for="floatingName">Nome</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" name="civil" aria-label="State">
                                            <option></option>
                                            <option>Solteiro (a)</option>
                                            <option>Casado (a)</option>
                                            <option>Divorciado (a)</option>
                                            <option>Separado (a)</option>
                                            <option>Viuvo (a)</option>
                                            <option>União Estável</option>
                                            <option>* Cumcubinado (a)</option>
                                            <option>* Amasiado </option>
                                        </select>
                                        <label for="floatingName">Estado Civil</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="tipo" aria-label="State">
                                            <option></option>
                                            <?php while ($rows_rua_tipo = mysqli_fetch_assoc($resultado_rua_tipo)) { ?>
                                                <!-- Busca no Banco de dados Tabela vinculos  -->
                                                <option> <?php echo $rows_rua_tipo['nome']; ?> </option>
                                            <?php } ?>
                                        </select>
                                        <label for="floatingSelect">Tipo</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="endereco" aria-label="State">
                                            <option></option>
                                            <?php while ($rows_rua = mysqli_fetch_assoc($resultado_rua)) { ?>
                                                <!-- Busca no Banco de dados Tabela vinculos  -->
                                                <option> <?php echo $rows_rua['nome']; ?> </option>
                                            <?php } ?>
                                        </select>
                                        <label for="floatingSelect">Endereço</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="numero" placeholder="Numero">
                                        <label for="floatingName">Nº </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="complemento" placeholder="Complemento">
                                        <label for="floatingName">Complemento</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" name="bairro" aria-label="State">
                                            <option selected></option>
                                            <?php while ($rows_bairro = mysqli_fetch_assoc($resultado_bairro)) { ?>
                                                <!-- Busca no Banco de dados Tabela vinculos  -->
                                                <option> <?php echo $rows_bairro['nome']; ?> </option>
                                            <?php } ?>
                                        </select>
                                        <label for="floatingName">Bairro</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" name="povoado" aria-label="State">
                                            <option selected></option>
                                            <?php while ($rows_povoado = mysqli_fetch_assoc($resultado_povoado)) { ?>
                                                <!-- Busca no Banco de dados Tabela vinculos  -->
                                                <option> <?php echo $rows_povoado['nome']; ?> </option>
                                            <?php } ?>
                                        </select>
                                        <label for="floatingName">Povoado</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" name="regiao" aria-label="State">
                                            <option selected></option>
                                            <option >Zona Urbana</option>
                                            <option >Zona Rural</option>
                                        </select>
                                        <label for="floatingName">Região</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="cidade" placeholder="Your Name">
                                        <label for="floatingName">Cidade</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" name="estado" aria-label="State">
                                            <option selected></option>
                                            <option > AC  </option>
                                            <option > AL  </option>
                                            <option > AP  </option>
                                            <option > AM  </option>
                                            <option > BA  </option>
                                            <option > CE  </option>
                                            <option > DF  </option>
                                            <option > ES  </option>
                                            <option > GO  </option>
                                            <option > MA  </option>
                                            <option > MT  </option>
                                            <option > MS  </option>
                                            <option > MG  </option>
                                            <option > PA  </option>
                                            <option > PB  </option>
                                            <option > PR  </option>
                                            <option > PE  </option>
                                            <option > PI  </option>
                                            <option > RJ  </option>
                                            <option > RN  </option>
                                            <option > RS  </option>
                                            <option > RO  </option>
                                            <option > RR  </option>
                                            <option > SC  </option>
                                            <option > SP  </option>
                                            <option > SE  </option>
                                            <option > TO  </option>
                                        </select>
                                        <label for="floatingName">Estado</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="floatingName" name="contato" placeholder="Your Name">
                                        <label for="floatingName">Contato</label>
                                    </div>
                                </div>
                                <hr class="mt-4 mb-3"> <!-- Divisoria -->
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="naturalidade" placeholder="Your Name">
                                        <label for="floatingName">Naturalidade</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="nome_mae" placeholder="Your Name">
                                        <label for="floatingName">Nome da Mãe</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="nome_pai" placeholder="Your Name">
                                        <label for="floatingName">Nome do Pai</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="email" placeholder="Your Name">
                                        <label for="floatingName">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="rg" placeholder="Your Name">
                                        <label for="floatingName">Nº Rg</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="floatingName" name="emissao" placeholder="Your Name">
                                        <label for="floatingName">Data Emissão</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="orgao" placeholder="Your Name">
                                        <label for="floatingName">Orgão</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating"> 
                                        <input type="date" class="form-control" id="floatingName" name="uf_emissao_rg" placeholder="Your Name">
                                        <label for="floatingName">UF Emissão</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="floatingName" name="dt_nascimento" placeholder="Your Name">
                                        <label for="floatingName">Data Nascimento</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="cpf" placeholder="Your Name">
                                        <label for="floatingName">CPF</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="pis" placeholder="Your Name">
                                        <label for="floatingName">PIS</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="sus" placeholder="Your Name">
                                        <label for="floatingName">SUS</label>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Observação</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="observacao" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Enviar Foto</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" id="arquivo" name="arquivo">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" align="right">
                    <input class="btn btn-primary" name="SendCadCont" type="submit" value="Cadastrar">
                    <input class="btn btn-danger" type="button" value="Voltar" onClick="history.go(-1)">
                </div>
                </form><!-- End floating Labels Form -->

            </div>
        </div>
        </div><!-- End Sales Card -->
        </div>
        </div>
    </section>
</main><!-- End #main -->