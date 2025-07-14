<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
					$grand_total= 0;
					if($keranjang = $this->cart->contents())
					{
						foreach($keranjang as $items)
						{
							$grand_total = $grand_total + $items['subtotal'];
						}
					echo "<h4>Total belanja anda : Rp. ".number_format($grand_total, 0,',','.');
					
				 ?>
			</div><br><br>
			<h3>Input Alamat Pengiriman dan pembayaran</h3>

			<form action="<?php echo base_url() ?>dashboard/proses_pesanan" method="post">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>No. Telpon</label>
					<input type="text" name="no_telp" placeholder="No. Telpon Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>TIKI</option>
						<option>POS INDONESIA</option>
						<option>Grab</option>
						<option>Gojek</option>
						
					</select>
					
				</div>
				<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control">
						<option>BCA - XXXXXXX</option>
						<option>BRI - XXXXXXX</option>
						<option>BNI - XXXXXXX</option>
						<option>Mandiri - XXXXXXX</option>
						
						
					</select>
					
				</div>
				
				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
			</form>
			<?php 
		}else{
			echo "<h5>Keranjang Belanja Anda Masih Kosong";
		}
			 ?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>