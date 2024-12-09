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
      <th>Id Costumer</th>
      <th>Id Fitur Chat</th>
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
        <td><?= $value->id_costumer ?></td>
        <td><?= $value->id_fiturchat ?></td>
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
  window.onload = () => {
    const table = document.getElementById('my-table');
    exportTable(table, 'lorder.xls');
  };

  function exportTable(table, filename) {
    const tableHTML = encodeURIComponent(table.outerHTML);
    const downloadLink = document.createElement('a');

    downloadLink.href = `data:application/vnd.ms-excel,${tableHTML}`;
    downloadLink.download = filename;
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
    window.close();
  }
</script>