<div class="container mt-5">

	<div class="row">
		<div class="col-6">
			<h3>Register Mahasiswa</h3>
			<?php foreach( $data['mhs'] as $mhs ) : ?>
			  <ul>
					<li><?= $mhs['name']; ?></li>
					<li><?= $mhs['matric no.']; ?></li>
					<li><?= $mhs['email']; ?></li>
					<li><?= $mhs['course']; ?></li>
			</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div>