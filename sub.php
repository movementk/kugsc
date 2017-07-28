<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/international.css" rel="stylesheet">
</head>
<body class="international">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="career">

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
						<h3>About Korea University</h3>
					</div>

					<!-- 탭 -->
					<div class="nav nav-tabs nav-justified"  role="tablist">
						<ul>
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
							<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
							<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
						</ul>
					</div>

					<!-- 탭 패널 -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							탭 패널 #1
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">
							탭 패널 #2
						</div>
						<div role="tabpanel" class="tab-pane" id="messages">
							탭 패널 #3
						</div>
						<div role="tabpanel" class="tab-pane" id="settings">
							탭 패널 #4
						</div>
					</div>
					
					<br><br>##### 제목 #####<br><br>
					
					<h4 class="title">What is an ‘Orientation Week’?</h4>
					
					<h5 class="u-title">What is an ‘Orientation Week’?</h5>
					
					<h5 class="c-title"><i>C</i> Information on Necessary Documents for Claims</h5>
					
					<br><br>##### 문단 #####<br><br>
					
					<p>Orientation Week offers you social, sporting, study and support sessions and events to help you get familiar with the campus, meet people, get prepared for study, find out who’s there to help and most importantly have fun!</p>

					<p>Attending orientation is an important step of starting university so attendance is considered essential. The orientation conducted by Global Services Center is mandatory.</p>
					
					<br><br>##### 리스트 #####<br><br>
					<!-- 순서 있는 리스트(원, 번호) -->
					<ol class="co-list">
						<li>
							Getting to KU – Airport Pickup Service
							<p>If you apply or make a payment after the
application period, individual rate would be
applied which will result in higher cost of
insurance.</p>
						</li>
						<li>
							Find <a href="#">Accommodation</a>
						</li>
						<li>
							Getting to KU – Airport Pickup Service
						</li>
					</ol>
					
					<!-- 순서 없는 리스트(점) -->
					<ul class="u-list">
						<li>
							KEB Hana Bank - Godae Branch (Swift Code: KOEXKRSE) 145 Anam-Ro, Seongbuk-Gu, Seoul, Korea 02841 
						</li>
						<li>
							Find <a href="#">Accommodation</a>
						</li>
						<li>
							Getting to KU – Airport Pickup Service
						</li>
					</ul>
					
					<br><br>##### 테이블 #####<br><br>
					
					<!-- 테이블 -->
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th rowspan="2" colspan="2">Division</th>
									<th>Documents</th>
									<th>Issuer</th>
								</tr>
								<tr>
									<th>Documents</th>
									<th>Issuer</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="6">Medical Cost</td>
									<td rowspan="2">Hospitalization (Including surgery)</td>
									<td>Certificate of discharge (Including diagnosis)</td>
									<td>Care hospital</td>
								</tr>
								<tr>
									<td>Receipt of treatment</td>
									<td>Care hospital</td>
								</tr>
								<tr>
									<td rowspan="2">Outpatient Treatment</td>
									<td>Medical records or First visit medical records</td>
									<td>Care hospital</td>
								</tr>
								<tr>
									<td>Receipt of treatment</td>
									<td>Receipt of treatment</td>
								</tr>
								<tr>
									<td rowspan="2">Outpatient Treatment</td>
									<td>Medical records or First visit medical records</td>
									<td>Care hospital</td>
								</tr>
								<tr>
									<td>Receipt of treatment</td>
									<td>Receipt of treatment</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<br><br>##### 주의사항 문구 #####<br><br>
					
					<p class="note">For more information about homepage user guide and claims, download the following:</p>
					<p class="note"><i>For more information about homepage user guide and claims, download the following:</i></p>
					
					
					<br><br>##### 버튼 #####<br><br>
					
					<!-- 버튼 -->
					<button type="button" class="btn btn-default">Book one-on-one appointment</button>
					<button type="button" class="btn btn-primary">Book one-on-one appointment</button>
					
				</div>
				
			</div>
		</div>
	</div>
	
</main>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot_sub.php"); ?>

</body>
</html>