<!-- BEGIN VENDOR JS-->
<script src="../library/robust-assets/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="../library/robust-assets/js/plugins/extensions/jquery.knob.min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/charts/raphael-min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/charts/morris.min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/charts/chartist.min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/charts/chartist-plugin-tooltip.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/charts/chart.min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/charts/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/charts/jvector/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/charts/jvector/jquery-jvectormap-world-mill.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/extensions/moment.min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/extensions/underscore-min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/extensions/clndr.min.js" type="text/javascript"></script>
<script src="../library/robust-assets/js/plugins/extensions/unslider-min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="../library/robust-assets/js/app.min.js"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="../library/robust-assets/js/components/pages/dashboard-project.js" type="text/javascript"></script>


<script src="../library/active.js"></script>
<script src="../library/js/javascript.js" type="text/javascript"></script>
<script src="../library/chart.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->




<!-- start Data Table facility  -->
<!--
    <script src="robust-assets/js/plugins/tables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/tables/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/tables/datatables/datatable-basic.js" type="text/javascript"></script>
   -->
<!-- end Data Table facility  -->




<!-- start Data Table facility  -->

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../library/robust-assets/js/plugins/tables/jquery.dataTables.min.js" type="text/javascript"></script>
   
    
    <script src="../library/robust-assets/js/plugins/tables/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    
    
    <script src="../library/robust-assets/js/plugins/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    
    <script src="../library/robust-assets/js/plugins/tables/buttons.flash.min.js" type="text/javascript"></script>
    <script src="../library/robust-assets/js/plugins/tables/buttons.print.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../library/robust-assets/js/components/tables/datatables/datatable-advanced.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS
    <script type="text/javascript" src="library/js/chat.js"></script>-->
<!-- end Data Table facility  -->

  <!-- Charts -->
  <script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

  </script>