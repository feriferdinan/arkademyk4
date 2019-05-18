
<div class="container">
	<?php if ($this->session->flashdata()): ?>
		
	
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data programmer!<strong> Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
	<?php endif ?>
<div class="row mt-3">
	<div class="col-md-6">
		<a href="<?= base_url(); ?>users/tambah" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Tambah users</a>
	</div>
</div>


	<div class="row">
		<div class="col-md-6">
			<h3><?php echo $judul; ?></h3>
			
			<ul class="list-group">
				<?php foreach ($users as $p) : ?>
			  <li class="list-group-item">
			  	<?php echo $p['name']; ?> <br>
			  	Skills : <?php echo $p['skill']; ?>
			  	<a href="<?= base_url(); ?>users/ubah/<?= $p['uid']; ?>" class="badge badge-success float-right">ubah</a>
			  	
			  </li>

			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Programmer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= base_url(); ?>users/tambah" method="post" accept-charset="utf-8">
       	<input type="hidden" name="uid" id="uid">
       <div class="form-group">
	    <label for="name">Nama</label>
	    <input type="text" class="form-control" id="name" name="name">
	  </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
      </div>
    </div>
  </div>
</div>