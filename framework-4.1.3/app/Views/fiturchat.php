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
            <h5 class="card-title">Fitur Chat</h5>

            <a href="<?= base_url('home/tambah_fiturchat') ?>"><button class="btn btn-success"><i class="bi bi-plus-circle"></i></button></a>

            <table class="table datatable">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Sender Role</th>
                  <th>Isi Pesan</th>
                  <th>Timestamp</th>
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
                    <td><?= $value->sender_role ?></td>
                    <td><?= $value->isi_pesan ?></td>
                    <td><?= $value->timestamp ?></td>
                    <td>
                      <a href="<?= base_url('home/edit_fiturchat/'.$value->id_fiturchat) ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                      <a href="<?= base_url('home/hapus_fiturchat/'.$value->id_fiturchat) ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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