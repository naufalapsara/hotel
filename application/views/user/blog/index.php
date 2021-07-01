<section class="sec headImage" data-aos="zoom-in-up">
	<img src="https://images.pexels.com/photos/1595822/pexels-photo-1595822.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
	<div class="headIndex">
		<h1 class="futura-head" style="font-size:3.5rem;">Blog</h1>
		<h2 class="futura-content" style="font-size:1.1rem;">
			<a class="imageLink" href="<?= base_url().'user/home' ?>">Home ></a>
			<a class="imageLink" href="<?= base_url().'user/blog' ?>">Blog ></a>
		</h2>
	</div>
</section>

<section class="newContent sec">

<div class=" d-flex flex-row-reverse justify-content-between mt-5" data-aos="fade-right">
<div>
	<form action="" method="post">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Cari Blog" name="keyword">
			<div class="input-group-append">
				<button class="btn btn-light border border-left-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			</div>
		</div>
	</form>
</div>
	<?php foreach ($blogs as $blog) : ?>
		<div class="blogC d-flex flex-row mb-5" data-aos="fade-right">
			<div class="iblog">
				<img src="<?= base_url().'/uploads/blogs/'.$blog->image?>" alt="lala">
			</div>
			<div class="text">
				<div class="textBoard">
					<div>
						<p class="text-muted p-0 m-0"><?= $blog->date ?> &nbsp; <?= str_word_count($blog->author) > 5 ? substr($blog->author,0,15)."..." : $blog->author ; ?> &nbsp; <i class="fa fa-comment" aria-hidden="true"></i>&nbsp; <?= $blog->view ?></p>
						<p class="futura-head p-0 m-0" style="font-size:2.5rem"> <?= str_word_count($blog->title) > 5 ? substr($blog->title,0,25)."..." : $blog->title ; ?></p>
						<p class="futura-content p-0 text-muted mt-2" style="font-size:1rem">
							<?= str_word_count($blog->desc) > 25 ? substr($blog->desc,0,250)."..." : $blog->desc ;?>
						</p>
					</div>
					<div>
						<button class="btn btn-info mt-1 font-weight-bold"> Read More </button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</section>
