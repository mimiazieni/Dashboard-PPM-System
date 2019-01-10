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
    <title>DEFECT BEXRAY SHOW</title>

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
	
 <table rules="all" border = '2' class="table"  >
                                   
 <tr bgcolor="#E59866" >
	 <th>WEEK</th>
    <th>DEFECT</th>
    <th>QTYDEFECT</th>
  </tr></thead>  
	<?php
$serverName = "mygsermys1ms023.nws.nexperia.com"; //serverName\instanceName
$connectionInfo = array( "Database"=>"LOH", "UID"=>"PPM_READ", "PWD"=>"PPM_READ");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	$searchq1 = $_POST['search1'];
	$searchq2 = $_POST['search2'];
	$sql ="SELECT [Defect Mode], WorkWeek, sum(QtyDefect) as count FROM dbo.BEXRAYView WHERE Year like '$searchq' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and QtyDefect > 0 and [Defect Mode] is not null group by WorkWeek,[Defect Mode]  order by WorkWeek,[Defect Mode]";
	
	$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

?>
  <tbody>
  <tr> 
     <td bgcolor="#fff"><?php echo $row['WorkWeek']."<br />" ;?></td>
	  <td bgcolor="#fff"><?php echo $row['Defect Mode']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row['count']."<br />" ;?></td>
  </tr><?php
}}?>
</tbody></table> 

 <table rules="all" border = '2' class="table"  >
                                   
 <tr bgcolor="#E59866" >
	 <th>WEEK</th>
    <th>VM QTY</th>
    <th>QTYDEFECT</th>
    <th>PPM</th>
  </tr></thead>  
		<?php
$serverName = "mygsermys1ms023.nws.nexperia.com"; //serverName\instanceName
$connectionInfo = array( "Database"=>"LOH", "UID"=>"PPM_READ", "PWD"=>"PPM_READ");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	$searchq1 = $_POST['search1'];
	$searchq2 = $_POST['search2'];
	$sql1 ="SELECT WorkWeek,sum(QtyDefect) as total1, sum(Qtyinspect3k) as 'total3k',((sum(Qtyinspect3k)*800)+(sum(Qtyinspect10k)*1200)) as tambah, sum(Qtyinspect10k)as 'total10k',sum(QtyDefect)as 'totalreject',CAST(ROUND((convert(decimal,((COALESCE(sum(QtyDefect ),0) *1000000))))/((sum(Qtyinspect3k)*400)+(sum(Qtyinspect10k)*1200)), 2) AS NUMERIC(20,2)) as result FROM dbo.BEXRAYView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' group by WorkWeek order by WorkWeek";
	
	$stmt1 = sqlsrv_query( $conn, $sql1 );
	
$sql11 ="SELECT WorkWeek,sum(QtyDefect) as total1 FROM dbo.BEXRAYView WHERE Year like '%$searchq%' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and [Defect Mode] is not null group by WorkWeek order by WorkWeek";
	
	$stmt11 = sqlsrv_query( $conn, $sql11 );
while(($row1 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_ASSOC))&&($row11 = sqlsrv_fetch_array( $stmt11, SQLSRV_FETCH_ASSOC))) {
	?>			
<tbody>
  <tr> 
	   <td bgcolor="#fff"><?php echo $row1['WorkWeek']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row1['tambah']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row11['total1']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo (float) $row1['result']."<br />" ;?></td>
  </tr><?php
}}?>
</tbody></table> 
				
 <table rules="all" border = '2' class="table"  >
                                   
 <tr bgcolor="#E59866" >
	 <th>WEEK</th>
    <th>LOT NO</th>
    <th>DEFECT</th>
    <th>PACKAGE</th>
    <th>MACHINE</th>
	 <th>PHASE</th>
    <th>TOTAL</th>
  </tr></thead>   
<?php
$serverName = "mygsermys1ms023.nws.nexperia.com"; //serverName\instanceName
$connectionInfo = array( "Database"=>"LOH", "UID"=>"PPM_READ", "PWD"=>"PPM_READ");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	$searchq1 = $_POST['search1'];
	$searchq2 = $_POST['search2'];
	$sql2 ="SELECT [Defect Mode], WorkWeek, sum(QtyDefect) as count ,Phase,Machine, Package,LotNo FROM dbo.BEXRAYView WHERE Year like '$searchq' AND WorkWeek BETWEEN '$searchq1' AND '$searchq2' and QtyDefect > 0 and [Defect Mode] is not null group by WorkWeek,[Defect Mode],Phase,Machine, Package,LotNo order by WorkWeek,[Defect Mode]";
	
	$stmt2 = sqlsrv_query( $conn, $sql2 );
if( $stmt2 === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) {
	?>
		   
<tbody>
  <tr> 
    <td bgcolor="#fff"><?php echo $row2['WorkWeek']."<br />" ;?></td>
	  <td bgcolor="#fff"><?php echo $row2['LotNo']."<br />" ;?></td>
	  <td bgcolor="#fff"><?php echo $row2['Defect Mode']."<br />" ;?></td>
	<td bgcolor="#fff"><?php echo $row2['Package']."<br />" ;?></td> 
    <td bgcolor="#fff"><?php echo $row2['Machine']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo $row2['Phase']."<br />" ;?></td>
    <td bgcolor="#fff"><?php echo $row2['count']."<br />" ;?></td>
  </tr><?php
}}?>
</tbody></table> 
		
		 <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Nexperia. All rights reserved.</p>
                                </div>
                            </div>
                        </div></div></div></div>				

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
