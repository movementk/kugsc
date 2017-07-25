<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KOREA UNIVERSITY THE OFFICE OF INTERNATIONAL AFFAIRS</title>
	<link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/application.css" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="application step1">

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				<h1><a class="logo" href="/"><img src="/assets/images/application/logo.gif" alt="KOREA UNIVERSITY THE OFFICE OF INTERNATIONAL AFFAIRS"></a></h1>
			</div>
			<div class="col-xs-6 col-xs-offset-3">
				<p>Exchange &amp; Study Abroad Program Application Form</p>
			</div>
		</div>
	</div>
</header>

<main id="content">

	<div class="container">
	
		<div class="steps">
			<ul>
				<li class="active">
					<div class="item step-1">
					    <h2>STEP 01</h2>
					</div>
					<p class="details">Program and Personal Details</p>
				</li>
				<li>
					<div class="item step-2">
					    <h2>STEP 02</h2>
					</div>
					<p class="details">Academic Background</p>
				</li>
				<li>
					<div class="item step-3">
					    <h2>STEP 03</h2>
					</div>
					<p class="details">Documents and Declaration</p>
				</li>
			</ul>
		</div>

		<div class="guide">
			<ul>
				<li>Applications cannot be edited after submission. Please review it before you submit.</li>
				<li>Please carefully read the KU Fact Sheet (Exchange/Visiting > Board > Notice) before you start filling in the application form.</li>
			</ul>
		</div>

		<div class="form-wrap">
			<form action="#" method="post">
				<fieldset class="duration">
					<h4>1. Study Program &amp; Duration</h4>
					<p class="note text-right">* Required input</p>
					<table class="table">
						<tr>
							<th><span><i class="require"></i>Program</span></th>
							<td>
								<select class="form-control" required>
									<option value="">Select</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
								</select>
							</td>
						</tr>
						<tr>
							<th><span><i class="require"></i>Term Start</span></th>
							<td>
								<select class="form-control" required>
									<option value="">Select</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
								</select>
								<select class="form-control" required>
									<option value="">Select</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
								</select>
							</td>
						</tr>
						<tr>
							<th><span><i class="require"></i>Study Period</span></th>
							<td>
								<select class="form-control" required>
									<option value="">Select</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
								</select>
							</td>
						</tr>
					</table>
				</fieldset>
				<fieldset class="personal-details">
					<h4>2. Personal Details</h4>
					<p class="note text-right">* Required input</p>
					<table class="table">
						<tr>
							<th><span><i class="require"></i>First Name</span></th>
							<td>
								<input type="text" class="form-control" required>
								<span class="help-inline">(as appears in passport in English)</span>
							</td>
							<td class="profile" rowspan="3" style="background-color: #eee;"></td>
						</tr>
						<tr>
							<th><span><i class="require"></i>Family Name</span></th>
							<td>
								<input type="text" class="form-control" required>
								<span class="help-inline">(as appears in passport in English)</span>
							</td>
						</tr>
						<tr class="nationality">
							<th><span><i class="require"></i>Nationality</span></th>
							<td>
								<select class="form-control" required>
									<option value="">Select</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<div class="passport ask">
									<h3>Please read below carefully before you move to the next step</h3>
									<p>Do you have multiple passports and one of them is Korean?</p>
									<label>
									    <input type="radio" required> Yes, I have multiple passport, and one of them is Korean passport <br>
									    (if yes, please write Korean passport number only)
									</label>
									<span class="help-block">
									    Those who have Korean passport, Certificate of Admission will not be issued.
									</span>
									<label>
									    <input type="radio" required>
									    No, I have only one passport OR I do not have Korean passport
									</label>
                                    <span class="help-block">
                                        The passport written here will be used to issue students’ Certificate of Admission
                                    </span>
								</div>
							</td>
						</tr>
						<tr class="passport number">
							<th><span><i class="require"></i>Passport Number</span></th>
							<td colspan="2">
								<input type="text" class="form-control" required>
							</td>
						</tr>
						<tr class="passport valid">
							<th><span><i class="require"></i>Passport Valid Until</span></th>
							<td colspan="2">
								<input type="text" class="form-control" required placeholder="DD" pattern="[0-9]{1,2}">
								<span class="dash"></span>
								<input type="text" class="form-control" required placeholder="MM">
								<span class="dash"></span>
								<input type="text" class="form-control" required placeholder="YYYY">
								<span class="help-inline asterisk">Must be valid during your stay at KU.</span>
							</td>
						</tr>
						<tr class="birthday">
							<th><span><i class="require"></i>Date of Birth</span></th>
							<td colspan="2">
								<input type="text" class="form-control" required placeholder="DD">
								<span class="dash"></span>
								<input type="text" class="form-control" required placeholder="MM">
								<span class="dash"></span>
								<input type="text" class="form-control" required placeholder="YYYY">
							</td>
						</tr>
						<tr>
							<th><span><i class="require"></i>Gender</span></th>
							<td colspan="2">
								<select class="form-control" required>
									<option value="">Select</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
								</select>
							</td>
						</tr>
						<tr class="address">
							<th><span><i class="require"></i>Address for Correspondence</span></th>
							<td colspan="2">
								<input type="text" class="form-control" required>
							</td>
						</tr>
						<tr class="phone">
							<th><span><i class="require"></i>Telephone</span></th>
							<td colspan="2">
								<input type="text" class="form-control" required>
								<span class="dash"></span>
								<input type="text" class="form-control" required>
								<span class="dash"></span>
								<input type="text" class="form-control" required>
								<span class="help-inline">(Country code - Area code - Local number)</span>
							</td>
						</tr>
						<tr class="email">
							<th><span><i class="require"></i>E-mail 1</span></th>
							<td colspan="2">
								<input type="email" class="form-control" required>
							</td>
						</tr>
						<tr class="email">
							<th><span>E-mail 2</span></th>
							<td colspan="2">
								<input type="email" class="form-control" required>
								<p class="help-block">
									(NOTE: some of addresses such as ended with jp or fr (ex. 1234@yahoo.co.jp) do not seem to connect properly with OIA e-mail.<br>
									If you have any other address (ex. gmail or hotmail), please write it just in case.) 
								</p>
							</td>
						</tr>
						<tr class="phone">
							<th><span><i class="require"></i>Fax(if available)</span></th>
							<td colspan="2">
								<input type="text" class="form-control" required>
								<span class="dash"></span>
								<input type="text" class="form-control" required>
								<span class="dash"></span>
								<input type="text" class="form-control" required>
								<span class="help-inline">(Country code - Area code - Local number)</span>
							</td>
						</tr>
						<tr class="disability">
							<th><span><i class="require"></i>Do you have any disability?</span></th>
							<td colspan="2">
								<div class="form-group">
									<label>
										<input type="radio"> Yes
									</label>
									<label>
										<input type="radio"> No
									</label>
								</div>
								<p class="help-block">
									If yes, please specify so that Global Services Center can be aware prior of your arrival. Global Services might request further documents to the applicant for the application procedure.
								</p>
								<div class="form-group">
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</td>
						</tr>
					</table>
				</fieldset>
				<div class="btn-area">
					<p>
						<button type="reset" class="btn btn-default btn-cancel">Cancel</button>
						<button type="submit" class="btn btn-default btn-next">Next</button>
					</p>
				</div>
			</form>
		</div>
	
	</div>
	
</main>

<script async src="/assets/js/jquery.min.js"></script>
<script async src="/assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>