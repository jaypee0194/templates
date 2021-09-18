<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>/register/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>/register/fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?=base_url() ?>/register/css/style.css"/>
</head>
<body class="form-v7">
    
	<div class="page-content">
		<div class="form-v7-content">
			<div class="form-left">
				<img src="<?=base_url() ?>/register/images/form-v7.jpg" alt="form">
				<p class="text-1">Edit Users</p>
				<p class="text-2">Privacy policy & Term of service</p>
			</div>

			<form class="form-detail" action="<?= base_url ('Dashboard/update/'.$users['id']) ?>" method="post" id="myform">
			
                <input type="hidden" name="_method" value="PUT"/>

            <div class="form-row">
				<div class="form-row">
					<label for="name">FULL NAME</label>
					<input type="text" name="name" id="name" class="input-text" value="<?= $users['user_name']?>">
				</div>
				<div class="form-row">
					<label for="email">E-MAIL</label>
					<input type="text" name="email" id="email" class="input-text" value="<?= $users['user_email']?>">
				</div>
				<div class="form-row">
					<label for="password">PASSWORD</label>
					<input type="text" name="password" id="password" class="input-text" value="<?= $users['user_password']?>" >
				<!-- </div>
				<div class="form-row">
					<label for="password_confirm">CONFIRM PASSWORD</label>
					<input type="password" name="confpassword" id="password_confirm" class="input-text">
				</div> -->
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Update">
				
				</div>
			</form>
		</div>
	</div>

</body>
</html>