<div class="section">
	<div class="container">
		<h3>Ubah Kategori <?= $kategori['nama_kate']; ?></h3>
		<div class="box">
			<?= form_open('admin/kategori/ubah/' . $kategori['kategori_id']); ?>
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="input-control" value="<?= $kategori['nama_kate']; ?>">
        <small class="text-danger"><?= form_error('kategori'); ?></small>
        <button type="submit" class="btn">Ubah</button>
			<?= form_close(); ?>
		</div>
	</div>
</div>