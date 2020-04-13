<!DOCTYPE HTML>
<html>
<head>
<<?php 
require "db_connect.php";
$sql1 = "SELECT COUNT(*),`Gender` FROM patients group by Gender";
$result4 = $conn->query($sql1) or die($conn->error);  
 ?>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Desktop Search Engine Market Share - 2016"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
			dataPoints: [
			<?php
			while(($row = $result4->fetch_row())!== null)
			{
				if($row['1']=='') $row['1']=='Awaiting Details';
				echo "{ y: {$row['0']}, label: '{$row['1']}' },";
			}
		?>
			]
		}
		]
	});
	chart.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
 </html>