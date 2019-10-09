<div class="container mt-5">

	<div class="row">
		<div class="col-6">
			<h3>Register Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach( $data['mhs'] as $mhs ) : ?>
  				<li class="list-group-item"><?= $mhs['name']; ?></li>
  				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>