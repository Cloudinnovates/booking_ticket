<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Flight Booking</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Online Auto Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bs/css/bootstrap.min.css" />
	<link href="<?php echo base_url(); ?>assets/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat+Alternates:200,400,500,600,700" rel="stylesheet">
	<!--//fonts-->

</head>

<body>
	<!--background-->
	<h1> <span>F</span>light <span>B</span>ooking </h1>
	<div class="bg-agile">
		<div class="book-appointment">
			<div class="book-agileinfo-form">
				<form action="#" method="post">
					<div class="agileits-btm-spc form-text">
					</div>
					<h2 class="sub-head-w3ls">Booking Details</h2>
					
					<!-- <div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text3-title">Nama Pesawat </div>
						<div class="agileits-btm-spc form-text3-title">From</div>
						<div class="agileits-btm-spc form-text3-title">To</div>
						<div class="agileits-btm-spc form-text3-title">Departure</div>
						<div class="agileits-btm-spc form-text3-title">Arrive</div>
						<div class="agileits-btm-spc form-text3-title">Harga</div>
						<div class="agileits-btm-spc form-text3-title">Pesan</div>
					</div>
					<div class="main-agile-sectns">
							<div class="agileits-btm-spc form-text3-content"><?php echo $row->description; ?></div>
							<div class="agileits-btm-spc form-text3-content"><?php foreach ($flight as $row):?><?php echo $row->rute_from; ?><?php endforeach;?></div>
							<div class="agileits-btm-spc form-text3-content"><?php foreach ($flight as $row):?><?php echo $row->rute_to; ?><?php endforeach;?></div>
							<div class="agileits-btm-spc form-text3-content"><?php foreach ($flight as $row):?><?php echo $row->depart_on; ?><?php endforeach;?></div>
							<div class="agileits-btm-spc form-text3-content"><?php foreach ($flight as $row):?><?php echo $row->arrive_at; ?><?php endforeach;?></div>
							<div class="agileits-btm-spc form-text3-content"><?php foreach ($flight as $row):?><?php echo $row->price; ?><?php endforeach;?></div>
							<div class="agileits-btm-spc form-text3-content"><?php foreach ($flight as $row):?><button>Pesan</button><?php endforeach;?></div>

						</div> -->

						<!-- </div> -->
						<div class="table-responsive">
							<table class="table">
								<thead class="agileits-btm-spc form-text3-title">
									<tr>
										<th><center>Nama Pesawat</center></th>
										<th><center>From</center></th>
										<th><center>To</center></th>
										<th><center>Depart On</center></th>
										<th><center>Arrive At</center></th>
										<th><center>Duration</center></th>
										<th><center>Harga</center></th>
										<th><center></center></th>
									</tr>
								</thead>
								<tbody class="agileits-btm-spc form-text3-content">
									<?php foreach ($flight as $row):
									$arrive_at = strtotime($row->arrive_at);
									$depart_on = strtotime($row->depart_on);
									$durasi = $arrive_at-$depart_on;
									?>
									<tr>
										<td><?php echo $row->description; ?></td>
										<td><?php echo $row->rute_from; ?></td>
										<td><?php echo $row->rute_to; ?></td>
										<td><?php echo $row->depart_on; ?></td>
										<td><?php echo $row->arrive_at; ?></td>
										<td><?php echo gmdate("H", $durasi). ' jam '.gmdate("i", $durasi).' menit '; ?></td>
										<td><?php echo "Rp. " .number_format($row->price,2,",",".");?></td>
										<td>
											<a href="<?php echo base_url(
												'Welcome/step1/'.$row->ruteid); ?>" class="btn btn-sm btn-primary">Pesan
												
											</a>
										</td>
									<?php endforeach;?>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
			</div>

		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/bs/js/bootstrap.min.js"></script>
	<!--copyright-->
	<!--//copyright-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
	<!-- Time -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time -->
	<!-- Calendar -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<script src="<?php echo base_url();?>assets/js/jquery.maskMoney.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#price').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
		});
	</script>

</body>

</html>