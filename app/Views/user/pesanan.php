<div class="container">
        <div class="row justify-content-md-center">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

            <div class="col-6">
                <h1>Pesanan Baru</h1>
                <hr>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/pesanan/save" method="post">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Barang Pesanan</label>
                        <input type="text" name="barang" class="form-control" id="InputForName" value="<?= set_value('barang') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForJumlah" class="form-label">Jumlah</label>
                        <input type="integer" name="jumlah" class="form-control" id="InputForJumlah" value="<?= set_value('jumlah') ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
             
        </div>
    </div>
   
