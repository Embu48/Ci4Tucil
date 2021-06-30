<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

<div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1>Restock Barang :</h1>
                <h3><?php echo $barang;  ?></h3>
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
   
