<div class="section">
	<div class="container">
		<h3>Kategori</h3>
		<div class="box">
			<?= $this->session->flashdata('pesan'); ?>
			<a href="<?= base_url('admin/kategori/tambah'); ?>" class="btn">Tambah Data Kategori</a>
			<br><br>
			<table border="1" cellspacing="0" class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Kategori</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach($kategori as $k) : ?>
          <tr>
          	<td><?= $no++; ?></td>
          	<td><?= $k['nama_kate']; ?></td>
          	<td>
          		<a href="<?= base_url('admin/kategori/ubah/' . $k['kategori_id']); ?>">Ubah</a>
          		<a href="<?= base_url('admin/kategori/hapus/' . $k['kategori_id']); ?>">Hapus</a>
          	</td>
          </tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>