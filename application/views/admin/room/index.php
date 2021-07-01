<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">Room</h1>
    <div class="mb-3">
        <a href="<?= base_url().'admin/room/tambah'; ?>" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Data
        </a>
    </div>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col" style="width:1%">ROOM_ID</th>
          <th scope="col" style="width:12%">NAME</th>
          <th scope="col" style="width:10%">TYPE</th>
          <th scope="col" style="width:10%">PRICE</th>
          <th scope="col" style="width:10%">STATUS</th>
          <th scope="col" style="width:10%">IMAGE</th>
          <th scope="col" style="width:16%">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php foreach($rooms as $room): ?>
          <tr>
            <td><?php echo $room->id; ?></td>
            <td><?php echo str_word_count($room->name) > 5 ? substr($room->name,0,10)."[...]" : $room->name ; ?></td>
            <td><?php echo str_word_count($room->type) > 5 ? substr($room->type,0,10)."[...]" : $room->type ; ?></td>
            <td>Rp.<?php echo str_word_count($room->price) > 5 ? substr($room->price,0,10)."[...]" : $room->price ; ?></td>
            <td><?php echo str_word_count($room->status) > 5 ? substr($room->status,0,10)."[...]" : $room->status ; ?></td>
            <td><?php echo str_word_count($room->image) > 5 ? substr($room->image,0,10)."[...]" : $room->image ; ?></td>
            <td>
            <a href="<?= base_url(); ?>admin/room/details/<?= $room->id ;?>" class="btn btn-primary">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/room/edit/<?= $room->id ;?>" class="btn btn-warning">
                <i class="fa fa-pen" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/room/hapus/<?= $room->id ;?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>