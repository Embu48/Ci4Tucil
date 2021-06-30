<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Detail</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
            </div>
        </div>
        </div>
    </div>
 
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                        Detail Pendaftar : <?php echo $pendaftar['account']; ?>
                        </div>
                        <div class="card-body">
                        <form action="<?php echo base_url('Penjualan'); ?>" method="post">
 
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="barang" value="<?php echo $pendaftar['nama']; ?>" class="form-control" placeholder="Nama Produk" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="barang" value="<?php echo $pendaftar['tempat-lahir']; ?>" class="form-control" placeholder="Nama Produk" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" name="barang" value="<?php echo $pendaftar['tanggal-lahir']; ?>" class="form-control" placeholder="Nama Produk" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Asal Sekolah</label>
                            <input type="text" name="barang" value="<?php echo $pendaftar['asal-sekolah']; ?>" class="form-control" placeholder="Nama Produk" disabled>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Kembali</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>