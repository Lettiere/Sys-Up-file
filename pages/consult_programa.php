<main id="main" class="main">
    <div class="pagetitle">
        <h1>Programas Cadastrados</h1>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <!-- BLOCO 1  -->
        <div class="row">
            <div class="col-lg-12">
                <!--  Card -->
                <div class="col-xxl-12 col-md-12">
                </div><!-- End Sales Card -->
                <!--  Card -->
                <div class="col-xxl-12 col-md-12">
                    <div class="card info-card sales-card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title"><span>| Cadastrados </span></h5>
                                    <table id="myTable" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Endereço</th>
                                                <th>Idade</th>
                                                <th>Contato</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while ($rows_programas = mysqli_fetch_assoc($resultado_programa)) { ?>
                                            <tr>
                                            <td><?php echo $rows_programas['id']; ?></td>
                                            <td><?php echo $rows_programas['nome']; ?></td>
                                                
                                                <td> <a href="perfil_cidadao.php?id=<?= $rows_cidadao['id']; ?>"> <button class="btn btn-primary">Consultar</button> </a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Endereço</th>
                                                <th>Idade</th>
                                                <th>Contato</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sales Card -->


        </div>
        </div>

    </section>

</main><!-- End #main -->