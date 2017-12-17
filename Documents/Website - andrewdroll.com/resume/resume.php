<!DOCTYPE html>
<html lang='en'>

<head>
	<link type="text/css" rel="stylesheet" href="resume.css"/>
	<base href="http://www.andrewdroll.com/"/>
	<?php include '../fonts.html' ;?>
	<title>Andrew Droll - Live Resume</title>
	<link rel="shortcut icon" href="/images/PiIcon.ico" type="image/x-icon" />
	
	<script type="text/javascript">
				var active=0;
				function toggle_vis(elem){
					if (!document.getElementById)
						{return};
					if (elem.style.display!="none")
						{elem.style.display="none"}
					else
						{elem.style.display="block"};
					};
					
				function textbox_vis(whichn){
					if (!document.getElementById || !document.getElementsByClassName)
						{return};
					var entries = document.getElementsByClassName("entry");
					for (i=0;i<entries.length;i++){
						if (entries[i].id == whichn && entries[i].style.display=="none"){
							document.getElementById("Textbox").style.display="block";
							entries[i].style.display = "block";
							document.getElementById("defT").style.fontSize="0.7em";
							active = 1;}
						else if (entries[i].id == whichn && entries[i].style.display!="none"){
							entries[i].style.display = "none";
							document.getElementById("defT").style.fontSize="1em";
							if (document.getElementById("defT").style.display == "none"){
								document.getElementById("Textbox").style.display="none";
								}
							active = 0;
							}
						else{
							entries[i].style.display="none"}
						};	
					};
					
				function hidetextboxmsg(){
						document.getElementById("defT").style.display="none";
						if (active == 0){
							document.getElementById("Textbox").style.display="none";}
						};
	</script>
	
</head>

<body>





		<div class="header">
			<div class="nav">
				<div class="container">
					<?php include 'resnav.html' ;?>
				</div>
			</div>
		</div>

	<div class="mainbody">
	
	<div class="mbbground">
	</div>

		
	<!-- end header -->

	<!-- header -->
	<!-- All content in main pane should go in this div -->
	
		<!--can change to class=right-wide if the wide pane should be right -->
			<div class="intro">
				
				
				<div class="hright">
					<p><a href="http://www.andrewdroll.com" target="_blank">andrewdroll.com</a></p>
					<p><a href="http://www.linkedin.com/in/andrewdroll" target="_blank">linkedin.com/in/andrewdroll</a></p>	
				</div>
				
				<div class="hcenter">
					<h1>Andrew Droll</h1>
					<p><a href="http://www.gnowit.com" target="_blank">Lead Data Scientist at Gnowit Inc.</a> <br><a href="http://solve.mit.edu" target="_blank">#SolveMIT</a></p>
				</div>
				
				<div class="hleft">
					<p>613.864.0442</p>
					<p><a href="mailto:andrew.d.droll@gmail.com">andrew.d.droll@gmail.com</a></p>
				</div>


			</div>
			
			<div class="resumec">

				<div class ="rleft">
				
					<div class="rlcontainer" id = "languages">
						<h3><a href="javascript:toggle_vis(document.getElementById('techt'));">Technical Skills</a></h3>
						
							<div class="skillstable" id="techt">
								<div class="sl">
									<a href="javascript:textbox_vis('hcprog');">
									<p>Hardcore programming</p>
									</a>
									<a href="javascript:textbox_vis('htmlcss');">
									<p>Front-end development</p>
									</a>
									<a href="javascript:textbox_vis('cloudd');">
									<p>Cloud services</p>
									</a>
									<a href="javascript:textbox_vis('productd');">
									<p>Product deployment</p>
									</a>
									<a href="javascript:textbox_vis('databases');">
									<p>Databases</p>
									</a>
									<a href="javascript:textbox_vis('linuxd');">
									<p>Linux OS</p>
									</a>
									<a href="javascript:textbox_vis('latexd');">
									<p>LaTeX</p>
									</a>
								</div>
							<!--	<div class = "sr">
									<p>CSS</p>
									<p>Python</p>
									
									
									<p>Google Docs</p>
									<p>Cloud storage</p>
									<p>Social Media</p>
									<p>GIMP</p>
									<p>Linux</p>
								</div>-->
							</div>
					</div>
				
					<div class="rlcontainer" id = "skills">
						<h3><a href="javascript:toggle_vis(document.getElementById('skillst'));">Other Skills</a></h3>
							<div class="skillstable" id="skillst">
								<div class="sl">
									<p><a href="javascript:textbox_vis('psol');">Problem solving</a></p>
									<p><a href="javascript:textbox_vis('prog');">Programming</a></p>
									<p><a href="javascript:textbox_vis('crit');">Critical thinking</a></p>
									<p><a href="javascript:textbox_vis('mstat');">Math & stats</a></p>
									<p><a href="javascript:textbox_vis('pspe');">Public speaking</a></p>
									<p><a href="javascript:textbox_vis('coll');">Collaboration</a></p>
									<p><a href="javascript:textbox_vis('adap');">Adaptable</a></p>
									<p><a href="javascript:textbox_vis('self');">Self-starting</a></p>
									<p><a href="javascript:textbox_vis('soft');">Software</a></p>
									<p><a href="javascript:textbox_vis('netw');">Networks</a></p>
								</div>
								<div class = "sr">
									<p><a href="javascript:textbox_vis('twri');">Technical writing</a></p>
									<p><a href="javascript:textbox_vis('rese');">Research</a></p>
									<p><a href="javascript:textbox_vis('anal');">Analysis</a></p>
									<p><a href="javascript:textbox_vis('phys');">Physics</a></p>
									<p><a href="javascript:textbox_vis('comm');">Communication</a></p>
									<p><a href="javascript:textbox_vis('teac');">Teaching</a></p>
									<p><a href="javascript:textbox_vis('ql');">Quick learner</a></p>
									<p><a href="javascript:textbox_vis('inwk');">Independent work</a></p>
									<p><a href="javascript:textbox_vis('hard');">Hardware</a></p>
									<p><a href="javascript:textbox_vis('trou');">Troubleshooting</a></p>		
								</div>
							</div>
					</div>
					
								
					<div class="rlcontainer" id = "education">
						<h3><a href="javascript:toggle_vis(document.getElementById('educa'));">Education</a></h3>
							<div class="educ" id="educa">
								<div class="edrow"><a href="javascript:textbox_vis('qphd');"><p><strong>Ph.D.</strong> &nbsp; Queen's University<img src="/images/qulogo.png" style="float:right;margin-right:0.5em;"/><br>Mathematics, 2008-2012</p></a></div>
								<div class="edrow"><a href="javascript:textbox_vis('qmsc');"><p><strong>M.Sc.</strong> &nbsp; Queen's University<img src="/images/qulogo.png" style="float:right;margin-right:0.5em;"/><br>Mathematics, 2007-2008</p></a></div>
								<div class="edrow"><a href="javascript:textbox_vis('cudg');"><p><strong>B.Sc.</strong> &nbsp; Carleton University<img src="/images/culogo.png" style="float:right;margin-right:0.5em;"/><br>Mathematics & Physics, 2003-2007</p></a></div>
								<div class="edrow"><a href="javascript:textbox_vis('awrds');"><h4 style="margin:0px;padding:0px;">Academic Awards & Scholarships</h4></a></div>
							</div>
					</div>
				</div>
				
				
				<div class="rright">
					<div class="rrcontainer">
						<img src="/images/andrewnsp.jpg" style="width:100%"/>
					</div>
					<div class="rrcontainer">
						<h3><a href="javascript:toggle_vis(document.getElementById('caro'));">Objective</a></h3>
						<div class="goals" id='caro'>
							<p>To continue developing powerful software systems that make sense of vast quantities of data in order to provide useful insights to real people. To master project management and to inspire others to want to work hard and do awesome things. To pursue projects that contribute to positive change in the world we all share.</p>
						</div>
					</div>
					
					<div class="rlcontainer">
						<h3><a href="javascript:toggle_vis(document.getElementById('ress'));">Academic Specialities</a></h3>
						<div class="researchs" id="ress" style="display:none">
							<ul>
								<li>Analytic number theory</li>
								<li>Graph theory</li>
								<li>Li's criterion</li>
								<li>Riemann zeta function</li>
								<li>Ramanujan graphs</li>
								<li>Prime numbers</li>
								<li>High energy physics</li>
							</ul>
						</div>
					</div>
					<div class="rlcontainer">
						<h3><a href="javascript:toggle_vis(document.getElementById('activsp'));">Other Activities & Projects</a></h3>
						<div class="activs" id="activsp" style="display:none">
							<ul>
								<li>SolveMIT</li>
								<li>andrewdroll.com</li>
								<li>Bitcoin blog series</li>
								<li>CMS meetings</li>
								<li>Tutoring</li>
								<li>CRE Webmaster</li>
								<li>Virtual Ventures Volunteer</li>
							</ul>
						</div>
					</div>
					<div class="rlcontainer">
						<h3><a href="javascript:toggle_vis(document.getElementById('ints'));">Interests</a></h3>
						<div class="interests" id="ints" style="display:none">
							<ul>
								<li>Traveling</li>
								<li>Art & culture</li>
								<li>PC games</li>
								<li>Internet culture</li>
								<li>Writing</li>
								<li>Photography</li>
								<li>Chess</li>
							</ul>
						</div>
					</div>
					<div class="rlcontainer">
						<h3><a href="javascript:toggle_vis(document.getElementById('scauses'));">Social Causes</a></h3>
						<div class="causes" id="scauses" style="display:none">
							<ul>
								<li>MIT Solve Movement</li>
								<li>Energy & Environment</li>
								<li>Education</li>
								<li>Human Rights</li>
								<li>Science and Technology</li>
								<li>Economic Empowerment</li>
							</ul>
						</div>
					</div>
					<div class="rlcontainer">
						<h3><a href="javascript:toggle_vis(document.getElementById('czen'));">Citizenships</a></h3>
						<div class="citizen" id="czen" style="display:none">
							<ul>
								<li>Canadian <img src="/images/cflag.png" style="float:right"/></li>
								<li>US <img src="/images/uflag.png" style="float:right"/></li>
							</ul>
						</div>
					</div>
					

				</div>
				

					
				<div class="rcenter-wide">
				
				<div class="rrcontainer" id="Textbox">
						<div class="defaultT" id="defT">
							<p><a href="javascript:hidetextboxmsg();"><strong>This is an interactive CV.</strong> Click section headers to show or hide item lists. Click items to see additional details in this box. Click on this message to hide it <strong>permanently.</strong></a></p>
						</div>
						<?php include '../resume/descriptions.html' ;?>
				</div>
				
					<div class="rrcontainer" id="employment">
						<h3><a href="javascript:toggle_vis(document.getElementById('employ'));">Employment</a></h3>
						<div id="employ">
						
						<div class="job">
							<p><a href="javascript:textbox_vis('gnowitlds');"><strong>Lead Data Scientist</strong></a> <span class="jplace"><a class ="jlink" href="http://www.gnowit.com" target="_blank">Gnowit Inc. &nbsp; <img src="/images/gnowitSmall.png"/></a></span></p>
							<p><strong>Aug 2015 - present</strong> &nbsp; Ottawa, Canada</p>
						</div>
						<div class="job">
							<p><a href="javascript:textbox_vis('gnowitdsd');"><strong>Data Scientist/Java Developer</strong></a><span class="jplace"><a class ="jlink" href="http://www.gnowit.com" target="_blank">Gnowit Inc. &nbsp; <img src="/images/gnowitSmall.png"/></a></span></p>
							<p><strong>2014 - 2015</strong> &nbsp; Ottawa, Canada</p>
						</div>
						<div class="job">
							<p><a href="javascript:textbox_vis('walraven');"><strong>Technology Consultant</strong></a> <span class="jplace"><a class ="jlink" href="http://ottawa-appraisers.com/" target="_blank">van Walraven Appraisals Inc. &nbsp; <img src="/images/vwlogo.png"/></a></span></p>
							<p><strong>2003-2015</strong> &nbsp; Ottawa, Canada</p>
						</a></div>
						<!--<div class="job"><a href="javascript:textbox_vis('cupta');">
							<p><strong>Teaching/Lab Assistant</strong> <span class="jplace">Carleton University &nbsp;<img src="/images/culogo.png"/></span></p>
							<p><strong>January - May 2013</strong> &nbsp; Ottawa, Canada</p>
						</a></div>-->
						<div class="job">
							<p><a href="javascript:textbox_vis('qugta');"><strong>Graduate Teaching Assistant</strong></a> <span class="jplace"><a class ="jlink" href="http://www.queensu.ca/" target="_blank">Queen's University &nbsp;<img src="/images/qulogo.png"/></a></span></p>
							<p><strong>2007-2012</strong> &nbsp; Kingston, Canada</p>
						</a></div>
						<div class="job">
							<p><a href="javascript:textbox_vis('qugra');"><strong>Graduate Research Assistant</strong></a> <span class="jplace"><a class ="jlink" href="http://www.queensu.ca/" target="_blank">Queen's University &nbsp;<img src="/images/qulogo.png"/></a></span></p>
							<p><strong>2007-2012</strong> &nbsp; Kingston, Canada</p>
						</a></div>
						<div class="job">
							<p><a href="javascript:textbox_vis('nsercusra');"><strong>NSERC USRA Researcher</strong></a> <span class="jplace"><a class ="jlink" href="http://carleton.ca/" target="_blank">Carleton University &nbsp;<img src="/images/culogo.png"/></a></span></p>
							<p><strong>2006-2007</strong> &nbsp; Ottawa, Canada</p>
						</a></div>
						<!--<div class="job"><a href="javascript:textbox_vis('cuuta');">
							<p><strong>Undergraduate Teaching Assistant</strong> <span class="jplace">Carleton University &nbsp;<img src="/images/culogo.png"/></span></p>
							<p><strong>2006-2007</strong> &nbsp; Ottawa, Canada</p>
						</a></div>-->
						</div>
					</div>
					
					<div class ="rlcontainer" id = "quals">
						<h3><a href="javascript:toggle_vis(document.getElementById('qualis'));">Highlighted Qualifications</a></h3>
						<div class = "quals" id="qualis">
							<ul>
								<li><strong>Excellent written and verbal communication:</strong> Published, peer-reviewed researcher.</li>
								<li><strong>Demonstrated programming expertise:</strong> Writing high-quality back-end distributed and asynchronous systems components in Java on a daily basis.</li>
								<li><strong>Expert problem solving and analytical skills:</strong> Advanced quantitative problem solving skills cultivated through years of research training and business experience.</li>
								<li><strong>Interpersonal and teaching skills:</strong> Loves teaching, and has extensive experience with group instruction and with one-on-one tutoring and mentoring. Experience managing teams of employees through full product cycle.</li>
								<li><strong>Communication skills:</strong> Extensive public speaking experience. Adept at communicating the essence of complex ideas to any audience. Practised listening skills.</li>
								<li><strong>Team-player:</strong> Works with a talented multi-faceted team every day to deliver innovative and value-added products to clients. Technology consulting experience revolved around satisfying stakeholders' expectations.</li>
							</ul>
						</div>
					</div>
					
				</div>
				

		
					
					
					
				
			</div>



<!-- Right panes start here -->
<!-- can change to class = left if the narrow pane should be left -->
		<!--<div class="right">
			INSERT CONTENT

		
			<div class="container">
				<h2>SAMPLE RIGHT HEADER<h2>
			</div>
			<div class="container">
				SAME CONTAINER
			</div>

		</div>-->
<!-- End right panes -->


<!-- Close mainbody div -->
	</div>
	
<!--Footer -->
	<div class="footer">
	<p>&copy; 2014 Andrew Droll. Built with HTML, CSS, JavaScript, and PHP. </p>
	</div>


</body>
</html>
