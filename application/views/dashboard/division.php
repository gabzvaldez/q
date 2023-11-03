

<!-- Begin Page Content -->
<div class="container-fluid" ng-init="div('<?php echo $division;?>')" ng-controller="divisionCtrl" >

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->
  <!-- <?php echo $division;?> -->
  <div class="row">

    <div class="col-md-3" ng-repeat="q in q">
      <div class="card mb-4">
        <div class="card-header bg-primary">
          <font color="white"><center>{{q.abbrv}}</center></font>
        </div>
        <div class="card-body {{q.blink}}" >
          <center>
            <h1 class="off {{q.blink}}" >
              {{q.count}}
            </h1>
          </center>
        </div>
        <div class="card-footer small text-muted">{{q.office}}</div>
      </div>
    </div>

    


  </div>






</div>
<!-- /.container-fluid -->

<style>
  .blink {
    animation: blinker 0.8s linear infinite;
    background-color: #a1e3a9;

    color: #ffffff;
    font-size: 4rem;
    font-weight: bold;
    font-family: sans-serif;
  }

  @keyframes blinker {  
  50% { opacity: 0; }
  }
  

  .off{
     font-size: 4rem;
     color: black;
  }
</style>


