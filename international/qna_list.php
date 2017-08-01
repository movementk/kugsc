<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="qna-list">

	<!-- Page header -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/page_header.php"); ?>
	<!-- // Page header -->
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<!-- LNB -->
				<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/lnb.php"); ?>
				<!-- // LNB -->
			</div>
			<div class="col-lg-9">
				<div class="page-content">
					<!-- 페이지 타이틀 -->
					<div class="page-title">
						<h3>Q&amp;A</h3>
					</div>
					<!-- 검색폼 -->
					<div class="search-form">
					    <form action="#">
					        <div class="form-group">
					            <select class="form-control">
					                <option>Title</option>
					            </select>
					            <input type="text" id="search" class="form-control">
					            <label for="search" class="sr-only">search</label>
                                <button type="submit" class="btn-search">
                                    <i class="icon-search">
                                        <span class="sr-only">search icon</span>
                                    </i>
                                </button>
					        </div>
					    </form>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>Title</th>
									<th>Author</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1350</td>
									<td>
									    <a href="#">활동증빙서류</a><span class="new">NEW</span>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
							</tbody>
						</table>
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