<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="qna-password">

	<!-- Page header -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/international/_page_header.php"); ?>
	<!-- // Page header -->
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
			
				<!-- LNB -->
				<?php require_once($_SERVER["DOCUMENT_ROOT"]."/international/_lnb.php"); ?>
				<!-- // LNB -->
				
			</div>
			<div class="col-lg-9">
				
				<div class="page-content">
				
					<!-- 페이지 타이틀 -->
					<div class="page-title">
						<h3>Q&amp;A</h3>
					</div>
                    
                    <!-- 비밀번호 입력 -->
                    <div class="password-area">
                    	<i class="ico"><img src="/assets/images/ico_lock.png" alt=""></i>
                    	<h4 class="u-title">Confirm Password</h4>
                    	<p>Please enter the password you entered when writing the postings.</p>
                    	<form>
                    		<input class="form-control" type="password" required>
                    		<button class="btn btn-primary" type="submit">OK</button>
                    	</form>
                    </div>
                    
				</div>
				
			</div>
		</div>
	</div>
	
</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot_sub.php"); ?>

</body>
</html>