<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="announcements">

	<!-- Page header -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/page_header.php"); ?>
	<!-- // Page header -->
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<!-- LNB -->
				<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/lnb_international.php"); ?>
				<!-- // LNB -->
			</div>
			<div class="col-lg-9">
				<div class="page-content">
					<!-- 페이지 타이틀 -->
					<div class="page-title">
						<h3>Announcements</h3>
					</div>
                    <div class="tabs dropdown">
						<button class="btn btn-defualt btn-block" data-toggle="dropdown">Temporary Short-term Temporary Short-term</button>
						<div class="dropdown-menu">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation" class="active"><a href="#announcements-1" aria-controls="announcements-1" role="tab" data-toggle="tab">General info</a></li>
								<li role="presentation"><a href="#announcements-2" aria-controls="announcements-2" role="tab" data-toggle="tab">Academics</a></li>
								<li role="presentation"><a href="#announcements-3" aria-controls="announcements-3" role="tab" data-toggle="tab">Scholarships</a></li>
								<li role="presentation"><a href="#announcements-4" aria-controls="announcements-4" role="tab" data-toggle="tab">Immigration issues</a></li>
								<li role="presentation"><a href="#announcements-5" aria-controls="announcements-5" role="tab" data-toggle="tab" class="high">Extra-curricular Activities</a></li>
								<li role="presentation"><a href="#announcements-6" aria-controls="announcements-6" role="tab" data-toggle="tab">Downloads</a></li>
							</ul>
						</div>
					</div>
					
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="announcements-1">
						    
							<div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Title</option>
                                        </select>
                                        <input type="text" id="announcements-search-1" class="form-control">
                                        <label for="announcements-search-1" class="sr-only">search</label>
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
                                            <th>Date</th>
                                            <th>Contents</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                    </tbody>
                                </table>
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
						<div role="tabpanel" class="tab-pane" id="announcements-2">
							
							<div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Title</option>
                                        </select>
                                        <input type="text" id="announcements-search-2" class="form-control">
                                        <label for="announcements-search-2" class="sr-only">search</label>
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
                                            <th>Date</th>
                                            <th>Contents</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                        <div role="tabpanel" class="tab-pane" id="announcements-3">
                            
                            <div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Title</option>
                                        </select>
                                        <input type="text" id="announcements-search-3" class="form-control">
                                        <label for="announcements-search-3" class="sr-only">search</label>
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
                                            <th>Date</th>
                                            <th>Contents</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                        <div role="tabpanel" class="tab-pane" id="announcements-4">
                            
                            <div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Title</option>
                                        </select>
                                        <input type="text" id="announcements-search-4" class="form-control">
                                        <label for="announcements-search-4" class="sr-only">search</label>
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
                                            <th>Date</th>
                                            <th>Contents</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                        <div role="tabpanel" class="tab-pane" id="announcements-5">
                            
                            <div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Title</option>
                                        </select>
                                        <input type="text" id="announcements-search-5" class="form-control">
                                        <label for="announcements-search-5" class="sr-only">search</label>
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
                                            <th>Date</th>
                                            <th>Contents</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                        <div role="tabpanel" class="tab-pane" id="announcements-6">
                            
                            <div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Title</option>
                                        </select>
                                        <input type="text" id="announcements-search-6" class="form-control">
                                        <label for="announcements-search-6" class="sr-only">search</label>
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
                                            <th>Date</th>
                                            <th>Contents</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>General info</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Scholarships</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Student</td>
                                        </tr>
                                        <tr>
                                            <td>2017-07-20</td>
                                            <td>Academics</td>
                                            <td>
                                                <a href="#">President Luis Guillermo Solis River if Costa Rica visits KU</a>
                                            </td>
                                            <td>Admissions</td>
                                        </tr>
                                    </tbody>
                                </table>
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
		</div>
	</div>

</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot_sub.php"); ?>

</body>
</html>