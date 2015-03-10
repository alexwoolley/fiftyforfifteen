<?php 
//Get the data for the charts
include(locate_template('charts_data.php'));
?>

<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">

  // Load the Visualization API and the piechart package.
  google.load('visualization', '1.0', {'packages':['corechart']});

  // Set a callback to run when the Google Visualization API is loaded.
  google.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the chart, passes in the data and
  // draws it.
  function drawChart() {

    // Create the data table.
   var data = google.visualization.arrayToDataTable([
      <?php echo $data; ?>
    ]);

    // Set chart options
    var options = {
                    width:600,
                    height:425,
                    legend: {position: 'none'}
                  };

    // Create a formatter.
    var formatter = new google.visualization.NumberFormat({pattern:'#,###'});

    // Reformat our data.
    formatter.format(data, 1);

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(data, options);
    // var chart_2005 = new google.visualization.ColumnChart(document.getElementById('chart_div_2005'));
    // chart_2005.draw(data_2005, options_2005);
  }
</script>