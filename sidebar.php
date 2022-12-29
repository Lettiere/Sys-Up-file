<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <!-- End Cadastros Nav -->

    <li class="nav-heading">Gerencia</li> <!-- CADASTROS -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#cadastro-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Cadastros</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="cadastro-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li><a href="consult_cidadao.php"><i class="bi bi-circle"></i><span>Cidadão</span></a></li>
        <li><a href="consult_programa.php"><i class="bi bi-circle"></i><span>Programas</span></a></li>
      </ul>
    </li><!-- End Cadastros Nav -->
    <li class="nav-heading">Arquivos</li><!-- ARQUIVOS -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#arquivo-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Arquivos</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="arquivo-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li><a href="cad_arquivo.php"><i class="bi bi-circle"></i><span>Novos</span></a></li>
        <li><a href="cons_arquivo.php"><i class="bi bi-circle"></i><span>consulta</span></a></li>
      </ul>
    </li><!-- End Cadastros Nav -->
    
  
    <li class="nav-heading">Documents</li> <!-- DOCUMENTACAO -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#documentacao-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Documentação</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="documentacao-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="charts-apexcharts.html">
            <i class="bi bi-circle"></i><span>Documentação</span>
          </a>
        </li>
      </ul>
    </li><!-- End Documentes Nav -->
  </ul>

</aside><!-- End Sidebar-->