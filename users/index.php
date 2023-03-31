<?php
include_once __DIR__ . "/../db.php";

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

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <h5 class="card-title">Usuários</h5>

              <a href="users/add.php">
                <button type="button" class="btn btn-primary">Adicionar</button>
              </a>
            </div>

            <!-- Table with stripped rows -->
            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
              <div class="datatable-top">
                <div class="datatable-dropdown">
                  <label>
                    <select class="datatable-selector">
                      <option value="5">5</option>
                      <option value="10" selected="">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                      <option value="25">25</option>
                    </select> entries per page
                  </label>
                </div>
                <div class="datatable-search">
                  <input class="datatable-input" placeholder="Search..." type="search" title="Search within table">
                </div>
              </div>
              <div class="datatable-container">
                <table class="table datatable datatable-table">
                  <thead>
                    <tr>
                      <th data-sortable="true" style="width: 5.690200210748156%;"><a href="#" class="datatable-sorter">#</a></th>
                      <th data-sortable="true" style="width: 28.02950474183351%;"><a href="#" class="datatable-sorter">Nome</a></th>
                      <th data-sortable="true" style="width: 37.72391991570074%;"><a href="#" class="datatable-sorter">E-mail</a></th>
                      <th data-sortable="true" style="width: 9.272918861959958%;"><a href="#" class="datatable-sorter">Contacto</a></th>
                      <th data-sortable="true" style="width: 19.28345626975764%;"><a href="#" class="datatable-sorter">Username</a></th>
                      <th data-sortable="true" style="width: 19.28345626975764%;"><a href="#" class="datatable-sorter">Acção</a></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // faz a seleção do dados na Tabela	
                    $data = mysqli_query($connection, "SELECT * FROM users ORDER BY id ASC");
                    // lista os dados
                    while ($value = mysqli_fetch_array($data)) {

                      // PDO
                      // $stmt = $pdo->prepare("SELECT * FROM users ORDER BY id DESC");
                      // $stmt->execute();
                      // $values = $stmt->fetchAll();

                      // foreach($values as $value) {
                    ?>
                      <tr data-index="0">
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['contact'] ?></td>
                        <td><?php echo $value['username'] ?></td>
                        <td>



                          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="users/edit.php?id=<?php echo $value['id'] ?>">
                              <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            <a href="users/deleteQuery.php?id=<?php echo $value['id'] ?>">
                              <button type="button" class="btn btn-danger">Deletar</button>
                            </a>
                          </div>

                        </td>
                      </tr>
                    <?php }  ?>
                  </tbody>
                </table>
              </div>
              <div class="datatable-bottom">
                <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                <nav class="datatable-pagination">
                  <ul class="datatable-pagination-list"></ul>
                </nav>
              </div>
            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php include_once __DIR__ . "/../footer.php" ?>