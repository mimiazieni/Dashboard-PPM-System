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
    <title>DEFECT BE x-RAY REPORT</title>

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
<form name="form1" action="defect_BEXRAYShowAdmin.php" method="POST">
	<h2>DEFECT BE x-RAY REPORT</h2>
    <br>
    <table width="430" height="118">
     <input name="update1" type="hidden" value="COURSE"/>
  			<div>
            <tr>
  				<td width="150" align="center"><div align="left"><strong>&nbsp;Year</strong></div></td>
  				<td> <select name="search" id="search" class="form-control-sm form-control">
                        <option value="0">Please select</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                    </select></td>
  			</tr>
        
            <tr>
  				<td width="250" align="center"><div align="left"><strong>&nbsp;Start Week</strong></div></td>
  				<td> <select name="search1" id="SelectLm" class="form-control-sm form-control">
                        <option value="0">Please select</option>
                        <option value="WW01">WW01</option>
                        <option value="WW02">WW02</option>
                        <option value="WW03">WW03</option>
                        <option value="WW04">WW04</option>
                        <option value="WW05">WW05</option>
                        <option value="WW06">WW06</option>
                        <option value="WW07">WW07</option>
                        <option value="WW08">WW08</option>
                        <option value="WW09">WW09</option>
                        <option value="WW10">WW10</option>
						<option value="WW11">WW11</option>
                        <option value="WW12">WW12</option>
                        <option value="WW13">WW13</option>
                        <option value="WW14">WW14</option>
                        <option value="WW15">WW15</option>
                        <option value="WW16">WW16</option>
                        <option value="WW17">WW17</option>
                        <option value="WW18">WW18</option>
                        <option value="WW19">WW19</option>
                        <option value="WW20">WW20</option>
                        <option value="WW21">WW21</option>
                        <option value="WW22">WW22</option>
                        <option value="WW23">WW23</option>
                        <option value="WW24">WW24</option>
                        <option value="WW25">WW25</option>
                        <option value="WW26">WW26</option>
                        <option value="WW27">WW27</option>
                        <option value="WW28">WW28</option>
                        <option value="WW29">WW29</option>
                        <option value="WW30">WW30</option>
						<option value="WW31">WW31</option>
                        <option value="WW32">WW32</option>
                        <option value="WW33">WW33</option>
                        <option value="WW34">WW34</option>
                        <option value="WW35">WW35</option>
                        <option value="WW36">WW36</option>
                        <option value="WW37">WW37</option>
                        <option value="WW38">WW38</option>
                        <option value="WW39">WW39</option>
                        <option value="WW40">WW40</option>
						<option value="WW41">WW41</option>
                        <option value="WW42">WW42</option>
                        <option value="WW43">WW43</option>
                        <option value="WW44">WW44</option>
                        <option value="WW45">WW45</option>
                        <option value="WW46">WW46</option>
                        <option value="WW47">WW47</option>
                        <option value="WW48">WW48</option>
                        <option value="WW49">WW49</option>
                        <option value="WW50">WW50</option>
						<option value="WW51">WW51</option>
                        <option value="WW52">WW52</option>
                        <option value="WW53">WW53</option>
                        <option value="WW51">WW54</option>
                    </select></td></tr>
  		
<tr>
      <td width="150" align="center"><div align="left"><strong>&nbsp;End Week</strong></div></td>
  				<td><select name="search2" id="SelectLm" class="form-control-sm form-control">
                        <option value="0">Please select</option>
                        <option value="WW01">WW01</option>
                        <option value="WW02">WW02</option>
                        <option value="WW03">WW03</option>
                        <option value="WW04">WW04</option>
                        <option value="WW05">WW05</option>
                        <option value="WW06">WW06</option>
                        <option value="WW07">WW07</option>
                        <option value="WW08">WW08</option>
                        <option value="WW09">WW09</option>
                        <option value="WW10">WW10</option>
						<option value="WW11">WW11</option>
                        <option value="WW12">WW12</option>
                        <option value="WW13">WW13</option>
                        <option value="WW14">WW14</option>
                        <option value="WW15">WW15</option>
                        <option value="WW16">WW16</option>
                        <option value="WW17">WW17</option>
                        <option value="WW18">WW18</option>
                        <option value="WW19">WW19</option>
                        <option value="WW20">WW20</option>
                        <option value="WW21">WW21</option>
                        <option value="WW22">WW22</option>
                        <option value="WW23">WW23</option>
                        <option value="WW24">WW24</option>
                        <option value="WW25">WW25</option>
                        <option value="WW26">WW26</option>
                        <option value="WW27">WW27</option>
                        <option value="WW28">WW28</option>
                        <option value="WW29">WW29</option>
                        <option value="WW30">WW30</option>
						<option value="WW31">WW31</option>
                        <option value="WW32">WW32</option>
                        <option value="WW33">WW33</option>
                        <option value="WW34">WW34</option>
                        <option value="WW35">WW35</option>
                        <option value="WW36">WW36</option>
                        <option value="WW37">WW37</option>
                        <option value="WW38">WW38</option>
                        <option value="WW39">WW39</option>
                        <option value="WW40">WW40</option>
						<option value="WW41">WW41</option>
                        <option value="WW42">WW42</option>
                        <option value="WW43">WW43</option>
                        <option value="WW44">WW44</option>
                        <option value="WW45">WW45</option>
                        <option value="WW46">WW46</option>
                        <option value="WW47">WW47</option>
                        <option value="WW48">WW48</option>
                        <option value="WW49">WW49</option>
                        <option value="WW50">WW50</option>
						<option value="WW51">WW51</option>
                        <option value="WW52">WW52</option>
                        <option value="WW53">WW53</option>
                        <option value="WW51">WW54</option>
                    </select></td></tr>
					</select></td>
				</tr></table>
		<table>
				<tr> 
                  <button type="submit" value="search" class="btn btn-primary btn-sm"> Search
					</button> &nbsp;
					</button></tr></div></table>
		 <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Nexperia. All rights reserved.</p>
                                </div>
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
<!-- end document-->
