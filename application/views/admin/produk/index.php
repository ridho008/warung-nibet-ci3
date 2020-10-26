<div class="section">
	<div class="container">
		<h3>Produk</h3>
		<div class="box">
			<?= $this->session->flashdata('pesan'); ?>
			<a href="<?= base_url('admin/produk/tambah'); ?>" class="btn">Tambah Data Produk</a>
			<br><br>
			<table border="1" cellspacing="0" class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Kategori</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Deskripsi</th>
						<th>Gambar</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach($produk as $p) : ?>
          <tr>
          	<td><?= $no++; ?></td>
          	<td><?= $p['nama_kate']; ?></td>
          	<td><?= $p['nama_produk']; ?></td>
          	<td><?= number_format($p['harga'], 0 , ',', '.'); ?></td>
          	<td><?= word_limiter($p['deskripsi'], 30); ?></td>
          	<td>
          		<img src="<?= base_url('assets/img/produk/' . $p['foto_produk']); ?>" width="100">
          	</td>
          	<td>
          		<?php if($p['status'] == 1) : ?>
          			<div class="alert-success">Publish</div>
          			<?php else : ?>
          				<div class="alert-info">No Publish</div>
          		<?php endif; ?>
          	</td>
          	<td>
          		<a href="<?= base_url('admin/produk/ubah/' . $p['produk_id']); ?>">Ubah</a>
          		<a href="<?= base_url('admin/produk/hapus/' . $p['produk_id']); ?>">Hapus</a>
          	</td>
          </tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<?php if(empty($produk)) : ?>
          <tr>
          	<td colspan="8" class="alert-danger text-center"><strong>Data Produk Kosong</strong></td>
          </tr>
					<?php endif; ?>
				</tfoot>
			</table>
		</div>
	</div>
</div>