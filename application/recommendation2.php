<?php require_once($_SERVER["DOCUMENT_ROOT"]."/application/_dochead.php"); ?>
<link href="//fonts.googleapis.com/earlyaccess/notosanskr.css" rel="stylesheet">
</head>
<body class="application recommendation recommendation-2">

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
				<li>
					<div class="item step-1">
					    <h2>STEP 01</h2>
					</div>
					<p class="details">University Information</p>
				</li>
				<li class="active">
					<div class="item step-2">
					    <h2>STEP 02</h2>
					</div>
					<p class="details">Student Information</p>
				</li>
			</ul>
		</div>
		
		<div class="attachments">
			<form action="#" method="post" class="form-inline">
				<fieldset class="upload-file">
					<h5>학생정보 엑셀파일 등록</h5>
					<div class="form-group file">
						<input type="file" class="form-control">
						<button class="btn btn-default btn-upload" type="submit">엑셀파일 업로드</button>
					</div>
					<div class="form-group down">
						<a class="btn btn-default btn-download" href="#">서식가이드 파일 다운받기</a>
					</div>
				</fieldset>
			</form>
		</div>

		<div class="form-wrap">
			<form action="#" method="post">
				<fieldset class="student-info">
					<h4>1. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<fieldset class="student-info">
					<h4>2. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<fieldset class="student-info">
					<h4>3. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<fieldset class="student-info">
					<h4>4. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<fieldset class="student-info">
					<h4>5. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<fieldset class="student-info">
					<h4>6. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<fieldset class="student-info">
					<h4>7. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<fieldset class="student-info">
					<h4>8. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<fieldset class="student-info">
					<h4>9. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<fieldset class="student-info">
					<h4>10. 본인 학교의 추천 학생 정보 입력</h4>
					<p class="note text-right">* Required input</p>
					<?php require($_SERVER["DOCUMENT_ROOT"]."/application/_student_info.php"); ?>
				</fieldset>
				
				<div class="btn-area">
					<p>
						<button type="reset" class="btn btn-default btn-cancel">Cancel</button>
						<button type="button" class="btn btn-default btn-prev">Previous</button>
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