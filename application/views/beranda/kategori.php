<div class="section">
	<div class="container">
		<h3>Produk <?= $title; ?></h3>
		<div class="box">
			<?php foreach($produk as $p) : ?>
			<a href="<?= base_url('produk/' . $p['slug']); ?>">
			<div class="col-4">
				<img src="<?= base_url('assets/img/produk/' . $p['foto_produk']) ?>" alt="">
				<p class="nama"><?= $p['nama_produk']; ?></p>
				<p class="harga">Rp.<?= number_format($p['harga'], 0, ',', '.'); ?></p>
			</div>
			</a>
		  <?php endforeach; ?>
		  <?php if(empty($produk)) : ?>
		  	<div class="alert-danger">Produk <strong><?= $title; ?></strong> Tidak Tersedia.</div>
		  <?php endif; ?>
		</div>
	</div>
</div>