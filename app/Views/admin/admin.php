    <?php $session = session(); ?>
    <h1><u>Home</u></h1>
     <h4><br><?php echo "Admin : ".$session->get('user_name');  ?></br></h4>
     <a href="<?php echo base_url('index.php/Admin/logout'); ?>">Logout</a>

