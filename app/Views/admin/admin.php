    <section align = "center">
    <h2 >Pesanan</h2>
        <table border='1' align = "center">
            <thread>
                <th>No.</th>
                <th>Atas Nama</th>
                <th>Barang Pesanan</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </thread>
            <tbody>
                <?php
                    $i = 1;
                    foreach($data1 as $key => $keluar){
                ?>
                <tr align = "center"><td><?php echo $i; $i+=1?></td>
                    <td><?php echo $keluar['nama']; ?></td>
                    <td><?php echo $keluar['barang']; ?></td>
                    <td><?php echo $keluar['jumlah']; ?></td>
                    <td><?php echo $keluar['status']; ?></td>
                    <?php
                        if ($keluar['status'] == 'Sedang Proses'){ ?>
                            <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Admin/TerimaPesanan/'.$keluar['id']); ?>">Terima</a> | <a class="btn btn-primary" href="<?php echo base_url('index.php/Admin/TolakPesanan/'.$keluar['id']); ?>">Batal</a></td>
                        <?php } else{?>
                            <td><a  class="btn btn-primary" href="<?php echo base_url('index.php/Admin/HapusPesanan/'.$keluar['id']); ?>">Hapus</a>
                        <?php } ?>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
        <br>
        <h2>Restock</h2>
        <table border='1' align = "center">
            <thread>
                <th>No.</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </thread>
            <tbody>
                <?php
                    $i = 1;
                    foreach($data3 as $key => $keluar){
                ?>
                <tr align = "center"><td><?php echo $i; $i+=1?></td>
                    <td><?php echo $keluar['barang']; ?></td>
                    <td><?php echo $keluar['jumlah']; ?></td>
                    <td><?php echo $keluar['status']; ?></td>
                    <?php
                        if ($keluar['status'] == 'Sampai'){ ?>
                            <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Admin/TerimaRestock/'.$keluar['id']); ?>">Terima</a> | <a class="btn btn-primary" href="<?php echo base_url('index.php/Admin/TolakRestock/'.$keluar['id']); ?>">Batal</a></td>
                        <?php } else{?>
                            <td><a  class="btn btn-primary" href="<?php echo base_url('index.php/Admin/HapusRestock/'.$keluar['id']); ?>">Hapus</a>
                        <?php } ?>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
    </section>
        

