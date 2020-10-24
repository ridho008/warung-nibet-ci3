<div class="section">
	<div class="container">
		<h3>Tambah Data Kategori</h3>
		<div class="box">
			<?= form_open('admin/kategori/tambah'); ?>
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="input-control">
        <small class="text-danger"><?= form_error('kategori'); ?></small>
        <button type="submit" class="btn">Tambah</button>
			<?= form_close(); ?>
		</div>
	</div>
</div>