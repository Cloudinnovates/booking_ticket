<?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Customer</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
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
      <th>Name</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Gender</th>
      <th>Email</th>
    </tr>
    <?php
    $no = 1;
    foreach($costumer as $c){ 
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $c->name; ?></td>
        <td><?php echo $c->address; ?></td>
        <td><?php echo $c->phone; ?></td>
        <td><?php echo $c->gender; ?></td>
        <td><?php echo $c->email; ?></td>
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
