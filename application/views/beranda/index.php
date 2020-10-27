<!-- <div class="search">
	<div class="container">
		<form action="<?= base_url('cari'); ?>" method="get">
      <input type="text" name="keyword" class="input-control" value="<?= $this->input->get('keyword'); ?>" placeholder="cari nama produk" autofocus="on">
      <input type="submit" name="cari" value="Cari" class="btn">
		</form>
	</div>
</div> -->

<?php if(!$this->input->get('cari')) : ?>
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
<?php endif; ?>

<div class="section">
	<div class="container">
		<h3>Produk Terbaru</h3>
		<div class="box">
			<?php if($this->input->get('cari')) : ?>
				<?php foreach($produk as $p) : ?>
				<a href="<?= base_url('produk/' . $p['slug']); ?>">
				<div class="col-4">
					<img src="<?= base_url('assets/img/produk/' . $p['foto_produk']) ?>" alt="">
					<p class="nama"><?= word_limiter($p['nama_produk'], 4); ?></p>
					<p class="harga">Rp.<?= number_format($p['harga'], 0, ',', '.'); ?></p>
				</div>
				</a>
			  <?php endforeach; ?>
			<?php endif; ?>

			<?php if(empty($produk)) : ?>
			  	<div class="alert-danger">Hasil Pencarian <strong><?= $this->input->get('keyword'); ?></strong> Tidak Ditemukan.</div>
			  <?php endif; ?>
			 
		  <?php if(!$this->input->get('cari')) : ?>
			  <?php foreach($produk as $p) : ?>
				<a href="<?= base_url('produk/' . $p['slug']); ?>">
				<div class="col-4">
					<img src="<?= base_url('assets/img/produk/' . $p['foto_produk']) ?>" alt="">
					<p class="nama"><?= $p['nama_produk']; ?></p>
					<p class="harga">Rp.<?= number_format($p['harga'], 0, ',', '.'); ?></p>
				</div>
				</a>
			  <?php endforeach; ?>
			<?php endif; ?>
			  
		  
		</div>
	</div>
</div>