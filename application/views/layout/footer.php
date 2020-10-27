<footer class="<?= $this->uri->segment(1) == 'auth' ? 'footer' : '' ?> footer-beranda">
	<div class="container">
		<small>Copyright &copy; <?= date('Y'); ?> - Warung Nibet.</small>
	</div>
</footer>
<script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js'); ?>"></script>
<script>
	CKEDITOR.replace('editor1');
</script>
</body>
</html>