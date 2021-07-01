<div class="cc">
	<h1 class="mt-2 mb-3 font-weight-bold">Admin</h1>
	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
					<th scope="col">USERNAME</th>
					<th scope="col">PASSWORD</th>
					<th scope="col">REFERENCE CODE</th>
					<th scope="col">STATUS</th>
					<th scope="col">ACTION</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach($admins as $admin): ?>
				<tr>
					<td>
						<?php echo str_word_count($admin->username) > 5 ? substr($admin->username,0,5)."[...]" : $admin->username ; ?>
					</td>
					<td>***********</td>
					<td>
						<?php echo str_word_count($admin->refCode) > 5 ? substr($admin->refCode,0,5)."[...]" : $admin->refCode ; ?>
					</td>
					<td>
						<?php if($admin->status == 'Active'){?>

              <a href="<?= base_url().'admin/admin/changeStatus/'.$admin->id ?>" class='btn btn-info' onclick='return confirm("You want to disactive this admin?")'>
                <i class="fa fa-check" aria-hidden="true"></i>
              </a>
						<?php }else{?>

              <a href="<?= base_url().'admin/admin/changeStatus/'.$admin->id ?>" class='btn btn-danger' onclick='return confirm("You want to actived this admin?")'>
                <i class="fas fa-minus-circle" aria-hidden="true"></i>
              </a>
						<?php } ?>
					</td>
					<td>
						<a href="<?= base_url(); ?>admin/admin/edit/<?= $admin->id ;?>" class="btn btn-warning">
							<i class="fa fa-pen" aria-hidden="true"></i>
						</a>
						<a href="<?= base_url(); ?>admin/admin/hapus/<?= $admin->id ;?>" class="btn btn-danger"
							onClick="return confirm('yakin mau hapus');">
							<i class="fa fa-trash" aria-hidden="true"></i>
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>

		</table>
	</div>

</div>
