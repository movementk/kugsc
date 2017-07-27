<?php require_once($_SERVER["DOCUMENT_ROOT"]."/application/_dochead.php"); ?>
<link href="//fonts.googleapis.com/earlyaccess/notosanskr.css" rel="stylesheet">
</head>
<body class="application recommendation recommendation-1">

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				<h1><a class="logo" href="/"><img src="/assets/images/application/logo.gif" alt="KOREA UNIVERSITY THE OFFICE OF INTERNATIONAL AFFAIRS"></a></h1>
			</div>
			<div class="col-xs-6 col-xs-offset-3">
				<p>Recommendation Program Application Form</p>
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
					<p class="details">University Information</p>
				</li>
				<li>
					<div class="item step-2">
					    <h2>STEP 02</h2>
					</div>
					<p class="details">Student Information</p>
				</li>
			</ul>
		</div>

		<div class="form-wrap">
			<form action="#" method="post">
				<fieldset class="univ-info">
					<h4>1. 학교 담당자는 본인의 학교 검색하여 선택</h4>
					<p class="note text-right">* Required input</p>
					<table class="table">
						<tr>
							<th><span><i class="require"></i>Area</span></th>
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
							<th><span><i class="require"></i>Country</span></th>
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
						<tr class="school">
							<th><span><i class="require"></i>School</span></th>
							<td>
								<select class="form-control" required>
									<option value="">Select</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
								</select>
								<div class="search">
									<input type="text" class="form-control" required placeholder="Search People & places">
									<button class="btn btn-link btn-search" type="button">
										<i class="icon-search"></i>
									</button>
								</div>
							</td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset class="password">
					<h4>2. 이메일로 전달 받은 학교 패스워드 입력</h4>
					<p class="note text-right">* Required input</p>
					<table class="table">
						<tr>
							<th><span><i class="require"></i>KU</span></th>
							<td>
								<input type="password" class="form-control" placeholder="PASSWORD" required>
								<button type="button" class="btn btn-default btn-ok">OK</button>
							</td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset class="persenal-info">
					<h4>3. 학교 담당자 개인 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<table class="table">
						<tr>
							<th><span><i class="require"></i>University</span></th>
							<td>
								KU
							</td>
						</tr>
						<tr>
							<th><span><i class="require"></i>Contact person</span></th>
							<td>
								<input type="text" class="form-control" placeholder="Text input" required>
							</td>
						</tr>
						<tr>
							<th><span><i class="require"></i>E-mail</span></th>
							<td>
								<input type="text" class="form-control" placeholder="Text input" required>
							</td>
						</tr>
						<tr>
							<th><span><i class="require"></i>Contact</span></th>
							<td>
								<input type="text" class="form-control" placeholder="Text input" required>
							</td>
						</tr>
						<tr>
							<th><span><i class="require"></i>Personal</span></th>
							<td>
								10
							</td>
						</tr>
						<tr>
							<th><span><i class="require"></i>Universtiy Adress</span></th>
							<td>
								<input type="text" class="form-control" placeholder="Text input" required>
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

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/application/_docfoot.php"); ?>

</body>
</html>