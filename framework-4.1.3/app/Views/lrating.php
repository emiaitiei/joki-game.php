<main id="main" class="main">

    <div class="pagetitle">
        <h1>Laporan Rating</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PRINT</h5>
                        <form action="<?= base_url('home/tampillr') ?>" method="post">
                            <div class="mb-3">
                                <label for="twl">Tanggal Awal :</label>
                                <input type="date" class="form-control" name="awal">
                            </div>
                            <div class="mb-3">
                                <label for="takr">Tanggal Akhir :</label>
                                <input type="date" class="form-control" name="akhir">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-info">
                                    <i class="bi-printer"></i> 
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PDF</h5>
                        <form action="<?= base_url('home/pdflr') ?>" method="post">
                            <div class="mb-3">
                                <label for="twl">Tanggal Awal :</label>
                                <input type="date" class="form-control" name="awal">
                            </div>
                            <div class="mb-3">
                                <label for="takr">Tanggal Akhir :</label>
                                <input type="date" class="form-control" name="akhir">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi-file-pdf"></i> 
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">EXCEL</h5>
                        <form action="<?= base_url('home/excellr') ?>" method="post">
                            <div class="mb-3">
                                <label for="twl">Tanggal Awal :</label>
                                <input type="date" class="form-control" name="awal">
                            </div>
                            <div class="mb-3">
                                <label for="takr">Tanggal Akhir :</label>
                                <input type="date" class="form-control" name="akhir">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi-file-excel"></i> 
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>