<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/exchange.css" rel="stylesheet">
</head>
<body class="exchange">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="qna-list">

	<!-- Page header -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/exchange/_page_header.php"); ?>
	<!-- // Page header -->
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<!-- LNB -->
				<?php require_once($_SERVER["DOCUMENT_ROOT"]."/exchange/_lnb.php"); ?>
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
									    <a href="/exchange/qna_view.php"><span class="new">NEW</span>활동증빙서류활동증빙서류활동증빙서류활동증빙서류활동증빙서류활동증빙서류활동증빙서류활동증빙서류</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
								<tr>
									<td>1350</td>
									<td class="reply">
									    <a href="/exchange/qna_view.php"><span class="new">NEW</span>활동증빙서류</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
								<tr>
									<td>1350</td>
									<td>
									    <a href="/exchange/qna_view.php">서류도착확인</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
								<tr>
									<td>1350</td>
									<td>
									    <a href="/exchange/qna_view.php">제출서류 수험번호</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
								<tr>
									<td>1350</td>
									<td>
									    <a href="/exchange/qna_view.php">서류도착확인</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
								<tr>
									<td>1350</td>
									<td>
									    <a href="/exchange/qna_view.php">제출서류 수험번호</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
								<tr>
									<td>1350</td>
									<td>
									    <a href="/exchange/qna_view.php">서류도착확인</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
								<tr>
									<td>1350</td>
									<td>
									    <a href="/exchange/qna_view.php">제출서류 수험번호</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
								<tr>
									<td>1350</td>
									<td>
									    <a href="/exchange/qna_view.php">서류도착확인</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
								<tr>
									<td>1350</td>
									<td>
									    <a href="/exchange/qna_view.php">제출서류 수험번호</a>
									</td>
									<td>Student</td>
									<td>2015.03.03</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn-area">
                        <div>
                            <p><a href="/exchange/qna_write.php" class="btn btn-primary" role="button">Write</a></p>
                        </div>
					</div>
                    <nav aria-label="Page navigation" class="paging">
                        <ul class="pagination">
                            <li class="angle">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li>
                            <li class="angle">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="hidden-xs"><a href="#">6</a></li>
                            <li class="hidden-xs"><a href="#">7</a></li>
                            <li class="hidden-xs"><a href="#">8</a></li>
                            <li class="hidden-xs"><a href="#">9</a></li>
                            <li class="hidden-xs"><a href="#">10</a></li>
                            <li class="angle">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li class="angle">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
				</div>
			</div>
		</div>
	</div>
	
</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot_sub.php"); ?>

</body>
</html>