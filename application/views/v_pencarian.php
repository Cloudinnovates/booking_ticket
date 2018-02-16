<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Online Auto Booking Form a Responsive Widget Template :: w3layouts</title>
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
		<div class="left-agileits-w3layouts-img">
			<h3>What we provide you</h3>
			<ul>
				<li><span>.</span><a href="<?php echo base_url('login'); ?>">Login</li></a>
				<li><span>.</span>Online booking facility</li>
				<li><span>.</span>GPS Tracking system</li>
				<li><span>.</span>Credit and debit card payment facility</li>
			</ul>
			<p>- Your destination is our goal.</p>
		</div>
		<div class="book-appointment">
			<div class="book-agileinfo-form">
				
				<table class="table table-hover">
					<tr>
						<th>From</th>
						<th>To</th>
						<th>Depart</th>
						<th>Price</th>
					</tr>
					<?php 
						$no=0;
						foreach ($hasil as $h) {
							$no++;
					?>
					<tr>
						<td> <?php echo $h->rute_from; ?> </td>
						<td> <?php echo $h->rute_to; ?> </td>
						<td> <?php echo $h->depart_on; ?> </td>
						<td> <?php echo $h->price; ?> </td>
					</tr>
					<?php } ?>
				</table>

			</div>

		</div>
	</div>
	<!--copyright-->
	<div class="copy-w3layouts">
		<p>&copy; 2018. Online Auto Booking Form . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
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