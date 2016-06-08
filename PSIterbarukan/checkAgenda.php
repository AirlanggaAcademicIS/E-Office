
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>AGENDA</title>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>E.Office | </title>
	<?php 
     include ("koneksi.php");
    ?>

	<!-- Bootstrap core CSS -->

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="fonts/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">

	<!-- Custom styling plus plugins -->
	<link href="css/custom.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
	<link href="css/icheck/flat/green.css" rel="stylesheet" />
	<link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

	<script src="js/jquery.min.js"></script>
	<script src="js/nprogress.js"></script>

	<!--[if lt IE 9]>
	<script src="../assets/js/ie8-responsive-file-warning.js"></script>
	<![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php 
    $Pengguna=$_GET['pengguna'];
    $query="Select COUNT(Judul_Pesan) from pesan where Status_penerima = '0'AND Penerima = '".$Pengguna."'";
    $hasil=mysql_query ($query);
        if($hasil==false){
        echo "DB SEDANG EROR";
        }else{
        while ($data = mysql_fetch_array ($hasil)){
        $jumlahKotakMasuk=$data[0];}}
		
    ?>
     <?php 
    $Pengguna=$_GET['pengguna'];
    $query="Select Jabatan from pegawai where Nama_Pegawai = '".$Pengguna."'";
    $hasil=mysql_query ($query);
        if($hasil==false){
        echo "DB SEDANG EROR";
        }else {
         while ($data = mysql_fetch_array ($hasil)){
        $Jabatan=$data[0];}   
        }
		
    ?>

    
   

</head>

<body class="nav-md">

	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">

					<div class="navbar nav_title" style="border: 0;">
						<a href="home.php" class="site_title"><i class="fa fa-paw"></i> <span>Woffice!</span></a>
					</div>
					<div class="clearfix"></div>

					<!-- menu prile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="images/woffice.png" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?php  echo $Pengguna ?></h2>
						</div>
					</div>
					<!-- /menu prile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a href="home.php?pengguna=<?php  echo $Pengguna ?>"><i class="fa fa-home"></i> Home </a>
									</li>
								<li><a><i class="fa fa-edit"></i> E-Letter <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="permintaanSurat.php?pengguna=<?php  echo $Pengguna ?>">Permintaan Surat</a>
										</li>
										<?php 
        if ($Jabatan=="Kadep"){ ?>
                                        <li><a href="memo.php?pengguna=<?php  echo $Pengguna ?>">Memo</a></li>
                                        <?php } ?>
                                        <li><a href="kotakMasuk.php?pengguna=<?php  echo $Pengguna ?>">Kotak Masuk <span class="badge"><?php  echo $jumlahKotakMasuk ?></span></a>
										</li>
                                        <li><a href="kotakKeluar.php?pengguna=<?php  echo $Pengguna ?>">Kotak Keluar</a>
										</li>
                                        
									</ul>
								</li>
                                <li><a><i class="fa fa-edit"></i> Agenda <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="checkAgenda.php?pengguna=<?php  echo $Pengguna ?>">Check Agenda</a>
										</li>
										<li><a href="tulisAgenda.php?pengguna=<?php  echo $Pengguna ?>">Tulis Acara</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">

				<div class="nav_menu">
					<nav class="" role="navigation">
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>
					</nav>
				</div>

			</div>
			<!-- /top navigation -->


			<!-- page content -->
			
			<div class="right_col" role="main">

				<div class="row">
                    <div class="center">AGENDA</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="dashboard_graph">
					 <h3>E-Office! <small> List Agenda</small>			
                <div class="row">
                    <div class="col-md-12">
 


<table width = "80%" border = "1" cellpadding="0" cellspacing="center" style="margin:100px auto">
	<tr>
		
							<th>Nomor</th>
                            <th>Nama Agenda</th>
                            <th>Waktu</th>
                            <th>Detail</th>
                            
		
	</tr>
	<?php 
	
		$query = mysql_query ("select id_agenda,Nama,Tanggal from event");
		$id=0;  
	while ($data = mysql_fetch_array ($query)){  
 	$id++; 
 	echo "      
        <tr>  
        <td><h5>".$id."</h5></td>
		<td><h5>".$data[1]."</h5></td>  
        <td><h5>".$data[2]."</h5></td>     
		<td><h5><a href=\"View.php?id=".$id."\">"."Detail</a></h5>"."
        </tr>   
        ";            
		} 
	?>

               </div></div>
							</div>

							<div class="clearfix">
							
							</div>
						</div>
					</div>

				</div>
                
                
				<br />

			</div>
			<!-- /page content -->

		</div>

	</div>

	<div id="custom_notifications" class="custom-notifications dsp_none">
		<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
		</ul>
		<div class="clearfix"></div>
		<div id="notif-group" class="tabbed_notifications"></div>
	</div>

	<script src="js/bootstrap.min.js"></script>

	<!-- gauge js -->
	<script type="text/javascript" src="js/gauge/gauge.min.js"></script>
	<script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
	<!-- chart js -->
	<script src="js/chartjs/chart.min.js"></script>
	<!-- bootstrap progress js -->
	<script src="js/progressbar/bootstrap-progressbar.min.js"></script>
	<script src="js/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- icheck -->
	<script src="js/icheck/icheck.min.js"></script>
	<!-- daterangepicker -->
	<script type="text/javascript" src="js/moment/moment.min.js"></script>
	<script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>

	<script src="js/custom.js"></script>

	<!-- flot js -->
	<!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
	<script type="text/javascript" src="js/flot/jquery.flot.js"></script>
	<script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
	<script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
	<script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
	<script type="text/javascript" src="js/flot/date.js"></script>
	<script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
	<script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
	<script type="text/javascript" src="js/flot/curvedLines.js"></script>
	<script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
	<script>
		$(document).ready(function() {
			// [17, 74, 6, 39, 20, 85, 7]
			//[82, 23, 66, 9, 99, 6, 2]
			var data1 = [
				[gd(2012, 1, 1), 17],
				[gd(2012, 1, 2), 74],
				[gd(2012, 1, 3), 6],
				[gd(2012, 1, 4), 39],
				[gd(2012, 1, 5), 20],
				[gd(2012, 1, 6), 85],
				[gd(2012, 1, 7), 7]
			];

			var data2 = [
				[gd(2012, 1, 1), 82],
				[gd(2012, 1, 2), 23],
				[gd(2012, 1, 3), 66],
				[gd(2012, 1, 4), 9],
				[gd(2012, 1, 5), 119],
				[gd(2012, 1, 6), 6],
				[gd(2012, 1, 7), 9]
			];
			$("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
				data1, data2
			], {
				series: {
					lines: {
						show: false,
						fill: true
					},
					splines: {
						show: true,
						tension: 0.4,
						lineWidth: 1,
						fill: 0.4
					},
					points: {
						radius: 0,
						show: true
					},
					shadowSize: 2
				},
				grid: {
					verticalLines: true,
					hoverable: true,
					clickable: true,
					tickColor: "#d5d5d5",
					borderWidth: 1,
					color: '#fff'
				},
				colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
				xaxis: {
					tickColor: "rgba(51, 51, 51, 0.06)",
					mode: "time",
					tickSize: [1, "day"],
					//tickLength: 10,
					axisLabel: "Date",
					axisLabelUseCanvas: true,
					axisLabelFontSizePixels: 12,
					axisLabelFontFamily: 'Verdana, Arial',
					axisLabelPadding: 10
						//mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
				},
				yaxis: {
					ticks: 8,
					tickColor: "rgba(51, 51, 51, 0.06)",
				},
				tooltip: false
			});

			function gd(year, month, day) {
				return new Date(year, month - 1, day).getTime();
			}
		});
	</script>

	<!-- worldmap -->
	<script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
	<script type="text/javascript" src="js/maps/gdp-data.js"></script>
	<script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
	<script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
	<!-- pace -->
	<script src="js/pace/pace.min.js"></script>
	<script>
		$(function() {
			$('#world-map-gdp').vectorMap({
				map: 'world_mill_en',
				backgroundColor: 'transparent',
				zoomOnScroll: false,
				series: {
					regions: [{
						values: gdpData,
						scale: ['#E6F2F0', '#149B7E'],
						normalizeFunction: 'polynomial'
					}]
				},
				onRegionTipShow: function(e, el, code) {
					el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
				}
			});
		});
	</script>
	<!-- skycons -->
	<script src="js/skycons/skycons.min.js"></script>
	<script>
		var icons = new Skycons({
				"color": "#73879C"
			}),
			list = [
				"clear-day", "clear-night", "partly-cloudy-day",
				"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
				"fog"
			],
			i;

		for (i = list.length; i--;)
			icons.set(list[i], list[i]);

		icons.play();
	</script>

	<!-- dashbord linegraph -->
	<script>
		var doughnutData = [{
			value: 30,
			color: "#455C73"
		}, {
			value: 30,
			color: "#9B59B6"
		}, {
			value: 60,
			color: "#BDC3C7"
		}, {
			value: 100,
			color: "#26B99A"
		}, {
			value: 120,
			color: "#3498DB"
		}];
		var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
	</script>
	<!-- /dashbord linegraph -->
	<!-- datepicker -->
	<script type="text/javascript">
		$(document).ready(function() {

			var cb = function(start, end, label) {
				console.log(start.toISOString(), end.toISOString(), label);
				$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
				//alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
			}

			var optionSet1 = {
				startDate: moment().subtract(29, 'days'),
				endDate: moment(),
				minDate: '01/01/2012',
				maxDate: '12/31/2015',
				dateLimit: {
					days: 60
				},
				showDropdowns: true,
				showWeekNumbers: true,
				timePicker: false,
				timePickerIncrement: 1,
				timePicker12Hour: true,
				ranges: {
					'Today': [moment(), moment()],
					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				opens: 'left',
				buttonClasses: ['btn btn-default'],
				applyClass: 'btn-small btn-primary',
				cancelClass: 'btn-small',
				format: 'MM/DD/YYYY',
				separator: ' to ',
				locale: {
					applyLabel: 'Submit',
					cancelLabel: 'Clear',
					fromLabel: 'From',
					toLabel: 'To',
					customRangeLabel: 'Custom',
					daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
					monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					firstDay: 1
				}
			};
			$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
			$('#reportrange').daterangepicker(optionSet1, cb);
			$('#reportrange').on('show.daterangepicker', function() {
				console.log("show event fired");
			});
			$('#reportrange').on('hide.daterangepicker', function() {
				console.log("hide event fired");
			});
			$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
				console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
			});
			$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
				console.log("cancel event fired");
			});
			$('#options1').click(function() {
				$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
			});
			$('#options2').click(function() {
				$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
			});
			$('#destroy').click(function() {
				$('#reportrange').data('daterangepicker').remove();
			});
		});
	</script>
	<script>
		NProgress.done();
	</script>
	<!-- /datepicker -->
	<!-- /footer content -->
			<!-- /top navigation -->


</body>

</html>