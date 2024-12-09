<main id="main" class="main">

  <div class="pagetitle">
    <h1>Joki Game</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">User</h5>

            <!-- <a href="<?= base_url('home/tambah_user') ?>"><button class="btn btn-success"><i class="bi bi-plus-circle"></i></button></a> -->

            <table class="table datatable">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $ms=1;
                foreach ($ngok as $key => $value) {
                  ?>
                  <tr>
                    <td><?= $ms++ ?></td>
                    <td><?= $value->username ?></td>
                    <td><?= $value->password ?></td>
                    <td><?= $value->level ?></td>
                    <td>
                      <a href="<?= base_url('home/reset_user/'.$value->id_user) ?>" class="btn btn-info"><i class="bi bi-key"></i></a>
                      <!-- <a href="<?= base_url('home/hapus_user/'.$value->id_user) ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a> -->
                    </td>
                  </tr>

                <?php }
                ?>

              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>