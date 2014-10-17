<!DOCTYPE html>
<html lang="en">
<head>
	<title>Engage Sciences test project</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700|Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

<header class="container">
	<h1>The Raddest Form of ALL TIME</h1>
	<h2>AKA the Kanye form</h2>
	<p>This is a form to end all forms. If you don't know, now you know. Thank you for reviewing!</p>
</header>
<form class="container" data-parsley-validate>
	<fieldset>
		<span>Title</span>
		<select name="title" required>
			<option value="">Select a title</option>
			<option value="mr">Mr.</option>
			<option value="mrs">Mrs.</option>
			<option value="ms">Miss</option>
			<option value="master">MASTER</option>
			<option value="dr">Dr.</option>
			<option value="na">None</option>
		</select>
	</fieldset>
	<fieldset>
		<label class="grid-6">
			<span>First Name</span>
			<div class="inner"><input type="text" name="fName" required data-parsley-error-message="Please enter your first name" data-parsley-minlength="2" /></div>
		</label>
		<label class="grid-6">
			<span>Last Name</span>
			<div class="inner"><input type="text" name="lName" required data-parsley-error-message="Please enter your last name" data-parsley-minlength="2" /></div>
		</label>
	</fieldset>
	<fieldset>
		<label>
			<span>Email address</span>
			<div class="inner"><input type="email" name="email" required data-parsley-error-message="Please enter a valid email address" /></div>
		</label>
	</fieldset>
	<fieldset>
		<label>
			<span>Street</span>
			<div class="inner"><input type="text" name="street" data-parsley-error-message="Please enter your street address" required /></div>
		</label>
		<label class="grid-6">
			<span>City</span>
			<div class="inner"><input type="text" name="city" data-parsley-error-message="Please enter your city" required /></div>
		</label>
		<label class="grid-3 state">
			<span>State</span>
			<div class="inner"><input type="text" name="state" data-parsley-state data-parsley-error-message="Please enter a valid US state abbreviation" required /></div>
		</label>
		<label class="grid-3 zip">
			<span>Zip</span>
			<div class="inner"><input type="number" data-parsley-zip required data-parsley-error-message="Please enter a valid zip code" /></div>
		</label>
	</fieldset>
	<fieldset id="marketing">
		<legend>Marketing</legend>
		<div class="inner">
			<div class="grid-container">
				<label class="grid-6">
					<input type="checkbox" name="marketing-company" value="company" id="company" /><span>Company</span>
				</label>
				<label class="grid-6" class="disabled">
					<input type="checkbox" name="marketing-thirdparties" value="thirdparties" disabled id="thirdparties" /><span>Third Parties</span>
				</label>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Charity</legend>
		<select name="charity" required>
			<option value="">Please select a charity</option>
			<option value="salvation">Salvation Army</option>
			<option value="united">United Way</option>
			<option value="goodwill">Goodwill</option>
		</select>
	</fieldset>
	<fieldset>
		<label>Donation amount: $<output for=fader id=amount>10</output>
		<input type="range" name="donation" id="fader" data-show-value="true" id="donation" value="50" min="10" max="1000" onchange="outputUpdate(value)" />
		</label>
	</fieldset>
	<fieldset id="gender">
		<legend>Gender</legend>
		<div class="inner">
			<div class="grid-container">
				<label class="grid-4">
					<input type="radio" name="gender" value="male" /><span>Male</span>
				</label>
				<label class="grid-4">
					<input type="radio" name="gender" value="female" /><span>Female</span>
				</label>
				<label class="grid-4">
					<input type="radio" name="gender" value="undisclosed" required /><span>I'd rather not disclose</span>
				</label>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<label>
			<input type="checkbox" name="terms" required /><span>I agree to the <a href="#" id="termslink">Terms and conditions</a></span>
		</label>
	</fieldset>
	<input type="submit" value="Submit" class="btn submit">
</form>

<div id="overlay">
	<div class="modal" id="terms">
		<h2>Terms</h2>
		<p>Terms and conditions</p>
		<a href="#" id="closewindow">Click here to close window</a>
	</div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="js/parsley.js"></script>
<script src="js/custom.js"></script>

</body>
</html>