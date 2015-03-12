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
  // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Year');
        data.addColumn('number', 'Labour');
        data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});
        data.addColumn('number', 'Conservative');
        data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});
        data.addColumn('number', 'Lib Dems');
        data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});
        data.addColumn('number', 'UKIP');
        data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});
        data.addColumn('number', 'Green');
        data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});
        data.addColumn('number', 'SNP');
        data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});
        data.addColumn('number', 'Plaid Cymru');
        data.addColumn({type:'string', role:'tooltip'});
        data.addRows([
            <?php echo $data; ?>
        ]);

        // Set chart options
        var options = {
                        title: 'Edinburgh South general election results',
                        hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
                        vAxis: {minValue: 0},
                        colors: ['#E90000', '#0089DB', '#FFDF00', '#7E0088', '#5AC72C', '#EDE600', '#009131'],
                        tooltip: {isHtml: true}
                      };

        // Create a formatter.
        //var formatter = new google.visualization.NumberFormat({pattern:'#,###'});

        // Reformat our data.
        // formatter.format(data, 1);
        // formatter.format(data, 2);

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);

      }

    function createTooltip(candidate, party, votes) {
        //See http://stackoverflow.com/questions/2901102/how-to-print-a-number-with-commas-as-thousands-separators-in-javascript
        var betterVotes = votes.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return '<div style="padding:5px 5px 5px 5px;">' +
            candidate + ' (' + party + ')' + '<br>' + 
            '<strong>' + betterVotes + '</strong>' + ' votes' + '<br>' +
            // '<strong>' + share + '%' + '</strong>' + ' of the turnout' +
            '</div>';
    }
</script>