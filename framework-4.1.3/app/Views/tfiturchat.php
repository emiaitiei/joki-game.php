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
            <h5 class="card-title">Fitur Chat</h5>

            <h2>Tambah Fitur Chat</h2>
            <form action="<?= base_url ('home/simpan_fc') ?>" method="post">

              <div class="mb-3">
                <label for="sender"class="form-label">Sender Role :</label>
                <select class="form-control" name="sender"  value="<?= $ngok->sender_role ?>">
                  <option>Pilih Sender Role</option>
                  <option value="Admin" <?= $ngok->sender_role == 'Admin' ? 'selected' : '' ?>>Admin</option>
                  <option value="Costumer" <?= $ngok->sender_role == 'Costumer' ? 'selected' : '' ?>>Costumer</option>
                  <option value="Penjoki" <?= $ngok->sender_role == 'Penjoki' ? 'selected' : '' ?>>Penjoki</option>
                </select>
              </div>
              <div class="mb-3 mt-3">
                <label for="isi"class="form-label">Isi Pesan :</label>
                <input type="text" class="form-control" id="isi" placeholder="Enter Isi Pesan" name="isi" value="<?= $ngok->isi_pesan ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="time"class="form-label">Timestamp :</label>
                <input type="datetime" class="form-control" id="time" placeholder="Enter Timestamp" name="time" value="<?= $ngok->timestamp ?>">
              </div>

              <input type="hidden" value="<?=$ngok->id_fiturchat?>" name="id"> 
              <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>