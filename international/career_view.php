<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="career-view">

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
						<h3>Career</h3>
					</div>
					<div class="table-wrap">
					    <table class="table table-bordered">
					        <tbody>
                                <tr>
					                <th>Title</th>
					                <td>활동증빙서류<span class="new">NEW</span></td>
					            </tr>
					            <tr>
					                <th>Date</th>
					                <td>2015.02.28</td>
					            </tr>
					            <tr>
					                <th>Author</th>
					                <td>Student</td>
					            </tr>
					            <tr>
					                <th class="content">Contents</th>
					                <td class="content">
					                    안녕하세요, 지금 활동증빙 서류를 작성 중인데 지정된 칸 10개를 초과 할 수 있나요?<br>
					                    감사합니다.
					                </td>
					            </tr>
					            <tr>
					                <th>Attachments</th>
					                <td class="attach">
					                    <a href="#">첨부파일명.확장자</a>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<div class="btn-area">
						<div>
							<p><a href="/international/career.php" class="btn btn-primary" role="button">OK</a></p>
						</div>
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