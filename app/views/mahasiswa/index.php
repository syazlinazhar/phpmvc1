<div class="container mt-3">

<div class="row">
	<div class="col-lg-6"> 
		<?php Flasher::flash(); ?>
	</div>
</div>

<div class="row mb-3">
	<div class="col-lg-6">
	<button type="button" class="btn btn-primary buttonAddData" data-toggle="modal" 
			data-target="#formModal">
				Add Data Mahasiswa
	</div>
</div>

		<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/find" method="post">
				<div class="input-group">
			<input type="text" class="form-control" placeholder="find mahasiswa.." name="keyword" id="keyword" autocomplete="off">
			<div class="input-group-append">
			<button class="btn btn-primary" type="submit" id="buttonFind">Find</button>
  </div>
</div>
			</form>
			</div>
		</div>

			<div class="row">
			<div class="col-lg-6">
			<h3>Register Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach( $data['mhs'] as $mhs ) : ?>
  				<li class="list-group-item">
  					<?= $mhs['name']; ?>
					<a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mhs['id']; ?>" 
					  class="badge badge-danger  float-right ml-1" onclick="return confirm('confirm?');">delete</a>
					<a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" 
					  class="badge badge-success  float-right ml-1 displayModalEdit" 
					  data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>
					<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" 
					  class="badge badge-primary  float-right ml-1">details</a>
  					</li>
  				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" 
aria-labelledby="titleModal" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="titleModal">Add Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" 
		aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		<form action="<?= BASEURL; ?>/mahasiswa/add" method="post">
		<input type="hidden" name="id" id="id">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name">
		</div>

		<div class="form-group">
			<label for="matric">Matric</label>
			<input type="number" class="form-control" id="matric" name="matric">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="course">Course</label>
			<select class="form-control" id="course" name="course">
			<option value="Information Technology">Information Technology</option>
			<option value="Multimedia">Multimedia</option>
			<option value="Human Resource">Human Resource</option>
			<option value="Science Economy">Science Economy</option>
			<option value="Account">Account</option>
			<option value="Tourism">Tourism</option>
			</select>
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" 
		data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
		</form>
      </div>
    </div>
  </div>
</div>