<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">Blog</h1>
    <div class="mb-3">
        <a href="<?= base_url().'admin/blog/tambah'; ?>" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Data
        </a>
    </div>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">TITLE</th>
          <th scope="col">DESCRIPTION</th>
          <th scope="col">DATE</th>
          <th scope="col">AUTHOR</th>
          <th scope="col">VIEW</th>
          <th scope="col">IMAGE</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php foreach($blogs as $blog): ?>
          <tr>
            <td><?php echo $blog->id; ?></td>
            <td><?php echo str_word_count($blog->title) > 5 ? substr($blog->title,0,5)."[...]" : $blog->title ; ?></td>
            <td><?php echo str_word_count($blog->desc) > 5 ? substr($blog->desc,0,5)."[...]" : $blog->desc ; ?></td>
            <td><?php echo str_word_count($blog->date) > 5 ? substr($blog->date,0,5)."[...]" : $blog->date ; ?></td>
            <td><?php echo str_word_count($blog->author) > 5 ? substr($blog->author,0,5)."[...]" : $blog->author ; ?></td>
            <td><?php echo str_word_count($blog->view) > 5 ? substr($blog->view,0,5)."[...]" : $blog->view ; ?></td>
            <td><?php echo str_word_count($blog->image) > 5 ? substr($blog->image,0,5)."[...]" : $blog->image ; ?></td>
            <td>
              <a href="<?= base_url(); ?>admin/blog/detail/<?= $blog->id ;?>" class="btn btn-primary">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/blog/edit/<?= $blog->id ;?>" class="btn btn-warning">
                <i class="fa fa-pen" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/blog/hapus/<?= $blog->id ;?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>