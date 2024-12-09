<td><img src="<?= base_url('Foto/joki.png');?>" width="12%"></td>
<h2 align="center">Joki Game</h2>
<h3 align="center">Laporan Order</h3>

<style type="text/css">
  table,
  th,
  td{

    border-collapse: collapse;
  }
</style>

<table class="table table-bordered" border="1" width="100%">

  <thead>
    <tr>
      <th width="5%">No</th>
      <th>Nama Costumer</th>
      <th>Nama Penjoki</th>
      <th>Harga</th>
      <th>Status Order</th>
      <th>Tanggal Order</th>
      <th>Tanggal Selesai</th>
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
        <td><?= $value->harga ?></td>
        <td><?= $value->status_order ?></td>
        <td><?= $value->tanggal_order ?></td>
        <td><?= $value->tanggal_selesai ?></td>
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

<script>
  window.print();
</script>