<div class="section">
	<div class="container">
		<h3>Tambah Data Produk</h3>
		<div class="box">
			<?= form_open_multipart('admin/produk/tambah'); ?>
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori" class="input-control">
        	<option value="">-- Pilih Kategori --</option>
        	<?php foreach($kategori as $k) : ?>
        		<option value="<?= $k['kategori_id']; ?>"><?= $k['nama_kate']; ?></option>
        	<?php endforeach; ?>
        </select>
        <small class="text-danger"><?= form_error('kategori'); ?></small>
        <label for="produk">Nama Produk</label>
        <input type="text" name="produk" id="produk" class="input-control">
        <small class="text-danger"><?= form_error('produk'); ?></small>
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" class="input-control">
        <small class="text-danger"><?= form_error('harga'); ?></small>
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="input-control"></textarea>
        <small class="text-danger"><?= form_error('deskripsi'); ?></small>
        <label for="foto">Foto Produk</label>
        <input type="file" name="foto" id="foto" class="input-control">
        <button type="submit" class="btn">Tambah</button>
			<?= form_close(); ?>
		</div>
	</div>
</div>