<div class="box-login">
	<h2>Login</h2>
	<?= $this->session->flashdata('pesan'); ?>
	<?= form_open('auth'); ?>
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Username" class="input-control">
    <small class="text-muted text-danger"><?= form_error('username'); ?></small>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" class="input-control">
    <small class="text-danger"><?= form_error('password'); ?></small>
    <button type="submit" class="btn">Login</button>
	<?= form_close(); ?>
</div>



