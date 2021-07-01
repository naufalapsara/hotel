<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">Service</h1>
    <div class="mb-3">
        <a href="<?= base_url().'admin/service/tambah'; ?>" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Data
        </a>
    </div>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">NO</th>
          <th scope="col">NAME</th>
          <th scope="col">DESC</th>
          <th scope="col">IMAGE</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php $no = 1;?>
        <?php foreach($services as $service): ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo str_word_count($service->name) > 25 ? substr($service->name,0,20)."[...]" : $service->name ; ?></td>
            <td><?php echo str_word_count($service->desc) > 25 ? substr($service->desc,0,20)."[...]" : $service->desc ; ?></td>
            <td><?php echo str_word_count($service->image) > 25 ? substr($service->image,0,20)."[...]" : $service->image ; ?></td>
            <td>
            <a href="<?= base_url(); ?>admin/service/detail/<?= $service->id ;?>" class="btn btn-primary">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/service/edit/<?= $service->id ;?>" class="btn btn-warning">
                <i class="fa fa-pen" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/service/hapus/<?= $service->id ;?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          <?php $no++;?>
        <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>