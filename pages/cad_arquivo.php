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
                            <h5 class="card-title">CADASTRAR ARQUIVO</h5>
                            <!-- Horizontal Form -->
                            <form class="row g-3" action="f_cad/cad_arquivo.php" method="POST"  enctype='multipart/form-data'>
                                <div class="col-md-2">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingName" name="dt_cadastro" placeholder="Nome Cidadão">
                                        <label for="floatingSelect">Data Cadrasto</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" name="tipo" aria-label="State">
                                            <option selected></option>
                                            <option value="Entrada">Entrada </option>
                                            <option>Saída </option>
                                        </select>
                                        <label for="floatingName">Tipo</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="nome" placeholder="Nome Cidadão">
                                        <label for="floatingName">Nome do Arquivo</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="destinatario" placeholder="Nome Cidadão">
                                        <label for="floatingName">Destinatário</label>
                                    </div>
                                </div>
                                
                                
                                <hr>
                                <div class="col-md-5">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="origem" aria-label="State">
                                            <option selected></option>
                                            <option>PDDE - </option>
                                            <option>Busca Ativa - </option>
                                        </select>
                                        <label for="floatingSelect">Origem</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="esfera" aria-label="State">
                                            <option selected></option>
                                            <option>Municipal </option>
                                            <option>Estadual </option>
                                            <option>Federação </option>
                                        </select>
                                        <label for="floatingSelect">Esfera</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="numero" placeholder="Numero">
                                        <label for="floatingName">Nº </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="floatingName" name="dt_arquivo" placeholder="Complemento">
                                        <label for="floatingName">Data Documento</label>
                                    </div>
                                </div>

                                <div class="row mt-3 mb-3">
                                    <label for="inputPassword" class="col-sm-2 form-floating">Sinopse</label>
                                    <div class="col-sm-10 form-floating">
                                        <textarea id="editor" class="form-control " name="observacao" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" name="destino" aria-label="State">
                                            <option selected></option>
                                            <option>Vanusa Ruas</option>
                                            <option>Aelson</option>
                                            <option>Kamila</option>
                                        </select>
                                        <label for="floatingName">Destino</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" name="instituicao" aria-label="State">
                                            <option selected></option>
                                            <option>Vanusa Ruas</option>
                                            <option>Aelson</option>
                                            <option>Kamila</option>
                                        </select>
                                        <label for="floatingName">Instituição</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" name="autor" aria-label="State">
                                            <option selected></option>
                                            <option>Vanusa Ruas</option>
                                            <option>Aelson</option>
                                            <option>Kamila</option>
                                        </select>
                                        <label for="floatingName">Autor</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Enviar em PDF</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" id="arquivo" name="arquivo"  >
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