<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">Order</h1>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col" style="width:20%">ORDER_ID</th>
          <th scope="col" style="width:20%">ID_ROOM</th>
          <th scope="col" style="width:20%">DATE</th>
          <th scope="col" style="width:25%">TOTAL</th>
          <th scope="col" style="width:15%">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php foreach($orders as $order): ?>
          <tr>
            <td><?php echo $order->id; ?></td>
            <td><?php echo $order->idRoom; ?></td>
            <td><?php echo date("d-m-Y",strtotime($order->date)); ?></td>
            <td><?php echo $order->total; ?></td>
            <td>
            <a href="<?= base_url(); ?>admin/order/detail/<?= $order->id ;?>" class="btn btn-primary">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/order/edit/<?= $order->id ;?>" class="btn btn-warning">
                <i class="fa fa-pen" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>admin/order/hapus/<?= $order->id ;?>" class="btn btn-danger" onClick="return confirm('Apakah Kamu yakin Akan Menghapus ??');">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>