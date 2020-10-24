<div class="section">
	<div class="container">
		<h2>Profil</h2>
		<?= $this->session->flashdata('pesan'); ?>
		<div class="box">
			<?= form_open('admin/dashboard/profil/' . $users['username']); ?>
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" class="input-control" value="<?= $users['nama_user']; ?>">
        <small class="text-danger"><?= form_error('nama'); ?></small>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="input-control" placeholder="Masukan password baru anda">
        <small class="text-danger"><?= form_error('password'); ?></small>
        <label for="telp">Telepon</label>
        <input type="number" name="telp" id="telp" class="input-control" value="<?= $users['telp']; ?>">
        <small class="text-danger"><?= form_error('telp'); ?></small>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="input-control" value="<?= $users['email']; ?>">
        <small class="text-danger"><?= form_error('email'); ?></small>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" cols="30" rows="10" class="input-control"><?= $users['alamat']; ?></textarea>
        <small class="text-danger"><?= form_error('alamat'); ?></small>
        <button type="submit" class="btn">Perbarui</button>
			<?= form_close(); ?>
		</div>
	</div>
</div>