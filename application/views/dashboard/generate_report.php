<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Summary of Reports</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->
  <div class="row">
    <table class="table table-bordered">
      <thead>
        <tr style="background-color: rgba(0, 179, 60, 0.2);">
          <th>Province</th>
          <th>Municipality</th>
          <th>Health Facility</th>
          <th>Date Submitted</th>
          <th>Children Vaccinated (0 - 11 Months)</th>
          <th>Children Vaccinated (12 - 59 Months)</th>
          <th>Children Deferred</th>
          <th>Children Refused</th>
          <th>Children Refused</th>
          <th>Vials Received</th>
          <th>Vials Used</th>
          <th>Vials Unused</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Bukidnon</th>
          <th>Manolo Fortich</th>
          <th>BPH - Manolo</th>
          <th>Nov. 23, 2019</th>
          <th>34324</th>
          <th>244</th>
          <th>100</th>
          <th>45</th>
          <th>233</th>
          <th>35</th>
          <th>2</th>
          <th>65</th>
          
        </tr>
      </tbody>
    </table>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <h3>Number of Children Vaccinated (0 - 11 Months) per Province</h3>
      <canvas id="myPieChart" width="100" height="100"></canvas>
    </div>
    <br><br>
    <script type="text/javascript">
      var ctx = document.getElementById('myPieChart').getContext('2d');

      // For a pie chart
      var myPieChart = new Chart(ctx, {
          type: 'pie',
          data: {
              datasets: [{

                  data: [10, 20, 30, 40, 50],
                  backgroundColor: [
                      'rgba(0, 92, 230, 0.2)',
                      'rgba(0, 179, 60, 0.2)',
                      'rgba(187, 51, 255, 0.2)',
                      'rgba(255, 77, 196, 0.2)',
                      'rgba(255, 206, 86, 0.2)',

                  ],
                  borderColor: [
                      'rgba(0, 92, 230, 1)',
                      'rgba(0, 179, 60, 1)',
                      'rgba(187, 51, 255, 1)',
                      'rgba(255, 77, 196, 1)',
                      'rgba(255, 206, 86, 1)',

                  ],
                  borderWidth: 1
              }],

              // These labels appear in the legend and in the tooltips when hovering different arcs
              labels: [
                  'Misamis Oriental',
                  'Misamis Occidental',
                  'Bukidnon',
                  'Lanao del Norte',
                  'Camiguin'
              ]
          },
          options: {

          }
      });
    </script>

    <div class="col-md-6">
      <h3>Number of Children Vaccinated (12-59 Months) per Province</h3>
      <canvas id="myPieChart2" width="100" height="100"></canvas>
    </div>
    <br><br>
    <script type="text/javascript">
      var ctx = document.getElementById('myPieChart2').getContext('2d');

      // For a pie chart
      var myPieChart2 = new Chart(ctx, {
          type: 'pie',
          data: {
              datasets: [{

                  data: [10, 20, 30, 40, 50],
                  backgroundColor: [
                      'rgba(0, 92, 230, 0.2)',
                      'rgba(0, 179, 60, 0.2)',
                      'rgba(187, 51, 255, 0.2)',
                      'rgba(255, 77, 196, 0.2)',
                      'rgba(255, 206, 86, 0.2)',

                  ],
                  borderColor: [
                      'rgba(0, 92, 230, 1)',
                      'rgba(0, 179, 60, 1)',
                      'rgba(187, 51, 255, 1)',
                      'rgba(255, 77, 196, 1)',
                      'rgba(255, 206, 86, 1)',

                  ],
                  borderWidth: 1
              }],

              // These labels appear in the legend and in the tooltips when hovering different arcs
              labels: [
                  'Misamis Oriental',
                  'Misamis Occidental',
                  'Bukidnon',
                  'Lanao del Norte',
                  'Camiguin'
              ]
          },
          options: {

          }
      });
    </script>

  </div>

<br><br>
</div>
<!-- /.container-fluid -->


