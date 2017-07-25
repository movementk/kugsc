<?php require_once($_SERVER["DOCUMENT_ROOT"]."/application/_dochead.php"); ?>
</head>
<body class="application step2">

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/application/_header.php"); ?>

<main id="content">

	<div class="container">
	
		<div class="steps">
			<ul>
				<li>
					<div class="item step-1">
					    <h2>STEP 01</h2>
					</div>
					<p class="details">Program and Personal Details</p>
				</li>
				<li class="active">
					<div class="item step-2">
					    <h2>STEP 02</h2>
					</div>
					<p class="details">Academic Background</p>
				</li>
				<li>
					<div class="item step-3">
					    <h2>STEP 03</h2>
					</div>
					<p class="details">Documents and Declaration</p>
				</li>
			</ul>
		</div>

		<div class="guide">
			<ul>
				<li>Applications cannot be edited after submission. Please review it before you submit.</li>
				<li>Please carefully read the KU Fact Sheet (Exchange/Visiting > Board > Notice) before you start filling in the application form.</li>
			</ul>
		</div>

		<div class="form-wrap">
			<form action="#" method="post">
				<fieldset class="academic-background">
					<h4>3. Academic Background</h4>
					<p class="note text-right">* Required input</p>
					<table class="table">
					    <tr>
					        <td colspan="2" class="apply">
                                <div class="form-group">
                                    <p>Are you currently enrolled at your home institution?</p>
                                    <label>
                                        <input type="radio"> Yes
                                    </label>
                                    <label>
                                        <input type="radio"> No
                                    </label>
                                </div>
					        </td>
					    </tr>
						<tr>
							<th><span><i class="require"></i>Home Institution</span></th>
							<td>
								<select class="form-control" required>
									<option value="">Select</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
								</select>
								<select class="form-control" required>
									<option value="">Select</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
									<option value="">Option</option>
								</select>
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
						    <th><span><i class="require"></i>Undergraduate</span></th>
						    <td>
                                <label>
                                    <input type="radio"> Year 1
                                </label>
                                <label>
                                    <input type="radio"> Year 2
                                </label>
                                <label>
                                    <input type="radio"> Year 3
                                </label>
                                <label>
                                    <input type="radio"> Year 4
                                </label>
						    </td>
						</tr>
						<tr>
						    <th><span><i class="require"></i>Graduate</span></th>
						    <td>
                                <label>
                                    <input type="radio"> Year 1
                                </label>
                                <label>
                                    <input type="radio"> Year 2
                                </label>
						    </td>
						</tr>
						<tr class="major">
						    <th><span><i class="require"></i>Main Subject / Major</span></th>
						    <td>
								<input type="text" class="form-control" required>
							</td>
						</tr>
						<tr class="gpa">
						    <th><span><i class="require"></i>Accumylated GPA</span></th>
						    <td>
						        <input type="text" class="form-control" required>
						        <span class="slash"></span>
						        <input type="text" class="form-control" required>
						        <span class="help-inline">(Total)</span>
						    </td>
						</tr>
						<tr class="recent-year">
						    <th>GPA in the most recent year<br>(if applicable)</th>
						    <td>
						        <input type="text" class="form-control" required>
						        <span class="slash"></span>
						        <input type="text" class="form-control" required>
						        <span class="help-inline">(Total)</span>
						    </td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset class="home-institution">
				    <h4>4. Home Institution</h4>
					<p class="note text-right">* Required input</p>
                    <table class="table">
                        <tr class="international">
                            <th><span><i class="require"></i>International Program Coordinator</span></th>
                            <td>
                                <input type="text" class="form-control" required>
                            </td>
                        </tr>
                        <tr class="email">
                            <th><span><i class="require"></i>Email</span></th>
                            <td>
                                <input type="email" class="form-control" required>
                            </td>
                        </tr>
                        <tr class="addr">
                            <th><span><i class="require"></i>Address</span></th>
                            <td>
                                <input type="text" class="form-control" required>
                            </td>
                        </tr>
                        <tr class="phone">
                            <th><span><i class="require"></i>Telephone</span></th>
                            <td>
                                <input type="text" class="form-control" required>
                                <span class="dash"></span>
                                <input type="text" class="form-control" required>
                                <span class="dash"></span>
                                <input type="text" class="form-control" required>
                                <span class="help-inline">(Country code-Area code-Local number)</span>
                            </td>
                        </tr>
                        <tr class="fax">
                            <th>Fax (if available)</th>
                            <td>
                                <input type="text" class="form-control" required>
                                <span class="dash"></span>
                                <input type="text" class="form-control" required>
                                <span class="dash"></span>
                                <input type="text" class="form-control" required>
                                <span class="help-inline">(Country code-Area code-Local number)</span>
                            </td>
                        </tr>
                    </table>
				</fieldset>
                
                <fieldset class="study-plan">
				    <h4>5. Study Plan at KU</h4>
                    <div class="preliminary-investigation">
                        <ol class="decimal-list">
                            <li>
                                As the completion of this Study Plan is a preliminary survey, it does not guarantee enrollment in a particular course. Course registration has to be completed online during the official period. The detailed instruction on online course registration will be announced via e-mail.
                            </li>
                            <li>
                                For the latest course list, students are required to check the course registration page in January for spring semester (Mar-Jun)<br>
                                and in July for fall semester (Sep-Dec).<br>
                                Course syllabus will be available at http://sugang.korea.ac.kr > Select ‘English’ > Major/General Subject > Select College/School and Course Classification by clicking the ‘Course No.’ link.
                                <div class="registration-courses">
                                    <ul>
                                        <li>Courses conducted in English will be indicated in brackets, English. (e.g. Understanding Korea(English))</li>
                                        <li>Courses marked under ‘5)X’ are available to exchange/visiting students.</li>
                                        <li>Students can only apply for the courses marked ‘A(Anam)’ under ‘1)C (Campus)’</li>
                                    </ul>
                                    <p>(Courses marked ‘S’ is Sejong campus, which is KU’s satellite campus and is located 3 hours away from Seoul).</p>
                                </div>
                            </li>
                            <li>
                                Students can refer to the course list from the previous year, however courses are subject to change.
                            </li>
                            <li>
                                Academic Credit Policy
                                <ul>
                                    <li>
                                        Undergraduate: Maximum of 19 credits (12-15 credits are recommended)<br>
                                        <p>*The minimum credit requirements for the Exchange/Visiting program is based on your home university policy.</p>
                                    </li>
                                    <li>Graduate : Maximum of 9 credits</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <div class="important-notice">
                        <strong>Important Notice</strong>
                        <p class="notice-summary">
                            It is highly competitive to register some courses in Korea University and students may not be able to sign up the courses they desire. Therefore we strongly<br>
                            recommend students to be flexible with their course selection. Please be aware that the course details could be changed every semester. Students take the<br>
                            responsibility themselves for their course plan. None of the courses can be guaranteed in advance.
                        </p>
                    </div>
                    <div class="course">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Department</th>
                                    <th>Course Code</th>
                                    <th>Title (List in order of preference)</th>
                                    <th>Credit Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="department">
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                    </td>
                                    <td class="course-code">
                                        <input type="text" class="form-control" required>
                                    </td>
                                    <td class="title">
                                        <input type="text" class="form-control" required>
                                    </td>
                                    <td class="credit-value">
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
                                    <td class="department">
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                    </td>
                                    <td class="course-code">
                                        <input type="text" class="form-control" required>
                                    </td>
                                    <td class="title">
                                        <input type="text" class="form-control" required>
                                    </td>
                                    <td class="credit-value">
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
                                    <td class="department">
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                    </td>
                                    <td class="course-code">
                                        <input type="text" class="form-control" required>
                                    </td>
                                    <td class="title">
                                        <input type="text" class="form-control" required>
                                    </td>
                                    <td class="credit-value">
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
                                    <td class="department">
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                    </td>
                                    <td class="course-code">
                                        <input type="text" class="form-control" required>
                                    </td>
                                    <td class="title">
                                        <input type="text" class="form-control" required>
                                    </td>
                                    <td class="credit-value">
                                        <select class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                            <option value="">Option</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
				</fieldset>
				
				<fieldset class="language-proficiency">
                    <h4>6. Language Proficiency</h4>
					<p class="note text-right">* Required input</p>
				    <table class="table">
				        <tr>
				            <td>
                                <div class="form-group">
                                    <p>In which language do you wish to study at KU?</p>
                                    <label>
                                        <input type="checkbox"> Korean
                                    </label>
                                    <label>
                                        <input type="checkbox"> English
                                    </label>
                                </div>
				            </td>
				        </tr>
				        <tr>
				            <td>
                                <div class="form-group">
                                    <p>Are you fluent in either Korean or English to follow lectures and complete course assignments?</p>
                                    <label>
                                        <input type="radio"> Yes
                                    </label>
                                    <label>
                                        <input type="radio"> No
                                    </label>
                                </div>
				            </td>
				        </tr>
				        <tr>
				            <td>
                                <div class="form-group">
                                    <p>Have you taken any Korean language course before?</p>
                                    <label>
                                        <input type="radio"> Yes
                                    </label>
                                    <label>
                                        <input type="radio"> No
                                    </label>
                                </div>
				            </td>
				        </tr>
                        <tr>
				            <td>
                                <div class="form-group">
                                    <p>Do you wish to take credit-bearing Korean language courses?</p>
                                    <label>
                                        <input type="radio"> Yes
                                    </label>
                                    <label>
                                        <input type="radio"> No
                                    </label>
                                </div>
				            </td>
				        </tr>
				    </table>
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