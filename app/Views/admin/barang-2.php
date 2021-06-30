<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Pengaturan</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Admin'); ?>">Home</a></li>
                <li class="breadcrumb-item active">Pengaturan</li>
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
                            <h5 class="m-0">Daftar Jenjang Pendaftaran</h5>
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
                    <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Embu/edit/'.$keluar['id']); ?>">Edit</a> | <a  class="btn btn-primary" href="<?php echo base_url('index.php/Embu/hapus/'.$keluar['id']); ?>">Hapus</a></td>
				</tr>
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