
    <?php $session = session(); ?>
     <br>
     <h2 align = "center">List Pesanan Anda</h2>
        <table border='1' align = "center">
            <thread>
                <th>No.</th>
                <th>Atas Nama</th>
                <th>Barang Pesanan</th>
                <th>Jumlah</th>
                <th>Status</th>
            </thread>
            <tbody>
                <?php
                    $i = 1;
                    foreach($data1 as $key => $keluar){
                        if($keluar['nama'] == $session->get('name')){
                ?>

                <tr align = "center"><td><?php echo $i; $i+=1?></td>
                    <td><?php echo $keluar['nama']; ?></td>
                    <td><?php echo $keluar['barang']; ?></td>
                    <td><?php echo $keluar['jumlah']; ?></td>
                    <td><?php echo $keluar['status']; ?></td>
                </tr>
                    <?php }} ?>
            </tbody>
        </table>
        <br>
        <p align = "center"><a class="btn btn-primary" href="<?php echo base_url('index.php/Pesanan'); ?>">Pesanan Baru</a></p>
     

