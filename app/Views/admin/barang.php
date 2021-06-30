		<h1 align = "center"><u>List Barang</u></h1>
		<br>
        <table border='1' align = "center">
            <thread>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Aksi</th>
            </thread>
            <tbody>
                <?php
                    $i = 1;
                    foreach($data as $key => $keluar){
                ?>
                <tr align = "center"><td><?php echo $i; $i+=1?></td>
                    <td><?php echo $keluar['barang']; ?></td>
                    <td><?php echo $keluar['stok']; ?></td>
                    <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Restock/index/'.$keluar['barang']); ?>">Req</a> | <a class="btn btn-primary" href="<?php echo base_url('index.php/Produk/edit/'.$keluar['id']); ?>">Edit</a> | <a  class="btn btn-primary" href="<?php echo base_url('index.php/Produk/hapus/'.$keluar['id']); ?>">Hapus</a></td>
				</tr>
                    <?php } ?>
            </tbody>
        </table>

