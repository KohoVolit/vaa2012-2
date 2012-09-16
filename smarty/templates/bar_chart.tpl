<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  {literal}
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'nezhoda');
   {/literal}
   {foreach $results as $result}
        data.addColumn('number', '{$result.short_name}');
   {/foreach}
        data.addRows([
          ['shoda', 
   {foreach $results as $result}     
          {$result.result}
          {if $result.i < $result|@count},{/if}
	{/foreach}
		  ]
	    ]);
	{literal}
        var options = {
          width: 500, height: 300,
          title: 'Company Performance',
          vAxis: {title: 'Year',  titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    {/literal}
    </script>
<div id="chart_div"></div>
