<?php 

$con = mysqli_connect("localhost", "root", "", "mobiles");

$query = "SELECT DISTINCT(company) , count(ID) FROM mobile_data group by company";
$res = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mobiles Info</title>
  <script src= "js/loader.js" > </script>

  <script type="text/javascript">

      ////////// Loading Google Charts
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Mobiles', 'No of Mobiles'],
          
          <?php 
            while($row=mysqli_fetch_assoc($res))
                  {
                           echo "['Company ".$row['company']."',".$row['count(ID)']."],";
                  }
          ?>
        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'right' }
        };

        

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);

        var Linechart = new google.visualization.LineChart(document.getElementById('Linechart'));
        Linechart.draw(data, options);
      }
    </script>
</head>
<body>

	<div class="panel panel-info" >
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title" align="center">Chart of Total Mobiles</h3>
              </div>
              <div class="panel-body col-sm-6">
                <div class="box box-primary col-sm-6" >
              <div class="box-header with-border">
                <h3 class="box-title">Pie Chart of Total Mobiles</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" title="Minimize">
                    <i class="fa fa-minus"></i>
                  </button>
                 
                </div>
              </div>
              <div class="box-body chart-responsive">      
                    <div id="piechart" style="height: 315px; width: 100%"></div>
              </div>
              <!-- /.box-body -->
            </div>
             
              </div>

              <div class="panel-body col-sm-6">
              	 <div class="box box-success col-sm-6" >
              <div class="box-header with-border">
                <h3 class="box-title">Line Chart of Total Mobiles</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" title="Minimize">
                    <i class="fa fa-minus"></i>
                  </button>
                 
                </div>
              </div>
              <div class="box-body chart-responsive">      
                    <div id="Linechart" style="height: 315px; width: 100%"></div>
              </div>
              <!-- /.box-body -->
            </div>
              </div>
          </div>


</body>
</html>

