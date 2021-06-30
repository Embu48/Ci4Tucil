<?php $session = session(); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </div>
        </div>
        </div>
    </div>
 
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Pendaftaran</h5>
                        </div>
                        <div class="card-body">
            <table border='1' align = "center">
            <tr align="center">
                <td><b>No.</b></td>
                <td><b>Jenjang</b></td>
                <td><b>Aksi</b></td>
            </tr>
            <tbody>
                <?php
                    $i = 1;
                    foreach($data1 as $key => $keluar){
                ?>
                <tr align = "center"><td><?php echo $i; $i+=1?></td>
                    <td><?php echo $keluar['barang']; ?></td>
                    <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Pesanan/index/'.$keluar['barang']); ?>">Daftar</a>
				</tr>
                    <?php } ?>
            </tbody>
        </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Status Pendaftaran Anda</h5>
                        </div>
                        <div class="card-body">
                        <table border='1' align = "center">
            <tr align="center">
                <td><b>No.</b></td>
                <td><b>Nama</b></td>
                <td><b>Jenjang</b></td>
                <td><b>Status</b></td>
                <td><b>Aksi</b></td>
            </tr>
            <tbody>
                <?php
                    $i = 1;
                    foreach($data2 as $key => $keluar){
                        if($keluar['account'] == $session->get('name')){
                ?>

                <tr align = "center"><td><?php echo $i; $i+=1?></td>
                    <td><?php echo $keluar['nama']; ?></td>
                    <td><?php echo $keluar['barang']; ?></td>
                    <td><?php echo $keluar['status']; ?></td>
                    <?php
                        if ($keluar['status'] == 'Sedang Proses'){ ?>
                            <td><a class="btn btn-primary" href="<?php echo base_url('Pesanan/Info/'.$keluar['id']); ?>">Info</a></td>
                        <?php } else{?>
                            <td><a class="btn btn-primary" href="<?php echo base_url('Pesanan/Info/'.$keluar['id']); ?>">Info</a> | <a  class="btn btn-primary" href="<?php echo base_url('User/Cetak/'.$keluar['id']); ?>">Cetak</a>
                        <?php } ?>
                        </tr>
                    <?php } ?>
                    <?php } ?>
            </tbody>
        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>