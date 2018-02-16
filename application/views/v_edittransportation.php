  <?php require_once 'v_headeradmin.php' ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <center>
    <h3>Edit Data</h3>
  </center>
  <form action="<?php echo base_url(). 'Crud/update_transportation'; ?>" method="post">
    <?php
    $no = 1;
    foreach($transportation as $t){ 
      ?>
    <div class="container">
    <div class="form-group col-sm-11">
      <label for="code">Code</label>
      <input type="hidden" name="id" value="<?php echo $t->id ?>">
      <input type="text" class="form-control" name="code" placeholder="Code" value="<?php echo $t->code ?>">
    </div>
    <div class="form-group  col-sm-11">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Description" value="<?php echo $t->description ?>">
    </div>
    <div class="form-group  col-sm-11">
      <label for="depart">Departure Date</label>
      <input type="text" class="form-control" name="description" placeholder="Description" value="<?php echo $t->description ?>">
    </div>
    <div class="form-group  col-sm-11">
      <label for="seat">Seat Quantity</label>
      <input type="text" class="form-control" name="seat" placeholder="Seat" value="<?php echo $t->seat_qty ?>">
    </div>
    <div class="box=footer col-sm-11">    
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
   </div>
    <?php } ?>
  </form>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php require_once 'v_footeradmin.php' ?>
