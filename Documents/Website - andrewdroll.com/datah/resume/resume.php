<!DOCTYPE html>
<html lang='en'>

<head>
	<link type="text/css" rel="stylesheet" href="resume.css"/>
	<link type="text/css" rel="stylesheet" href="showhide.css"/>
	<base href="http://www.datah.net/"/>
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
						}
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
					<p>Consultant, Educator, Researcher</p>
				</div>
				
				<div class="hleft">
					<p>613.864.0442</p>
					<p><a href="mailto:andrew.d.droll@gmail.com">andrew.d.droll@gmail.com</a></p>
				</div>


			</div>
			
			<div class="resumec">

				<div class ="rleft">
					<div class="rlcontainer" id = "skills">
						<h3><a href="javascript:toggle_vis(document.getElementById('skillst'));">Skills</a></h3>
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
									<p><a href="javascript:textbox_vis('twrit');">Technical writing</a></p>
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
					<div class="rlcontainer" id = "languages">
						<h3><a href="javascript:toggle_vis(document.getElementById('techt'));">Tech Skills</a></h3>
						
							<div class="skillstable" id="techt">
								<div class="sl">
									<p>HTML</p>
									<p>JavaScript</p>
									<p>PHP</p>
									<p>C++</p>
									<p>Office</p>
									<p>OpenOffice</p>
									<p>E-learning platforms</p>
									<p>Photoshop</p>
									<p>Windows</p>
								</div>
								<div class = "sr">
									<p>CSS</p>
									<p>Python</p>
									<p>FORTRAN</p>
									<p>LaTeX</p>
									<p>Google Docs</p>
									<p>Cloud storage</p>
									<p>Social Media</p>
									<p>GIMP</p>
									<p>Linux</p>
								</div>
							</div>
					</div>
								
					<div class="rlcontainer" id = "education">
						<h3><a href="javascript:toggle_vis(document.getElementById('educa'));">Education</a></h3>
							<div class="educ" id="educa">
								<div class="edrow"><a href="javascript:textbox_vis('qphd');"><p><strong>Ph.D.</strong> &nbsp; Queen's University</p><p>Mathematics, 2008-2012</p></a></div>
								<div class="edrow"><a href="javascript:textbox_vis('qmsc');"><p><strong>M.Sc.</strong> &nbsp; Queen's University</p><p>Mathematics, 2007-2008</p></a></div>
								<div class="edrow"><a href="javascript:textbox_vis('cudg');"><p><strong>B.Sc.</strong> &nbsp; Carleton University</p><p>Mathematics & Physics, 2003-2007</p></a></div>
								<div class="edrow"><a href="javascript:textbox_vis('awrds');"><h4 style="margin:0px;padding:0px;">Academic Awards & Scholarships</h4></a></div>
							</div>
					</div>
				</div>
				
				
				<div class="rright">
					<div class="rrcontainer">
						<img src="/images/proprofile.jpg" style="width:100%"/>
					</div>
					<div class="rrcontainer">
						<h3><a href="javascript:toggle_vis(document.getElementById('caro'));">Career objective</a></h3>
						<div class="goals" id='caro'>
							<p>My long-term career goal is to work in an intellectually stimulating research or software/web development role, in the technology or sustainable energy sectors.</p>
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
								<li>Science fiction</li>
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
								<li>Canadian</li>
								<li>US</li>
							</ul>
						</div>
					</div>
					

				</div>
				

					
				<div class="rcenter-wide">
				
				<div class="rrcontainer" id="Textbox">
						<div class="defaultT" id="defT">
							<p><a href="javascript:hidetextboxmsg();"><strong>This is an interactive CV!</strong> Click section headers to show or hide item lists. Click items to see additional details in this box. Click on this message to hide it <strong>permanently.</strong></a></p>
						</div>
						<?php include '../resume/descriptions.html' ;?>
				</div>
				
					<div class="rrcontainer" id="employment">
						<h3><a href="javascript:toggle_vis(document.getElementById('employ'));">Employment</a></h3>
						<div id="employ">
						<div class="job"><a href="javascript:textbox_vis('walraven');">
							<p><strong>Technology Consultant</strong> <span class="jplace">van Walraven Appraisals, Inc.</span></p>
							<p><strong>2003-present</strong> &nbsp; Ottawa, Canada</p>
						</a></div>
						<div class="job"><a href="javascript:textbox_vis('cupta');">
							<p><strong>Teaching/Lab Assistant</strong> <span class="jplace">Carleton University</span></p>
							<p><strong>January - May 2013</strong> &nbsp; Ottawa, Canada</p>
						</a></div>
						<div class="job"><a href="javascript:textbox_vis('qugta');">
							<p><strong>Graduate Teaching Assistant</strong> <span class="jplace">Queen's University</span></p>
							<p><strong>2007-2012</strong> &nbsp; Ottawa, Canada</p>
						</a></div>
						<div class="job"><a href="javascript:textbox_vis('qugra');">
							<p><strong>Graduate Research Assistant</strong> <span class="jplace">Queen's University</span></p>
							<p><strong>2007-2012</strong> &nbsp; Kingston, Canada</p>
						</a></div>
						<div class="job"><a href="javascript:textbox_vis('nsercusra');">
							<p><strong>NSERC USRA Researcher</strong> <span class="jplace">Carleton University</span></p>
							<p><strong>2006-2007</strong> &nbsp; Ottawa, Canada</p>
						</a></div>
						<div class="job"><a href="javascript:textbox_vis('cuuta');">
							<p><strong>Undergraduate Teaching Assistant</strong> <span class="jplace">Carleton University</span></p>
							<p><strong>2006-2007</strong> &nbsp; Ottawa, Canada</p>
						</a></div>
						</div>
					</div>
					<div class ="rlcontainer" id = "quals">
						<h3><a href="javascript:toggle_vis(document.getElementById('qualis'));">Highlighted Qualifications</a></h3>
						<div class = "quals" id="qualis">
							<ul>
								<li><strong>Excellent written and verbal communication:</strong> Published, peer-reviewed researcher.</li>
								<li><strong>Demonstrated programming expertise:</strong> Higgs boson simulations for cutting-edge, published research.</li>
								<li><strong>Front-end web development expertise:</strong> <a href="http://www.andrewdroll.com" target="_blank">andrewdroll.com</a> and other projects.</li>
								<li><strong>Typesetting in LaTeX:</strong> Produced a doctoral dissertation, as well as peer-reviewed, published papers. LaTeX is the academic standard in typesetting.</li>
								<li><strong>Expert problem solving and analytical skills:</strong> Completed a Ph.D. in pure mathematics, and an undergraduate double honours degree in mathematics and physics.</li>
								<li><strong>Interpersonal and teaching skills:</strong> Has been teaching classes of all sizes for over 10 years, in various contexts. Technical consulting experience in office settings.</li>
								<li><strong>Communication skills:</strong> Extensive public speaking experience from academic seminars and hundreds of hours of teaching-related activities.</li>
								<li><strong>Team-player:</strong> Contributor to multiple collaborative cutting-edge research projects. Technology consulting experience revolved around satisfying stakeholders' expectations.</li>
								<li><strong>Basic French:</strong> 10 years of French immersion instruction.</li>
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
