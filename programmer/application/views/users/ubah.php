<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			   Tambah Skill
			  </div>
			  <div class="card-body">

				<form action="" method="post">
				<input type="hidden" name="user_id" id="user_id"value="<?= $users['user_id']; ?>">
				<div class="form-group">
				    <label for="skill">Skill</label>
				<input type="text" class="form-control" id="skill" name="skill" value="<?= $users['skill']; ?>" >
				    <small class="form-text text-danger"><?php echo form_error('skill'); ?></small>
				 </div>
				 
				  <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>