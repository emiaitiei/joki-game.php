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
            <h5 class="card-title">Costumer</h5>

            <h2>Tambah Costumer</h2>
            <form action="<?= base_url ('home/simpan_c') ?>" method="post">

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