<header>
	<div class="container">
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
	</div>
</header>