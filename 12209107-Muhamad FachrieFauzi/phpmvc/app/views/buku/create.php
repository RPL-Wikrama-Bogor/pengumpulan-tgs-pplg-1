<div class="container">
	<h3 class="mb-3">Tambah Buku</h3>
	<form action="<?= BASE_URL; ?>/buku/simpanbuku" method="post">
		<div class="class-body">
			<div class="form-group mb-3">
				<label for="judul">judul</label>
				<input type="text" class="form-action" id="judul" name="judul"> </div>
			<div class="form-group mb-3">
				<label for="penulis">penulis</label>
				<input type="text" class="form-action" id="penulis" name="penulis"> </div>
			<div class="form-group mb-3">
				<label for="tgl_selesai">Tanggal Selesai</label>
				<input type="date" class="form-action" id="tgl_selesai" name="tgl_selesai"> </div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
	</form>
	</div>
</div>