<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Pendaftaran Peserta Baru</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Form Pendaftaran</li>
            </ol>
            </div>
        </div>
        </div>
    </div>
 
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0"><?php echo $barang;  ?></h5>
                        </div>
                        <div class="card-body">
                        <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="<?php echo base_url('index.php/Pesanan/save/'.$barang); ?>" method="post">
                
                    <div class="mb-3">
                        <label for="InputForJumlah" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="InputForJumlah" value="<?= set_value('nama') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForJumlah" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat-lahir" class="form-control" id="InputForJumlah" value="<?= set_value('tempat-lahir') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForJumlah" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal-lahir" class="form-control" id="InputForJumlah" value="<?= set_value('tanggal-lahir') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForJumlah" class="form-label">Asal Sekolah</label>
                        <input type="text" name="asal-sekolah" class="form-control" id="InputForJumlah" value="<?= set_value('asal-sekolah') ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Pesan</button>
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>