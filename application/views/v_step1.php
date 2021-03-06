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
				<div class="main-agile-sectns">
					<div class="agileits-btm-spc form-text1">
					</div>
					<div class="agileits-btm-spc form-text2">
					</div>
				</div>
				<div class="agileits-btm-spc form-text">
				</div>
				<div class="table-responsive">
					<table class="table">
						<thead class="agileits-btm-spc form-text3-title">
							<tr>
								<th><center>Asal</center></th>
								<th><center>Tujuan</center></th>
								<th><center>Keberangkatan</center></th>
								<th><center>Kedatangan</center></th>
								<th><center>Durasi</center></th>
							</tr>
						</thead>
						<tbody class="agileits-btm-spc form-text3-content">
							<?php foreach($flight as $row):
							$arrive_at = strtotime($row->arrive_at);
							$depart_on = strtotime($row->depart_on);
							$durasi = $arrive_at-$depart_on;
							?>
							<tr>
								<td><center><?php echo $row->rute_from ?></center></td>
								<td><center><?php echo $row->rute_to ?></center></td>
								<td><center><?php echo $row->depart_on ?></center></td>
								<td><center><?php echo $row->arrive_at ?></center></td>
								<td><center><?php echo gmdate("H", $durasi).' jam '.gmdate("i", $durasi).' menit '; ?></center></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><br>
<div class="bg-agile">

	<div class="book-appointment">
		<div class="book-agileinfo-form">
			<div class="clear"></div>
			<form action="<?php echo base_url('welcome/step2');?>" method="post">
				<h2 class="sub-head-w3ls">Isi Data Diri</h2>
				<div class="main-agile-sectns">
					<div class="agileits-btm-spc form-text1">
						<?php foreach ($flight as $x): ?>
						<input type="hidden" name="ruteid" value="<?php echo $x->ruteid; ?>">	
						<?php endforeach; ?>
						<input type="text" name="name" placeholder="Name" required="" >
					</div>
					<div class="agileits-btm-spc form-text2">
						<input type="text" name="address" placeholder="Address" required="" >
					</div>
				</div>
				<div class="main-agile-sectns">
					<div class="agileits-btm-spc form-text1">
						<input type="text" name="phone" placeholder="Phone" required="" >
					</div>
					<div class="agileits-btm-spc form-text2">
						<select id="country1" onchange="change_country(this.value)" class="frm-field required sect" name="gender">
							<option value="" hidden disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
				</div>
				<div class="main-agile-sectns">
					<div class="agileits-btm-spc form-text1">
						<input type="email" name="email" placeholder="Email" required="" >
					</div>
				</div>

				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
			</form>
		</div>

	</div>
</div>
<!--copyright-->
<!--//copyright-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bs/js/bootstrap.min.js"></script>
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
	<<!-- script type="text/javascript">
		$(document).ready(function(){
			var rute_from = $("#rute_from");
			var rute_to = $("#rute_to");
		$(".btn-submit").click(function(){
			window.location = "<?php echo site_url('welcome/search/'); ?>" + rute_from.val() + "/" + rute_to.val();
		});
		});
	</script> -->

</body>

</html>