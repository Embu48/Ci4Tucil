<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Gudang</li>
            </ol>
            </div>
        </div>
        </div>
    </div>
 
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <div class="card">
                        <div class="card-header">
                        Edit Data Jenjang Pendidikan : <?php echo $produk['barang']; ?>
                        </div>
                        <div class="card-body">
                        <form action="<?php echo base_url('embu/update/'.$produk['id']); ?>" method="post">
 
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="barang" value="<?php echo $produk['barang']; ?>" class="form-control" placeholder="Nama Produk">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Selesai</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>