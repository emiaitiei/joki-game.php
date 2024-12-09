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
            <h5 class="card-title">User</h5>

            <h2>Edit User</h2>
            <form action="<?= base_url ('home/simpan_user') ?>" method="post">

              <div class="mb-3 mt-3">
                <label for="nama" class="form-label">Nama User :</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter Nama User" name="nama" value="<?= $ngok->nama_user ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="usn" class="form-label">Username :</label>
                <input type="text" class="form-control" id="usn" placeholder="Enter Username" name="usn" value="<?= $ngok->username ?>">
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

              <input type="hidden" value="<?=$ngok->id_user?>" name="id"> 
              <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>