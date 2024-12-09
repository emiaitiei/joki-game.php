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
            <h5 class="card-title">Penjoki</h5>

            <a href="<?= base_url('home/tambah_penjoki') ?>"><button class="btn btn-success"><i class="bi bi-plus-circle"></i></button></a>

            <table class="table datatable">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Nama Penjoki</th>
                  <th>Username</th>
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
                    <td><?= $value->nama_penjoki ?></td>
                    <td><?= $value->username ?></td>
                    <td><?= ($value->level == 2) ? 'Penjoki' : '' ?></td>
                    <td>
                      <a href="<?= base_url('home/edit_penjoki/'.$value->id_user) ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
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