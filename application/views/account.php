<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Form</title>


	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
	<link href="<?php echo base_url(); ?>assets/css/styleform.css" rel="stylesheet" type="text/css" media="all" />


</head>

<body>
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<div class="sign-in-htm">
					<div class="group">
						<label for="id" class="label">ID</label>
						<input id="id" type="text" class="input">
					</div>
					<div class="group">
						<label for="password" class="label">Password</label>
						<input id="password" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Keep me Signed in</label>
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign In">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">Forgot Password?</a>
					</div>
				</div>
				<div class="sign-up-htm">
					<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
						<div class="group">
							<label for="id" class="label">ID</label>
							<input name="id" id="id" type="text" class="input">
						</div>
						<div class="group">
							<label for="username" class="label">Username</label>
							<input name="username" id="username" type="text" class="input">
						</div>
						<div class="group">
							<label for="fullname" class="label">fullname</label>
							<input name="fullname" id="fullname" type="text" class="input">
						</div>
						<div class="group">
							<label for="password" class="label">Password</label>
							<input name="password" id="password" type="password" class="input" data-type="password">
						</div>
						<div class="group">
							<label for="level" class="label">Level</label>
							<input name="level" id="level" type="text" class="input">
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign Up">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</body>
</html>
