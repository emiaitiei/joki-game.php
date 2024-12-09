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
            <h5 class="card-title">Rating</h5>

            <a href="<?= base_url('home/tambah_rating') ?>"><button class="btn btn-success"><i class="bi bi-plus-circle"></i></button></a>

            <table class="table datatable">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Nama Costumer</th>
                  <th>Nama Penjoki</th>
                  <th>Rating</th>
                  <th>Komentar</th>
                  <th>Tanggal Rating</th>
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
                    <td><?= $value->nama_costumer ?></td>
                    <td><?= $value->nama_penjoki ?></td>
                    <td><?= $value->rating ?></td>
                    <td><?= $value->komentar ?></td>
                    <td><?= $value->tanggal_rating ?></td>
                    <td>
                      <a href="<?= base_url('home/edit_rating/'.$value->id_order) ?>" class="btn btn-info"><i class="bi bi-exclamation-circle"></i></a> 
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