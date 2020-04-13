<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Database</title>
<link rel="stylesheet" type="text/css" href="css/defs.css"/>
<title>Database</title>
<?php
require "db_connect.php";
$query1 = "SELECT * FROM patients NATURAL JOIN state NATURAL JOIN status NATURAL JOIN nationality NATURAL JOIN transmission order by `Patient Number`";
$query2 = "SELECT * FROM `state`";
$query3 = "SELECT count(*),`State code` FROM `patients` GROUP BY `State code` ORDER BY `State code`";
$result1 = $conn->query($query1) or die($conn->error);
$result2 = $conn->query($query2) or die($conn->error);
$result3 = $conn->query($query3) or die($conn->error);
?>
<body>
<div class="header">
<h1>Database</h1>
</div>
<div id="navbar">
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <a href="report.php">Report</a>
  <a href="statistics.php">Statistics</a>
</div>
<br><br>
<table id="Confirms" border ="2" style="length:900px;width:350px;">
                  <thead>
                    <tr style= "background-color: #FF3C33;">
                      <td>Patient Number</td>
                      <td>State Code</td>
                      <td>Date Announced</td>
                      <td>Age Bracket</td>
					  <td>Gender</td>
					  <td>Notes</td>
					  <td>Detected State</td>
					  <td>Current Status</td>
					  <td>Nationality</td>
					  <td>Type of Transmission</td>
                    </tr>
                  </thead>
                <tbody>
                    <?php
                      while(($row = $result1->fetch_row()) !== null){
                        echo
                        "<tr>
                          <td>{$row['0']}</td>
                          <td>{$row['1']}</td>
                          <td>{$row['2']}</td>
                          <td>{$row['3']}</td>
						  <td>{$row['4']}</td>
						  <td>{$row['5']}</td>
						  <td>{$row['6']}</td>
						  <td>{$row['7']}</td>
						  <td>{$row['8']}</td>
						  <td>{$row['9']}</td>
                        </tr>\n";
                      }
                    ?>
                </tbody>
</table>
<div id="footer">
<div id=help>
  <pre>
    Useful Links: <a href="https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf">HELPLINE NUMBERS</a>        <a href="https://www.mohfw.gov.in/">Government</a>       <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">WHO</a>       <a href="https://www.cdc.gov/coronavirus/2019-ncov/faq.html">CDC</a>     <a href="database.php">Database</a>
  </pre>
</div>
        <div id="helpp">Copyright &copy; 2020 Vishal & Vijay.</div>
</div>
</body>
</head>
</html>