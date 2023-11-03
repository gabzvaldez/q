<!-- Begin Page Content -->
<div class="container-fluid" ng-controller="panelCtrl">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
  <!-- Content Row -->
  <div class="row">
    <!-- <input type="text" name="" value="<?php echo $section->abbrv; ?>"> -->
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header bg-primary">
          <font color="white"><center><?php echo $section->abbrv; ?></center></font>
        </div>
        <div class="card-body">
          <center>
            <h1 style="font-size: 4rem;color: black;">
              <b><?php echo $section->count; ?></b>
              
            </h1>
            <p><b><?php echo $section->office; ?></b></p>
          </center>
        </div>
        <div class="card-footer small text-muted">
          <div class="row">
            <div class="col-md-4">
              <a href="<?php echo base_url(); ?>dashboard/deduct_count/<?php echo $section->count; ?>/<?php echo $section->abbrv; ?>" class="btn btn-block btn-success" style="color:white;">< Previous</a>
            </div>
             <div class="col-md-4">
              <a href="<?php echo base_url(); ?>dashboard/reset_count/<?php echo $section->abbrv; ?>" class="btn btn-block btn-warning" style="color:white;">Reset</a>
            </div>
             <div class="col-md-4">
              <a href="<?php echo base_url(); ?>dashboard/add_count/<?php echo $section->count; ?>/<?php echo $section->abbrv; ?>/<?php echo $section->id; ?>" class="btn btn-block btn-success" style="color:white;">Next >
              <span class="badge badge-light"><?php echo $log_cnt; ?></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="col-md-6">
      <h3>In line</h3>
      <table class="table table-border">
        <thead>
          <tr>
            <th>Priority Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>
              <button class="btn btn-primary">Next</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div> -->

    


  </div>






</div>
<!-- /.container-fluid -->


