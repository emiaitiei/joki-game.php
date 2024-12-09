<main id="main" class="main">

    <div class="pagetitle">
      <h1>Joki Game</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Carousel</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col">

          <div class="card">
            <div class="card-body">

              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?= base_url('img/voucher.jpg') ?>" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('img/ovo.jpg') ?>" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('img/gopay.jpg') ?>" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>