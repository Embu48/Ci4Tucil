<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 PDF Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">

    <h2>PSB Online 2021</h2>
    <br>
    <h3>Pendaftaran <?php echo $pendaftar['barang']; ?></h3>

    <div class="d-flex flex-row-reverse bd-highlight">
    </div>

    <table class="table table-striped table-hover mt-4">
      <tbody>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?php echo $pendaftar['nama']; ?></td>
        </tr>
        <tr>
          <td>Tempat, Tanggal lahir</td>
          <td>:</td>
          <td><?php echo ($pendaftar['tempat-lahir'].', '.$pendaftar['tanggal-lahir']); ?></td>
        </tr>
        <tr>
          <td>Asal Sekolah</td>
          <td>:</td>
          <td><?php echo $pendaftar['asal-sekolah']; ?></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
          <td>Status Peserta</td>
          <td>:</td>
          <td><?php echo $pendaftar['status']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>