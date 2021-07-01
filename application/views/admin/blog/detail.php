<div class="container mb-3">
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h1>Data Blog</h1>
        </div>
        <div class="card-body">
          <label for=""></label>
          <h3>ID</h3>
          <h3 class="card-title mb-5"><?= $blog['id']; ?></h3>
          <p class="card-text">
            <label for=""><b>TITLE <span style="margin-left:4rem">:</span> </b></label>
              <?= $blog['title']; ?>
          </p>
          <div class="card-text d-flex flex-row">
          <div>
            <label for=""><b>DESCRIPTION : </b></label>
          </div>
          <div>
              <p style="width:800px;margin-left:5px">
                <?= $blog['desc']; ?>
              </p>
          </div>
          </div>
          <p class="card-text">
            <label for=""><b>DATE <span style="margin-left:4rem">:</span> </b></label>
              <?= $blog['date']; ?>
          </p>
          <p class="card-text">
            <label for=""><b>AUTHOR <span style="margin-left:2.3rem">:</span> </b></label>
              <?= $blog['author']; ?>
          </p>
          <p class="card-text">
            <label for=""><b>VIEW <span style="margin-left:4rem">:</span> </b></label>
              <?= $blog['view']; ?>
          </p>
          <p class="card-text">
            <label for=""><b>IMAGE <span style="margin-left:3.3rem">:</span> </b></label>
          </p>
          <img src="<?= base_url().'/uploads/blogs/'.$blog['image']?>" alt="" style="margin-left:9rem;width:350px;heigth:300px">
          <div>
            <a href="<?= base_url() ;?>admin/blog" class ="btn btn-primary float-right">
              <i class="far fa-arrow-alt-circle-left" aria-hidden="true">&nbsp;Keluar</i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>