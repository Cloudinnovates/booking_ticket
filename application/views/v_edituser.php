  <?php require_once 'v_headeradmin.php' ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Edit User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Edit User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
  <form action="<?php echo base_url(). 'Crud/update_user'; ?>" method="post">
    <?php
    $no = 1;
    foreach($user as $u){ 
      ?>
    <div class="container">
    <div class="form-group col-sm-11">
      <label for="username">Username</label>
      <input type="hidden" name="id" value="<?php echo $u->id ?>">
      <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $u->username ?>">
    </div>
    <div class="form-group  col-sm-11">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="password" value="<?php echo $u->password ?>">
    </div>
    <div class="form-group  col-sm-11">
      <label for="fullname">Fullname</label>
      <input type="text" class="form-control" placeholder="Fullname" name="fullname" value="<?php echo $u->fullname ?>">
    </div>
    <div class="form-group  col-sm-11">
      <label for="level">Level</label>
       <select id="country1" onchange="change_country(this.value)" class="form-control" name="level" value="<?php echo $u->level ?>">
            <option value="1">Admin</option>
            <option value="2">User</option>
          </select>
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
