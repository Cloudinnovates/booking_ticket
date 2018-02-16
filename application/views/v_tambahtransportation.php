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
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <center>
    <h2>Tambah Data Rute</h2>
  </center>
  <div class="container">
  <form action="<?php echo base_url(). 'Crud/tambah_aksi_transportation'; ?>" method="post">
    <div class="form-group col-sm-11">
      <label for="code">Code</label>
      <input type="text" class="form-control" name="code" placeholder="Code">
    </div>
    <div class="form-group  col-sm-11">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Description">
    </div>
    <div class="form-group  col-sm-11">
      <label for="seat">Seat Quantity</label>
      <input type="text" class="form-control" name="seat" placeholder="Seat Quantity">
    </div>
    <div class="box=footer col-sm-11">    
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
   </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  

  <?php require_once 'v_footeradmin.php' ?>
  
