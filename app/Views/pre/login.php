
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1>Masuk</h1>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <form action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a class="btn btn-primary" href="<?php echo base_url('index.php/Register'); ?>">Register</a>
                </form>
                
            </div>
        </div>
    </div>
    