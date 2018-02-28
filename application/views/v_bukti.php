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
					<?php if (isset($error)): ?>
						<div class="row">
							
							<div class="col-md-12 alert alert-danger"><?php echo $error; ?></div>
							
						</div>
					<?php endif ?>
					<?php if (isset($upload_data)): ?>
						<div class="row">
							<?php foreach ($upload_data as $key => $value):?>
							
							<div class="col-md-12 alert alert-success"><?php echo $key; ?>: <?php echo $value; ?></div>
							
						<?php endforeach; ?>
						</div>
					<?php endif ?>
				</div>
				<div class="clear"></div>
				<?php echo form_open_multipart('welcome/do_upload');?>
				<div class="container bg-agile">
					<label>Kode Reservasi Anda</label>
					<input type="file" readonly="true" name="buktifile" class="form-control" placeholder="Kode Reservasi Anda" value="">
				</div>
				<input type="submit" value="Submit">
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