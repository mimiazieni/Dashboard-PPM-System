<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>LRR OQA VM SHOW</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" 
		

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo3.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
												<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Report Summary</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="oqa vm.php">OQAVM</a>
                                </li>
                                <li>
                                    <a href="frontEnd.php">FRONT END</a>
                                </li>
                                <li>
                                    <a href="era.php">ERA</a>
                                </li>
								 <li>
                                    <a href="bexray.php">BE x-RAY</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>LRR REPORT</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="LRR_oqavm.php">OQAVM</a>
                                </li>
                                <li>
                                    <a href="LRR_frontend.php">FRONT END</a>
                                </li>
                                <li>
                                    <a href="LRR_era.php">ERA</a>
                                </li>
								 <li>
                                    <a href="LRR_bexray.php">BE x-RAY</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>DEFECTS REPORTS</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="defect_oqavm.php">OQAVM</a>
                                </li>
                                <li>
                                    <a href="defect_frontEnd.php">FRONT END</a>
                                </li>
                                <li>
                                    <a href="defect_era.php">ERA</a>
                                </li>
								 <li>
                                    <a href="defect_bexray.php">BE x-RAY</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>LOH REPORTS</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="loh_oqavm.php">OQAVM</a>
                                </li>
                                <li>
                                    <a href="loh_frontend.php">FRONT END</a>
                                </li>
                                <li>
                                    <a href="loh_era.php">ERA</a>
                                </li>
								 <li>
                                    <a href="loh_bexray.php">BE x-RAY</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                    <!--dekat sini letak nama nanti-->
											<a href="log_out.php" class="zmdi zmdi-power" >  Log out</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
												 <a href="log_out.php">
                                                    <i class="zmdi zmdi-power"></i>   Log out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
       <div class="main-content">
                <div class="section__content section__content--p30"> 
<center>
	<form name="form2" action="excel.php" method="POST">
	<div class="row m-t-30">
	<form name="form2" action="excel.php" method="POST"><button type="submit" value ="excel" class="btn btn-primary btn-sm">Export to Excel</button></form>
	</div></br>
	
<?php
$serverName = "mygsermys1ms023.nws.nexperia.com"; //serverName\instanceName
$connectionInfo = array( "Database"=>"LOH", "UID"=>"PPM_READ", "PWD"=>"PPM_READ");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	$searchq1 = $_POST['search1'];
	$searchq2 = $_POST['search2'];
	$sql1 ="SELECT WorkWeek,COUNT(LotNo) as 'unit', sum(QtyDefect)as 'reject' FROM dbo.OQAVMView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and Day = 'Saturday' group by WorkWeek order by WorkWeek";

$stmt1 = sqlsrv_query( $conn, $sql1 );

	$sql2 ="SELECT WorkWeek,COUNT(LotNo) as 'unit', sum(QtyDefect)as 'reject' FROM dbo.OQAVMView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and Day = 'Sunday' group by WorkWeek order by WorkWeek";

$stmt2 = sqlsrv_query( $conn, $sql2 );

	$sql3 ="SELECT WorkWeek,COUNT(LotNo) as 'unit', sum(QtyDefect)as 'reject' FROM dbo.OQAVMView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and Day = 'Monday' group by WorkWeek order by WorkWeek";

$stmt3 = sqlsrv_query( $conn, $sql3 );

	$sql4 ="SELECT WorkWeek,COUNT(LotNo) as 'unit', sum(QtyDefect)as 'reject' FROM dbo.OQAVMView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and Day = 'Tuesday' group by WorkWeek order by WorkWeek ";

$stmt4 = sqlsrv_query( $conn, $sql4 );

	$sql5 ="SELECT WorkWeek,COUNT(LotNo) as 'unit', sum(QtyDefect)as 'reject' FROM dbo.OQAVMView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and Day = 'Wednesday' group by WorkWeek order by WorkWeek";

$stmt5 = sqlsrv_query( $conn, $sql5 );

	$sql6 ="SELECT WorkWeek,COUNT(LotNo) as 'unit', sum(QtyDefect)as 'reject' FROM dbo.OQAVMView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and Day = 'Thursday' group by WorkWeek order by WorkWeek";

$stmt6 = sqlsrv_query( $conn, $sql6 );

	$sql7 ="SELECT WorkWeek,COUNT(LotNo) as 'unit', sum(QtyDefect) as 'reject' FROM dbo.OQAVMView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and Day = 'Friday' group by WorkWeek order by WorkWeek";

$stmt7 = sqlsrv_query( $conn, $sql7 );

	$sql8 ="SELECT WorkWeek,sum(QtyDefect) as 'totalreject', count(LotNo) as 'totalunit',CAST(ROUND((convert(decimal,((sum(QtyDefect ))))/(count(LotNo))*100), 4) AS NUMERIC(20,2)) as result
FROM dbo.OQAVMView 
WHERE Year like '%$searchq%' 
AND WorkWeek BETWEEN '$searchq1'
 AND '$searchq2' 
group by WorkWeek 
order by WorkWeek";

$stmt8 = sqlsrv_query( $conn, $sql8 );

while( ($row8 = sqlsrv_fetch_array( $stmt8, SQLSRV_FETCH_ASSOC) ) && ($row7 = sqlsrv_fetch_array( $stmt7, SQLSRV_FETCH_ASSOC) ) && ($row6 = sqlsrv_fetch_array( $stmt6, SQLSRV_FETCH_ASSOC) ) && ($row5 = sqlsrv_fetch_array( $stmt5, SQLSRV_FETCH_ASSOC) ) && ($row4 = sqlsrv_fetch_array( $stmt4, SQLSRV_FETCH_ASSOC) ) && ($row3 = sqlsrv_fetch_array( $stmt3, SQLSRV_FETCH_ASSOC) ) && ($row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) && ($row1 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_ASSOC) )) {
?>
 <table rules="all" border = '2' class="table"  >
                                   
 <tr bgcolor="#73C6B6" >
    <th bgcolor=#E59866><?php echo $row8['WorkWeek']."<br />" ;?></th>
    <th>Saturday</th>
    <th>Sunday</th>
    <th>Monday</th>
    <th>Tuesday</th>
    <th>Wednesday</th>
    <th>Thursday</th>
    <th>Friday</th>
	<th>TOTAL</th>
  </tr></thead>    <tbody>
  <tr>
	<th bgcolor="#73C6B6">Lot</th>  
    <td bgcolor="#fff"><?php echo (float) $row1['unit']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row2['unit']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row3['unit']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row4['unit']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo(float)  $row5['unit']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo(float)  $row6['unit']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row7['unit']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row8['totalunit']."<br />" ;?></td>
  </tr>
  <tr>
    <th bgcolor="#73C6B6">Lot Reject</th>  
    <td bgcolor="#fff"><?php echo (float) $row1['reject']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row2['reject']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row3['reject']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row4['reject']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row5['reject']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row6['reject']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row7['reject']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row8['totalreject']."<br />" ;?></td>
  </tr>
  <tr>
    <th bgcolor="#73C6B6">LRR %</th>
    <td colspan='7' bgcolor="#fff"><center><?php echo 'PPM Formula = ( '.$row8['totalreject'].' / '.$row8['totalunit'].') * 100  '  ;?></center></td>
	  <td bgcolor="#fff"><font color="red"><?php echo (float) $row8['result']."<br />" ;?></font></td>
  </tr>
</tbody><?php
} ?></table> 
<?php  
 $serverName = "mygsermys1ms023.nws.nexperia.com"; //serverName\instanceName
 $connectionInfo = array( "Database"=>"LOH", "UID"=>"PPM_READ", "PWD"=>"PPM_READ");
 $conn = sqlsrv_connect($serverName, $connectionInfo);  
 if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	$searchq1 = $_POST['search1'];
	$searchq2 = $_POST['search2'];
	$sql ="SELECT WorkWeek,CAST(ROUND((convert(decimal,((sum(QtyDefect ))))/(count(LotNo))*100), 4) AS NUMERIC(20,2)) as result FROM dbo.OQAVMView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' group by WorkWeek order by WorkWeek";

 $stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
 ?>  
<!doctype html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
	  ['WEEK', 'PPM RESULT'],
  <?php
	 while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))  
                          {  
                               echo  "['".$row["WorkWeek"]."',".$row["result"]."],";  
                          }  
                          ?>
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'width':900, 'height':400 , 'axisY':{ minimum: 0,includeZero: true}};

  // Display the chart inside the <div> element with id="ColumnChart"
  var chart = new google.visualization.ColumnChart(document.getElementById('ColumnChart'));
  chart.draw(data, options);
}
</script>

	</head>
<h2>LRR OQA VM PPM TREND CHART</h2>
			<div id="ColumnChart"></div>

</html>
		 <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Nexperia. All rights reserved.</p>
                                </div>
                            </div>
                        </div></div></div></div>                                   
<?php } }?>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">


    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
