<div class="container-fluid">
	<h4>Detail Pesanan</h4>
	<h4><div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id ?></div></h4>

	<table class="table table-bordered table-bordered table-striped">
		<tr>
			<th>No.</th>
			<th>Nama Produk</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>Sub-Total</th>
		</tr>
		<?php 
			$total=0;
			$no=1;
		 ?>
		 <?php 
		 	foreach($pesanan as $psn):
		 		$subtotal = $psn->jumlah * $psn->harga_brg;
		 		$total += $subtotal;
		 ?>
		 <tr>
		 	<td><?php echo $psn->id_brg ?></td>
		 	<td><?php echo $psn->nama_brg ?></td>
		 	<td><?php echo $psn->jumlah ?></td>
		 	<td><?php echo number_format($psn->harga_brg,0,',','.' )?></td>
		 	<td><?php echo number_format($subtotal,0,',','.') ?></td>
		 </tr>

		<?php endforeach; ?>
		<tr>
			<td colspan="4" align="right">Total</td>
			<td align="right">Rp. <?php echo number_format($total,0,',','.' ) ?></td>
		</tr>
	</table>
	<a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-danger">Kembali</div></a>

</div>