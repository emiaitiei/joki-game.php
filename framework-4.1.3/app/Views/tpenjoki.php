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
            <h5 class="card-title">Penjoki</h5>

            <h2>Tambah Penjoki</h2>
            <form action="<?= base_url ('home/simpan_p') ?>" method="post">

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
              <div class="mb-3 mt-3">
                <label for="usn" class="form-label">Email :</label>
                <input type="text" class="form-control" id="usn" placeholder="Enter Email" name="usn" value="<?= $ngok->username ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="pw"class="form-label">Password :</label>
                <input type="text" class="form-control" id="pw" placeholder="Enter Password" name="pw" value="<?= $ngok->password ?>">
              </div>
              <div class="mb-3">
                <label for="level"class="form-label">Level :</label>
                <select class="form-control" name="level"  value="<?= $ngok->level ?>">
                  <option>Pilih Level </option>
                  <option value="1" <?= $ngok->level == '1' ? 'selected' : '' ?>>1</option>
                  <option value="2" <?= $ngok->level == '2' ? 'selected' : '' ?>>2</option>
                  <option value="3" <?= $ngok->level == '3' ? 'selected' : '' ?>>3</option>
                </select>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>