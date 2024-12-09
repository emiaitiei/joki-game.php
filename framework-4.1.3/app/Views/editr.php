<main id="main" class="main">

  <div class="pagetitle">
    <h1>Joki Game</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Elements</li>
      </ol>
    </nav>
  </div>
  
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Rating</h5>

            <h2>Edit Rating</h2>
            <form action="<?= base_url ('home/simpan_rating') ?>" method="post">

              <div class="mb-3 mt-3">
                <label for="rating"class="form-label">Rating :</label>
                <input type="text" class="form-control" id="rating" placeholder="Enter Rating" name="rating" value="<?= $ngok->rating ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="komen" class="form-label">Komentar :</label>
                <input type="text" class="form-control" id="komen" placeholder="Enter Komentar" name="komen" value="<?= $ngok->komentar ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="tanggal"class="form-label">Tanggal Rating :</label>
                <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal Rating" name="tanggal" value="<?= $ngok->tanggal_rating ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="nama"class="form-label">Nama Costumer :</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter Nama Costumer" name="nama" value="<?= $ngok->nama_costumer ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="tempat"class="form-label">Tempat Lahir :</label>
                <input type="text" class="form-control" id="tempat" placeholder="Enter Tempat Lahir" name="tempat" value="<?= $ngok->tempat_lahir ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="tanggal" class="form-label">Tanggal Lahir :</label>
                <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal Lahir" name="tanggal" value="<?= $ngok->tanggal_lahir ?>">
              </div>
              <div class="mb-3">
                <label for="jenis"class="form-label">Jenis Kelamin :</label>
                <select class="form-control" name="jenis"  value="<?= $ngok->jenis_kelamin ?>">
                  <option>Pilih Jenis Kelamin </option>
                  <option value="Perempuan" <?= $ngok->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                  <option value="Laki-Laki" <?= $ngok->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                </select>
              </div>
              <div class="mb-3 mt-3">
                <label for="alamat"class="form-label">Alamat :</label>
                <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat" value="<?= $ngok->alamat ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="no"class="form-label">No Hp :</label>
                <input type="text" class="form-control" id="no" placeholder="Enter No Hp" name="no" value="<?= $ngok->no_hp ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="nama" class="form-label">Nama Penjoki :</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter Nama Penjoki" name="nama" value="<?= $ngok->nama_penjoki ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="game"class="form-label">Game yg Dikuasai :</label>
                <input type="text" class="form-control" id="game" placeholder="Enter Game yg Dikuasai" name="game" value="<?= $ngok->game_yg_dikuasai ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="peringkat"class="form-label">Peringkat yg Dikuasai :</label>
                <input type="text" class="form-control" id="peringkat" placeholder="Enter Peringkat yg Dikuasai" name="peringkat" value="<?= $ngok->peringkat_yg_dikuasai ?>">
              </div>
              <div class="mb-3">
                <label for="status"class="form-label">Status Ketersediaan :</label>
                <select class="form-control" name="status"  value="<?= $ngok->status_ketersediaan ?>">
                  <option>Pilih Status Ketersediaan </option>
                  <option value="Sedia" <?= $ngok->status_ketersediaan == 'Sedia' ? 'selected' : '' ?>>Sedia</option>
                  <option value="Tidak Sedia" <?= $ngok->status_ketersediaan == 'Tidak Sedia' ? 'selected' : '' ?>>Tidak Sedia</option>
                </select>
              </div>

              <input type="hidden" value="<?=$ngok->id_order?>" name="ido">
              <input type="hidden" value="<?=$ngok->id_rating?>" name="idr"> 

              <button type="submit" class="btn btn-primary">Submit</button>

              <td>
                <a href="<?= base_url('home/hapus_rating/'.$ngok->id_order) ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
              </td>

            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>