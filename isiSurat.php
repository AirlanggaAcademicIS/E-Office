<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>E.Office | </title>
    <?php include ("koneksi.php"); ?>
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
<script>
$(document).ready(function(){
    $("#btn_balas").click(function(){
        $("#btn_balas").remove();
    });
});
</script>
   
    
</head>


<body class="nav-md">
 <!--persiapan data PHP-->
    
    <?php
    /*
    $judulpesan=$_GET['judulpesan'];
    $query1="Select No_Pesan from pesan where Judul_Pesan='".$judulpesan."'"; //Query select Judul Surat
    $hasil=mysql_query ($query1);
    $i=0; //$i untuk menghitung jumlah surat
    while ($data = mysql_fetch_array ($hasil)){
        $NoPesan[$i]=$data[0]; //Mendapatkan no pesan dengan judul
        echo $data[0];
        $query2="Select * from pesan where No_Pesan='".$NoPesan[$i]."'"; //Query select isi dari judul surat
        $hasil2=mysql_query ($query2);
        if($hasil2==false){
        echo "salah";
        }else{
        //$countSurat=0;
        while ($data2 = mysql_fetch_array ($hasil2)){
        $NoPesan[$i]=$data2[0];
        $JudulPesan[$i]=$data2[1];
        $Tanggal[$i]=$data2[2];
        $Waktu[$i]=$data2[3];
        $Keterangan[$i]=$data2[4];
        $Pengirim[$i]=$data2[6];
        $Penerima[$i]=$data2[7];
        $TanggalKirim[$i]=$data2[8];
        $StatusPengirim[$i]=$data2[9];
        $StatusPenerima[$i]=$data2[10];
       // $countSurat++;
    }
    }
        $i++;
    }
    */ 
    ?>   <!-- eror-->
    <?php
    $Pengguna=$_GET['pengguna'];
    $judulPesan=$_GET['judulpesan'];
    //membedakan penerima dengan pengirim sudah baca atau belum
    
    ?>
    <!-- untuk menghitung kotak masuk yang belum terbaca -->
    <?php
    $query="Select COUNT(Judul_Pesan) from pesan where Status_penerima = '0'AND Penerima = '".$Pengguna."'";
    $hasil=mysql_query ($query);
        if($hasil==false){
        echo "DB SEDANG EROR";
        }else{
        while ($data = mysql_fetch_array ($hasil)){
        $jumlahKotakMasuk=$data[0];}}
       
    ?> <!-- untuk menghitung kotak masuk yang belum terbaca -->
    
    <!--untuk menlist banyak surat -->
    <?php
    
        $query="Select * from pesan where Judul_Pesan='".$judulPesan."'"; //Query select seluruhnya dari judul surat
        $hasil=mysql_query ($query);
        if($hasil==false){
        echo "salah";
        }else{
        $countSurat=0;
       
    
    
    ?>
    <!--untuk menlist banyak surat -->
    
<!--persiapan data PHP-->    
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">

					<div class="navbar nav_title" style="border: 0;">
						<a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Woffice!</span></a>
					</div>
					<div class="clearfix"></div>

					<!-- menu prile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="images/woffice.png" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?php echo $Pengguna ?></h2>
						</div>
					</div>
					<!-- /menu prile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a href="index.php?pengguna=<?php echo $Pengguna ?>"><i class="fa fa-home"></i> Home </a>
									</li>
								<li><a><i class="fa fa-edit"></i> E-Letter <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="permintaanSurat.php">Permintaan Surat</a>
										</li>
										<li><a href="memo.php">Buat Memo</a>
										</li>
                                        <li><a href="kotakMasuk.php?pengguna=<?php echo $Pengguna ?>">Kotak Masuk <span class="badge"><?php echo $jumlahKotakMasuk ?></span></a>
										</li>
                                        <li><a href="kotakKeluar.php?pengguna=<?php echo $Pengguna ?>">Kotak Keluar</a>
										</li>
                                        
									</ul>
								</li>
                                <li><a><i class="fa fa-edit"></i> Agenda <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="checkAgenda.php">Check Agenda</a>
										</li>
										<li><a href="tulisAgenda.php">Tulis Acara</a>
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

				<div class="row"><!--badan-->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- looping listsurat-->
                        <?php while ($data = mysql_fetch_array ($hasil)){
                        
                        $NoPesan[$countSurat]=$data[0];
                        $JudulPesan[$countSurat]=$data[1];
                        $Tanggal[$countSurat]=$data[2];
                        $Waktu[$countSurat]=$data[3];
                        $Keterangan[$countSurat]=$data[4];
                        $Pengirim[$countSurat]=$data[6];
                        $Penerima[$countSurat]=$data[7];
                        $TanggalKirim[$countSurat]=$data[8];
                        $StatusPengirim[$countSurat]=$data[9];
                        $StatusPenerima[$countSurat]=$data[10];
                        if($Pengguna==$Penerima[$countSurat]){
    $queryStatusPenerima="UPDATE pesan SET Status_penerima = 1 WHERE No_Pesan='".$NoPesan[$countSurat]."'";
    mysql_query ($queryStatusPenerima);}
        else{
    $queryStatusPenerima="UPDATE pesan SET Status_pengirim = 1 WHERE No_Pesan='".$NoPesan[$countSurat]."'";
    mysql_query ($queryStatusPenerima);
        }
                            ?>
						<div id="listsurat">
                            <div class="dashboard_graph">
                               
                            <div class="x_panel">
                                <ul class="nav navbar-right panel_toolbox">                   
                                    <li>
                                        <a class="collapse-link"><?php echo"$JudulPesan[$countSurat]"; ?><i class="fa fa-chevron-up"></i></a>                    
                                    </li>                  
                                </ul>                                
                                <div class="x_content">
                                    <div class="row">                                
                                        <div class="col-md-1">                                    
                                            <img src="images/user.png" class="img-rounded" alt="nama pengguna" width=50px height=50px>                                
                                        </div>                                
                                        <div class="col-md-11">                                
                                            <h4><strong><?php echo"Judul: $JudulPesan[$countSurat]"; ?> <small> (<?php echo"$TanggalKirim[$countSurat]"; ?>)</small></strong></h4>                                
                                            <h4><strong><?php echo"Dari: $Pengirim[$countSurat]"; ?></strong></h4>                                
                                        </div>                            
                                    </div>                            
                                    <div class="row">                                
                                        <div class="col-md-12">                                    
                                            <blockquote>                                        
                                                <!--<div class="well well-sm">-->                                            
                                                    <h4>                                                
                                                        <p>
                                                            <?php echo "$Keterangan[$countSurat]"?>
                                                            <br>
                                                        </p>                                            
                                                    </h4>                                        
                                                <!--</div>-->                                    
                                            </blockquote>                                
                                        </div>                           
                                    </div>                        
                                </div>                                
                            </div>
                            
							
						</div>
                   <?php  
                    ?>
                            </div>
                            <?php $countSurat++;}}?> <!--php closing id listsurat-->
                            
                <!-- JScript looping isi surat-->
                <script> 
                var element = document.getElementById("listsurat");
                //var countSurat = php echo json_encode($i); 
                for(var i=0;i<0;i++){
                //element.innerHTML = "New Header"+text;
                //$("#listsurat").append(element.innerHTML);
                document.write(element.innerHTML+"<br>");
                }
                    function reloadFunction(){
                        location.reload();
                    }
                </script>
                <!-- JScript looping isi surat -->
                            
                            <div class="x_panel">
                                <div class="pull-left">                                
                                    <button type="button" class="btn btn-warning">LIHAT FILE</button>
                                </div>
                                <div class="pull-right">
                                <div class="panel-group" id="accordion">
                                
                                <button id="btn_balas" type="button" class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#balas" >BALAS</button>
                                
                                </div>                                    
                                </div>
                                <!--- button balas collapse-->
                                <div id="balas" class="panel-collapse collapse">
                                          <div class="x_panel">   
                                              <form class="form-horizontal" data-toggle="validator" role="form" method="post"><!-- form balas -->
                                                <h4><strong><?php echo"Judul: $JudulPesan[0]"; ?><small></small></strong></h4>                
                                                  <?php $countSurat--; 
                                                      $penerimaSuratNomer=$countSurat;//penerimaSuratNomer= array untuk penerima surat bukan dirinya sendiri
                                                      while($Pengirim[$penerimaSuratNomer]==$Pengguna && $penerimaSuratNomer!=0){$penerimaSuratNomer--;
                                                     //mencari pengirim balasan
                                                      }
                                                     
                                                    
                                                    if($Pengirim[$penerimaSuratNomer]==$Pengguna){
                                                        $PenerimaBalas=$Penerima[$countSurat];
                                                        //Mengirim pada penerima surat ketika belum ada balasan   
                                                    }else{
                                                       $PenerimaBalas=$Pengirim[$penerimaSuratNomer]; 
                                                    }
                                                       ?>
                                                  <h4><strong><?php echo"Kepada : $PenerimaBalas"; ?></strong></h4>
                                                  <br>
                                                  <div class="form-group">                                                      
                                                      <div class="col-md-12">
                                                          <label for="comment">PESAN:</label>
                                                          <textarea class="form-control" id="text_balas" placeholder="Masukan Pesan" row="10" name="keterangan"></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-md-12">
                                                          <button type="button" class="btn btn-default">Upload File</button>
                                                          <div class="pull-right">
                                                          <button type="submit" name="submit" class="btn btn-primary">Kirim Pesan</button>
                                            <?php
                                              if (isset($_REQUEST['submit'])){
                                                  $KeteranganBalas=$_POST['keterangan'];
                                                  $PengirimBalas=$Pengguna;
                                                  $TanggalBalas=date("Y-m-d");
                                                  $query ="INSERT INTO pesan (No_Pesan,Judul_Pesan,Tanggal,Waktu,Keterangan,Pengirim,Penerima,Tanggal_kirim,Status_pengirim,Status_penerima) VALUES ('null','$JudulPesan[0]','$Tanggal[0]','$Waktu[0]','$KeteranganBalas','$PengirimBalas','$PenerimaBalas','$TanggalBalas','0','0')";
                                                  mysql_query ($query);
                                              }
                                              
                                              
                                              ?>
                                                          </div>
                                                      </div>
                                                  </div>                                                  
                                              </form><!-- form balas -->
                                              <!-- setelah tombol submit di tekan-->
                                              
                                        </div>
                                    
                                </div><!-- button balas -->
                            </div>
                    </div>
                    <div class="clearfix"></div> 
                </div><!-- badan -->
  
				
                <!-- JS SCRIPT COSTUM >
                <script>
$(document).ready(function(){
    
        $("p").append(" <b>Appended text</b>.");


        $("ol").append("<li>Appended item</li>");
    
});
</script>
         -->      
                <!-- footer content -->
				<footer>
					<div class="copyright-info">
						<p class="pull-right">Website By: <a href="http://www.unair.ac.id">Universitas Airlangga production		</a>
						</p>
                        
					</div>
					<div class="clearfix"></div>
				</footer>
				<!-- /footer content -->
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
</body>

</html>
