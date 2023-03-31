<?php
$BASE_URL = './../';
include_once __DIR__ . "/../header.php"
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <!-- INICIO -->
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      Usuario Eliminado com sucessso.
    </div>
    <div class="text-center">
      <a href="users/index.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Voltar</button></a>
    </div>
    <!-- FIM -->
</main>


<?php
include_once __DIR__ . '/../footer.php'
?>