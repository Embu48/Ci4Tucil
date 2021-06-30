<div class="container">
    <div class="row justify-content-md-center">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <div class="col-6">
        <h1>Edit Barang</h1>
        <hr>
        <form action="<?php echo base_url('produk/update/'.$produk['id']); ?>" method="post">
 
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="barang" value="<?php echo $produk['barang']; ?>" class="form-control" placeholder="Nama Produk">
            </div>
            <div class="form-group">
                <label for="">Stok</label>
                <input type="text" name="stok" value="<?php echo $produk['stok']; ?>" class="form-control" placeholder="Stok Produk">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Selesai</button>
        </form>
        </div>
    </div>
</div?