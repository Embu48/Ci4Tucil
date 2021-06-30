<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Restock Barang</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Restock Barang</li>
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
                            <h5 class="m-0"><?php echo $barang;  ?></h5>
                        </div>
                        <div class="card-body">
                        <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="<?php echo base_url('index.php/Restock/save/'.$barang); ?>" method="post">
                
                    <div class="mb-3">
                        <label for="InputForJumlah" class="form-label">Jumlah</label>
                        <input type="integer" name="jumlah" class="form-control" id="InputForJumlah" value="<?= set_value('jumlah') ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Request</button>
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>