<div class="search">
	<div class="container">
		<?= form_open(); ?>
      <input type="text" name="keyword" class="input-control">
      <input type="submit" name="cari" value="Cari" class="btn">
		<?= form_close(); ?>
	</div>
</div>

<div class="section">
	<div class="container">
		<h3>Kategori</h3>
		<div class="box">
			<?php foreach($kategori as $k) : ?>
			<a href="<?= base_url('produk/kategori/' . $k['slug_kate']); ?>">
			<div class="col-5">
				<img src="<?= base_url('assets/img/kategori/icon kategori.png'); ?>" width="50px" style="margin-top: 6px;">
				<p><?= $k['nama_kate']; ?></p>
			</div>
			</a>
		  <?php endforeach; ?>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<h3>Produk Terbaru</h3>
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
		</div>
	</div>
</div>