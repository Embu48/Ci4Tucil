		<h1><u>List Paket</u></h1>
		<br>
        <table border='1'>
            <thread>
                <th>Nama Barang</th>
				<th>Stok</th>
            </thread>
            <tbody>
                <?php
                    foreach($data as $key => $keluar){
                ?>
                <tr>
                    <td><?php echo $keluar['nama_barang']; ?></td>
					<td><?php echo $keluar['stok']; ?></td>
				</tr>
                    <?php } ?>
            </tbody>
        </table>

