<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			   Form Tambah Data Programmer
			  </div>
			  <div class="card-body">

				<form action="" method="post">
				<div class="form-group">
				    <label for="name">Nama</label>
				    <input type="text" class="form-control" id="name" name="name" >
				    <small class="form-text text-danger"><?php echo form_error('name'); ?></small>
				 </div>
				  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>