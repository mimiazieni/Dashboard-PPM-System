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
    <title>Dashboard-BEXRAY</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

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
                            <a class="js-arrow" href="dashboardAdmin.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Settings</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="userAdmin.php">User</a>
                                </li>
                                <li>
                                    <a href="workweekAdmin.php">Work Week</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Report Summary</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="oqa vmAdmin.php">OQAVM</a>
                                </li>
                                <li>
                                    <a href="frontEndAdmin.php">FRONT END</a>
                                </li>
                                <li>
                                    <a href="eraAdmin.php">ERA</a>
                                </li>
								 <li>
                                    <a href="bexrayAdmin.php">BE x-RAY</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>LRR REPORT</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="LRR_oqavmAdmin.php">OQAVM</a>
                                </li>
                                <li>
                                    <a href="LRR_frontendAdmin.php">FRONT END</a>
                                </li>
                                <li>
                                    <a href="LRR_eraAdmin.php">ERA</a>
                                </li>
								 <li>
                                    <a href="LRR_bexrayAdmin.php">BE x-RAY</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>DEFECTS REPORTS</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="defect_oqavmAdmin.php">OQAVM</a>
                                </li>
                                <li>
                                    <a href="defect_frontEndAdmin.php">FRONT END</a>
                                </li>
                                <li>
                                    <a href="defect_eraAdmin.php">ERA</a>
                                </li>
								 <li>
                                    <a href="defect_bexrayAdmin.php">BE x-RAY</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>LOH REPORTS</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="loh_oqavmAdmin.php">OQAVM</a>
                                </li>
                                <li>
                                    <a href="loh_frontendAdmin.php">FRONT END</a>
                                </li>
                                <li>
                                    <a href="loh_eraAdmin.php">ERA</a>
                                </li>
								 <li>
                                    <a href="loh_bexrayAdmin.php">BE x-RAY</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->+

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
<?php
$serverName = "mygsermys1ms023.nws.nexperia.com"; //serverName\instanceName
$connectionInfo = array( "Database"=>"LOH", "UID"=>"PPM_READ", "PWD"=>"PPM_READ");
$conn = sqlsrv_connect($serverName, $connectionInfo);

$currentYear = date('Y');
$currentDay = Date('l');
$currentDate = Date("d-M-Y");
$currentWeekNumber = date('W');
$workWeek = "WW".$currentWeekNumber;

$sql ="select (select count(*) 
from dbo.OQAVMView 
WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND [Defect Mode] is null )AS RESULT1,
(select count(*) 
from dbo.OQAVMView 
WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND [Defect Mode] is not null )AS RESULT11,
(select count(*) 
from dbo.FrontEndView 
WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND [Defect Mode] is null )AS RESULT2,
(select count(*) 
from dbo.FrontEndView  
WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND [Defect Mode] is not null)AS RESULT22,
(select count(*) 
from dbo.ERAView  
WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND InternalName is null AND ExternalName is null)AS RESULT3,
((select count(*) 
from dbo.ERAView  
WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND InternalName IS NOT NULL) +
(select count(*) 
from dbo.ERAView  
WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND ExternalName IS NOT NULL )) as RESULT33,
(select count(*) 
from dbo.BEXRAYView  
WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND [Defect Mode] is null )AS RESULT4,
(select isnull(count(*),0)
from dbo.BEXRAYView  
WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND [Defect Mode] IS NOT NULL )AS RESULT44";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row1 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
     //echo $row['LotNo'].", ".$row['ERAId']."<br />";
	 
	//echo $weekWeek;

?>
           <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">BE XRAY FAIL</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                           <!-- <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>-->
                                            <div class="text">
                                             <center> <h2 class=""><font color="white"><U>OQA VM</U></font></h2></center>
                                              <!--besarkn font # -->
						<h2 class="text-center"><strong><a href="db_oqavmAdmin.php"><font color="GREEN"><?php echo(float) $row1['RESULT1']."<br />" ;?></font></a></strong></h2>
						<h2 class="text-center"><strong><a href="db_oqavmAdminfailed.php"><font color="RED"><?php echo (float) $row1['RESULT11']."<br />" ;?></font></a></strong></h2>
                                          </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart11"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                          <!--  <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>-->
                                            <div class="text">
                                             <center> <h2 class=""><font color="white"><U>FRONT END</U></font></h2></center>
                                              <!--besarkn font # -->
						<h2 class="text-center"><strong><a href="db_frontendAdmin.php"><font color="GREEN"><?php echo (float) $row1['RESULT2']."<br />" ;?></font></a></strong></h2>
						<h2 class="text-center"><strong><a href="db_frontendAdminfailed.php"><font color="RED"><?php echo (float) $row1['RESULT22']."<br />" ;?></font></a></strong></h2>
                                          </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart22"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                           <!-- <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>-->
                                           <div class="text">
                                             <center> <h2 class=""><font color="white"><U>ERA</U></font></h2></center>
                                              <!--besarkn font # -->
						<h2 class="text-center"><strong><a href="db_eraAdmin.php"><font color="GREEN"><?php echo (float) $row1['RESULT3']."<br />" ;?></font></a></strong></h2>
						<h2 class="text-center"><strong><a href="db_eraAdminfailed.php"><font color="RED"><?php echo (float) $row1['RESULT33']."<br />" ;?></font></a></strong></h2>
                                          </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart33"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                           <!-- <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div> -->
                                            <div class="text">
                                             <center> <h2 class=""><font color="white"><U>BE X-RAY</U></font></h2></center>
                                              <!--besarkn font # -->
						<h2 class="text-center"><strong><a href="db_bexrayAdmin.php"><font color="GREEN"><?php echo(float) $row1['RESULT4']."<br />" ;?></font></a></strong></h2>
						<h2 class="text-center"><strong><a href="db_bexrayAdminfailed.php"><font color="RED"><?php echo (float) $row1['RESULT44']."<br />" ;?></font></a></strong></h2>
                                          </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart44"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>		
        <?php
}
?>
 <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Lot No</th>
                                                <th>Package</th>
                                                <th>BIM</th>
                                                <th>Shift</th>
                                                <th>Work Week</th>
                                                <th>Phase</th>
                                                <th>Defect Name</th>
                                            </tr>
                                        </thead>
										<?php
$serverName = "mygsermys1ms023.nws.nexperia.com"; //serverName\instanceName
$connectionInfo = array( "Database"=>"LOH", "UID"=>"PPM_READ", "PWD"=>"PPM_READ");
$conn = sqlsrv_connect($serverName, $connectionInfo);

$currentYear = date('Y');
$currentDay = Date('l');
$currentDate = Date("d-M-Y");
$currentWeekNumber = date('W');
$workWeek = "WW".$currentWeekNumber;

$sql ="select * from dbo.BEXRAYView WHERE WorkWeek = '$workWeek' AND Year = $currentYear AND Day = '$currentDay' AND [Defect Mode] is not null ";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $show = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
  
?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $show['LotNo']."<br />" ;?></td>
                                                <td><?php echo $show['Package']."<br />" ;?></td></td>
                                                <td><?php echo $show['BIM']."<br />" ;?></td>
                                                <td><?php echo $show['Shift']."<br />" ;?></td>
                                                <td><?php echo $show['WorkWeek']."<br />" ;?></td>
                                                <td><?php echo $show['Phase']."<br />" ;?></td>
                                                <td><?php echo $show['Defect Mode']."<br />" ;?></td>
                                            </tr><?php
}
?>
                                        </tbody>
                                    </table>
                                </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Nexperia. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
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
