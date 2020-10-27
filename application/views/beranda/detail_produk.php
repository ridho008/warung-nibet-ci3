<div class="section">
	<div class="container">
		<h3>Detail Produk</h3>
		<div class="box">
			<div class="col-2">
				<img src="<?= base_url('assets/img/produk/' . $produk['foto_produk']); ?>" width="100%">
			</div>
			<div class="col-2">
				<h3><?= $produk['nama_produk']; ?></h3>
				<h4>Rp.<?= number_format($produk['harga'], 0, ',', '.'); ?></h4>
				<p>Deskripsi : <br>
          <?= word_limiter($produk['deskripsi'], 70); ?>
				</p>
				<p>
					<a href="https://api.whatsapp.com/send?phone=+6281365920084&text=Hallo, saya tertarik dengan produk yang anda jual." target="_blank">
						<img src="<?= base_url('assets/img/wa.png'); ?>" width="50px">
						Hubungi Whatsapp
					</a>
				</p>
			</div>
		</div>
	</div>
</div>