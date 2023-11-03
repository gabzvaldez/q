

<!-- Begin Page Content -->
<div class="container-fluid" ng-controller="dashboardCtrl">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6" ng-repeat="q in q">
            <div class="card mb-6">
              <div class="card-header bg-primary">
                <font color="white"><center>{{q.abbrv}}</center></font>
                <center><button type="button" class="btn btn-info" data-toggle="modal" data-target="#MyModal" ng-click="divv(q.id)">+</button></center>
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
        <br>
        <br>
        <br>
        <center>
      <div class="col-md-8">
        <video style="padding-bottom: 21%" width="1024px" height="720px" autoplay controls loop>
          <source src="<?php echo base_url(); ?>assets/videos/rd.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>
      </div>
      </center>
    </div>
  </div>


<div id="printThis">
  <center>
  <div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    
    <div class="modal-dialog modal-lg">
      
   
      <div class="modal-content">
        
       
        <div class="modal-header">
        <!-- <h5 class="modal-title" id="gridSystemModalLabel">DOH Center for Health Development - Northern Mindanao</h4> -->
        </div>
      
       
        <div class="modal-body">
          <div class="body-message">
            
              <h3>{{q_d[0].office}}</h3>
              <h1>{{inc}}</h1>
           
              <button id="btnPrint" type="button" class="btn btn-info" ng-click="add_cntr(q_d[0].id)">Print</button>
            </div>  
          </div>
        </div>
    </div>
  </div>
</div>

</center>
<!-- </div> -->
<!-- /.container-fluid -->
</div>
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

  @media screen {
  #printSection {
      display: none;
    }
  }

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
  }
}
</style>


