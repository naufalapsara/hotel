<?php
    if (empty($this->session->userdata('user'))) {
        redirect('login');
    }
?>
<div class="topBar">

	<div id="sidebar">

		<div class="menubar d-flex flex-row justify-content-between" >
			<div class="rowBar">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="dropdown">
				<button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false" >
					<i class="fa fa-user" aria-hidden="true"></i><?php echo $this->session->flashdata('user');?>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="<?= base_url().'login/logout' ?>" onClick="return confirm('Apakah kamu yakin akan keluar dari akun ini ??');">Log Out</a>
				</div>
			</div>
		</div>
		<div class="card bg-dark text-white rounded-0" style="height:61.5rem">
			<div class="card-header">
				<span class="fa fa-cog" style="font-size:2rem"></s>
					<b>
						<span style="font-size:2rem"> Dashboard</span>
					</b>
			</div>
			<div class="card-body p-0">
				<ul class="nav d-flex flex-column">
					<li class="nav-item">
						<a href="<?= base_url().'admin/chart' ?>" class="nav-link active text-white av">
							<i class="fa fa-chart-line" aria-hidden="true"></i> &nbsp;
							<span> Chart </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url().'admin/order' ?>" class="nav-link text-white">
							<i class="fa fa-chalkboard-teacher" aria-hidden="true"></i> &nbsp;
							<span> Order </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url().'admin/room' ?>" class="nav-link active text-white">
							<i class="fa fa-building" aria-hidden="true"></i> &nbsp;
							<span> Room </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url().'admin/service' ?>" class="nav-link active text-white">
							<i class="fa fa-cogs" aria-hidden="true"></i> &nbsp;
							<span> Service </span>
						</a>
					</li>
					<!-- <li class="nav-item">
						<a href="<?= base_url().'admin/blog' ?>" class="nav-link active text-white">
							<i class="fa fa-blog" aria-hidden="true"></i> &nbsp;
							<span> Blog </span>
						</a>
					</li> -->
					<li class="nav-item">
						<a href="<?= base_url().'admin/admin' ?>" class="nav-link active text-white">
							<i class="fa fa-user" aria-hidden="true"></i> &nbsp;
							<span> Admin </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url().'user/home' ?>" class="nav-link active text-white av mt-5">
							<i class="fas fa-arrow-alt-circle-left" aria-hidden="true"></i> &nbsp;
							<span> Go To User </span>
						</a>
					</li>
				</ul>
			</div>
			<div class="card-footer">
				<h6 class="text-white">@ Copyright by lala Company</h6>
			</div>
		</div>
	</div>

</div>
