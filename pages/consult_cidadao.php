<main id="main" class="main">

    <div class="pagetitle">
        <h1>Cidadãos Belocampenses</h1>

        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">


        <!-- BLOCO 1  -->
        <div class="row">
            <div class="col-lg-12">

                <!--  Card -->
                <div class="col-xxl-12 col-md-12">
                    <div class="card info-card sales-card">



                        <!-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div> -->
                        <!-- FILTROS -->


                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h5 class="card-title"><span>| Homens </span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-gender-male"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>






                                            </h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h5 class="card-title"> <span>| Mulheres</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-gender-female"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h5 class="card-title"><span>| xxxxxxx</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h5 class="card-title"><span>| xxxxxx </span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>




                    </div>
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
                                        <?php while ($rows_cidadao = mysqli_fetch_assoc($resultado_cidadao)) { ?>
                                            <tr>
                                            <td><?php echo $rows_cidadao['nome']; ?></td>
                                            <td><?php echo $rows_cidadao['endereco']; ?></td>
                                            <td><?php echo $rows_cidadao['dt_nascimento']; ?></td>
                                            <td><?php echo $rows_cidadao['contato']; ?></td>
                                                
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