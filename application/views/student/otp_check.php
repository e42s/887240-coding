<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url('theme/bootstrap/css/bootstrap.min.css');?>">

		<!-- Website CSS style -->
		<link rel="stylesheet" href="<?php echo base_url('theme/dist/css/otp_check.css');?>">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url('theme/plugins/pnotify/pnotify.custom.min.css');?>">

		<title>OTP Student</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">เช็คชื่อด้วยรหัส OTP</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" id="">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">รหัสนิสิต</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your student code"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">รหัส OTP</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-barcode fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your OTP"/>
								</div>
							</div>
						</div>


						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">ลงชื่อเข้าเรียน</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url('theme/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
		<script src="<?php echo base_url('theme/bootstrap/js/bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('theme/plugins/pnotify/pnotify.custom.min.js');?>"></script>
		<script>
			function createNotification(type,text) {
				PNotify.removeAll();
				new PNotify({
				    title: 'Yoohoo!',
				    text: text,
				    type: type,
				    styling: 'bootstrap3'
				});
			}
			$( "#nameCheckSubmit" ).submit(function( event ) {
				event.preventDefault();
				if($("#selectDate").val()) 
					createNotification('success', 'make successed');	
				else 
					createNotification('danger', 'select date before submit.');
			});
		</script>

	</body>
</html>