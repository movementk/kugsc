<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead_sub.php"); ?>
<link href="/assets/css/exchange.css" rel="stylesheet">
</head>
<body class="Overview">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>

<main id="content" class="request">

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
						<h3>Request</h3>
					</div>
                    <div class="tabs dropdown">
						<button class="btn btn-defualt btn-block" data-toggle="dropdown">
							Certificates and other related Documents
						</button>
						<div class="dropdown-menu">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation" class="active">
								    <a href="#request-1" aria-controls="request-1" role="tab" data-toggle="tab" class="high">Certificates and other<br> related Documents</a>
								</li>
								<li role="presentation">
								    <a href="#request-2" aria-controls="request-2" role="tab" data-toggle="tab">Airport Pickup</a>
								</li>
							</ul>
						</div>
					</div>

					<!-- 탭 패널 -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="request-1">
							<h4 class="title">Transcript Request</h4>
							<p>
							    Students who have completed their whole semester at Korea University and need to receive extra transcripts can request the transcript at this page.
							</p>
							
							<p>
                                <span>Payments</span>
							    Issue fee: 1,000 KRW per a copy <br>
							    Shipping fee: 3,000 KRW (domestic-Korea) / 30,000 KRW (abroad)
							</p>
							<h4 class="title">Payment Details</h4>
							<div class="box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3">
                                        <h5 class="hanabank"><img src="/assets/images/exchange/hanabank_logo.jpg" alt=""></h5>        
                                    </div>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="details">
                                            <address>KEB Hana Bank - Godae Branch (Swift Code: KOEXKRSE) 145 Anam-Ro, Seongbuk-Gu, Seoul,  Korea 02841</address>
                                            <dl>
                                                <dt>Account Number</dt>
                                                <dd>391-904468-24637</dd>
                                                <dt>Account Holder</dt>
                                                <dd>Global Service Center, Korea University</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
							</div>
							<p class="note">
							    <i>
							        Please check once again that the exact amount in Korean currency (KRW) is transferred. You must consider extra charges subjected to your transaction, such as remittance fee, extra fee from intermediary banks, etc
							    </i>
							</p>
							<h4 class="title">Notice</h4>
							<div class="box">
							    <p class="summary">
							        Please remind the transcript request here is only for the exchange/visiting students.
							    </p>
                                <p class="note">
							        Regular degree seeking students may go to KUPID (<a href="http://portal.korea.ac.kr" target="_blank">portal.korea.ac.kr</a> ) > Info Depot > Internet Certificate Verification System.
                                </p>
							</div>
							<ul class="dot-list">
							    <li>
							        Payment should be equivalent to the total issue and shipping fee, not including transaction fee, in the applicant's either full name or KU ID no.
							    </li>
							    <li>
							        When the payment is made, please send a confirmation e-mail with the remitter's name and the transaction date to (<a href="mailto:studyabroad@korea.ac.kr">studyabroad@korea.ac.kr</a>)
							    </li>
							    <li>
							        Global Services Center will request students to submit copy of their passport and transcript request form after receiving e-mail from the student’s confirmation e-mail regarding the payments.
							    </li>
							    <li>
							        We will send the transcript request form to students after we receive the payment information. Students are required to complete the form and send it back with the photocopy of their passport.
							    </li>
							    <li>
							        After the payment is cleared, the request would be proceeded.
							    </li>
							    <li>
							        The domestic delivery will be made within 3 working days and abroad delivery within 7-10 days by Express Mail Service. 
							    </li>
							    <li>
							        For those who have completed the whole semester(s) at KU, the very first copy of the transcript will be sent to their home institutions for SEP and to residences given for VSP in January and July with free of charge.
							    </li>
							</ul>
							<p class="note">
							    <i>
							        If students need to request other documents besides the transcript, please make sure to mention this in the form.
							    </i>
							</p>
							<div class="table-wrap">
                                <form action="#">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th><label for="u-name">Name</label></th>
                                                <td class="name">
                                                    <div class="form-group">
                                                        <input type="text" id="u-name" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="id-num">KU Student<br>ID No.</label></th>
                                                <td class="id-num">
                                                    <div class="form-group">
                                                        <input type="text" id="id-num" class="form-control">
                                                        <p class="help-block">
                                                            Only those whose KU ID No. starts with 20XX(the year you attended) + either 950, 951, or 952 + XXX (last 3 digits) can request the transcript on this website.(e.g. 2017951777)
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-birth">Date of birth<br>(mm/dd/yyyy)</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-birth" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="required-document-1">Required<br>Document</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="required-document-1" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="copies">No. of Copies</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="copies" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-email-1">E-mail</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="email" id="u-email-1" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="addr">Address</label></th>
                                                <td class="addr">
                                                    <div class="form-group">
                                                        <input type="text" id="addr" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="contact-no">Contact No.</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="contact-no" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <div>
                                            <p><button type="button" class="btn btn-default">Cancel</button></p>
                                            <p><button type="submit" class="btn btn-primary">Submit</button></p>
                                        </div>
                                    </div>
							    </form>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="request-2">
							<h4 class="title">Airport Pickup</h4>
							<p>
							    In February (spring semester) and August (fall semester) (the date is given in the KU Fact Sheet), there will be a FREE meet-and-greet service for students who will be living in Korea University halls of residence, and who are attending the Exchange/Visiting Students’ orientation program. If you wish to be met at Incheon International airport and taken to your hall of residence, you MUST complete this form. The airport meeting service operates only at Incheon International Airport and is available for flights scheduled to arrive up until 9pm.The pick-up will be available for the specified dates.
							</p>
							<p>
							    <i class="icon-bus"></i>
							    The bus to Korea University will depart every two hours from 8am until 10pm during those dates. You may have to wait at the airport for other flights to arrive. Approximate travelling time from the airport to halls is normally 1hr 30mins to 2 hours. 
							</p>
							<div class="table-wrap">
							    <form action="#">
							        <table class="table table-bordered">
							            <tbody>
							                <tr>
							                    <th><label for="u-full-name">Name in Full</label></th>
							                    <td class="full-name">
							                        <div class="form-group">
							                            <input type="text" id="u-full-name" class="form-control">
							                        </div>
							                    </td>
                                            </tr>
                                            <tr>
							                    <th><label for="arrival-date">Date of Arrival</label></th>
							                    <td class="arrival-date">
							                        <div class="form-group">
							                            <input type="text" id="arrival-date" class="form-control">
							                        </div>
							                    </td>
                                            </tr>
                                            <tr>
							                    <th><label for="arrival-time">Expected Time<br>of Arrival</label></th>
							                    <td>
							                        <div class="form-group">
							                            <input type="text" id="arrival-time" class="form-control">
							                        </div>
							                    </td>
                                            </tr>
                                            <tr>
							                    <th><label for="required-document-2">Required<br>Document</label></th>
							                    <td>
							                        <div class="form-group">
							                            <input type="text" id="required-document-2" class="form-control">
							                        </div>
							                    </td>
                                            </tr>
                                            <tr>
							                    <th><label for="arline">Arline</label></th>
							                    <td>
							                        <div class="form-group">
							                            <input type="text" id="arline" class="form-control">
							                        </div>
							                    </td>
                                            </tr>
                                            <tr>
							                    <th><label for="flight-number">Flight Number</label></th>
							                    <td class="flight-number">
							                        <div class="form-group">
							                            <input type="text" id="flight-number" class="form-control">
							                        </div>
							                    </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-email-2">E-mail</label></th>
							                    <td>
							                        <div class="form-group">
							                            <input type="email" id="u-email-2" class="form-control">
							                        </div>
							                    </td>
                                            </tr>
                                            <tr>
							                    <th><label for="u-accommodation">Name of the<br>Accommodation<br>you will stay</label></th>
							                    <td>
							                        <div class="form-group">
							                            <input type="text" id="u-accommodation" class="form-control">
							                        </div>
							                    </td>
							                </tr>
							            </tbody>
							        </table>
							        <div class="btn-area">
                                        <div>
                                            <p><button type="button" class="btn btn-default">Cancel</button></p>
                                            <p><button type="submit" class="btn btn-primary">Submit</button></p>
                                        </div>
                                    </div>
							    </form>
							</div>
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