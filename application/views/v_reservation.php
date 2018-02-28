<?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Reservation</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reservation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <!-- Main row -->
      
      <div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
    <tr>
      <th>No</th>
      <th>Reservation Code</th>
      <th>Reservation At</th>
      <th>Reservation Date</th>
      <th>Seat Code</th>
      <th>Customer Id</th>
      <th>Rute Id</th>
      <th>Status</th>
      <th>Konfirmasi</th>
    </tr>
    <?php
    $no = 1;
    foreach($reservation as $r){ 
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $r->reservation_code; ?></td>
        <td><?php echo $r->reservation_at; ?></td>
        <td><?php echo $r->reservation_date; ?></td>
        <td><?php echo $r->seat_code; ?></td>
        <td><?php echo $r->costumer_id; ?></td>
        <td><?php echo $r->rute_id; ?></td>
        <td><?php echo $r->confirm; ?></td>
        <td><a href="<?php echo base_url('admin/konfirmasi/'.$r->reservation_code) ?>" class="btn btn-primary">Konfirmasi</a></td>
      </tr>
      <?php } ?>
      </table>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php require_once 'v_footeradmin.php' ?>
