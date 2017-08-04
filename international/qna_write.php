<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="qna-write">

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
					<div class="table-responsive">
                        <form action="#">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th><label for="u-author">Author</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-author" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-title">Title</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-title" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="attach"><label for="u-attach">Attachments</label></th>
                                        <td class="attach">
                                            <div class="form-group">
                                                <input type="file" id="u-attach" class="form-control">
                                                <button type="button" class="btn btn-default">SEARCH</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-password">Password</label></th>
                                        <td class="password">
                                            <div class="form-group">
                                                <input type="password" id="u-password" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="content"><label for="u-content">Contents</label></th>
                                        <td class="content">
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-area">
                                <div>
                                    <p><button type="submit" class="btn btn-primary">OK</button></p>
                                </div>
                            </div>
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