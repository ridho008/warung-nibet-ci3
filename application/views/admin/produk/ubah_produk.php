<div class="section">
  <div class="container">
    <h3>Ubah Produk <?= $produk['nama_produk']; ?></h3>
    <div class="box">
      <?= form_open_multipart('admin/produk/ubah/' . $produk['produk_id']); ?>
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori" class="input-control">
          <option value="">-- Pilih Kategori --</option>
          <?php foreach($kategori as $k) : ?>
            <?php if($produk['kategori_id'] == $k['kategori_id']) : ?>
            <option value="<?= $k['kategori_id']; ?>" selected><?= $k['nama_kate']; ?></option>
            <?php else: ?>
              <option value="<?= $k['kategori_id']; ?>"><?= $k['nama_kate']; ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
        <small class="text-danger"><?= form_error('kategori'); ?></small>
        <label for="produk">Nama Produk</label>
        <input type="text" name="produk" id="produk" class="input-control" value="<?= $produk['nama_produk']; ?>">
        <small class="text-danger"><?= form_error('produk'); ?></small>
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" class="input-control" value="<?= $produk['harga']; ?>">
        <small class="text-danger"><?= form_error('harga'); ?></small>
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="editor1" cols="30" rows="10" class="input-control"><?= $produk['deskripsi']; ?></textarea>
        <small class="text-danger"><?= form_error('deskripsi'); ?></small>
        <label for="foto">Foto Produk</label><br>
        <img src="<?= base_url('assets/img/produk/' . $produk['foto_produk']); ?>" width="100">
        <input type="file" name="foto" id="foto" class="input-control">
        <input type="text" name="fotoLamaProduk" id="fotoLamaProduk" class="input-control" value="<?= $produk['foto_produk']; ?>">
        <button type="submit" class="btn">Tambah</button>
      <?= form_close(); ?>
    </div>
  </div>
</div>