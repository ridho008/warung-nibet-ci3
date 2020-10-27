<header>
	<div class="container">
		<?php if($this->session->userdata('username')) : ?>
		<h1>
			<a href="<?= base_url('admin/dashboard'); ?>">Warung</a>
		</h1>
		<ul>
			<li><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
			<li><a href="<?= base_url('profil/' . $users['username']); ?>">Profil</a></li>
			<li><a href="<?= base_url('admin/kategori'); ?>">Kategori</a></li>
			<li><a href="<?= base_url('admin/produk'); ?>">Produk</a></li>
			<li><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
		</ul>
		<?php else : ?>
			<h1>
				<a href="<?= base_url(); ?>">Warung</a>
			</h1>
			<ul>
				<li><a href="<?= base_url('auth'); ?>">Login</a></li>
			</ul>
		<?php endif; ?>
	</div>
</header>

<?php if(!$this->uri->segment(2) == 'admin/dashboard') : ?>
<div class="search">
	<div class="container">
		<form action="<?= base_url('cari'); ?>" method="get">
      <input type="text" name="keyword" class="input-control" value="<?= $this->input->get('keyword'); ?>" placeholder="cari nama produk" autofocus="on">
      <input type="submit" name="cari" value="Cari" class="btn">
		</form>
	</div>
</div>
<?php endif; ?>