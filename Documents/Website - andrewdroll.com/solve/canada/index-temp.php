<!DOCTYPE html>
<html lang='en'>

<head>
	<base href="http://www.andrewdroll.com"/>
	<?php include 'fonts.html' ;?>
	<link type="text/css" rel="stylesheet" href="mainstyle.css"/>
	<title>Andrew Droll - Home</title>
	<link rel="shortcut icon" href="/images/PiIcon.ico" type="image/x-icon" />
</head>

<body>

<div class="content" style="width:960px">

	<!-- header -->
	<div class="header">
		
		<div class="titleimg" style="margin:auto;background-image:url(/images/SolveBanner.png); height:297px;width:960px;padding:0px">
			<h1 id="pagehead">andrewdroll.com</h1>
		</div>
	

		<div class="nav">
			<div class="container">
				<?php include 'nav.html' ;?>
			</div>
		</div>

	</div>
	<!-- end header -->

	<div class="mainbody">
	<!-- All content in main pane should go in this div -->
		<div class="right-wide">
			<div class="intro">
				<h1>You've found your way to...</h1>
		
				<p style="margin-bottom:20px">...<span class="firstletter">A</span>ndrew Droll's personal website, where I host professional 
				information about myself, and blog about science, technology, mathematics, education, philosophy, and other topics.</p>
				<p>The latest blog post will always appear below.</p>
			</div>

<!-- Add php for blog entries here -->

			<?php include './blog/entries/LatestEntry.html';?>

		</div>



<!-- Right panes start here -->
		<div class="left">
<p/><p style="text-align:center">Change the world.<br/> Join the #SolveMIT community.</p><a href="http://solve.mit.edu" target="_blank"><img src="/images/solveTwitter.png" style="display:block;margin:0 auto;"/></a></p>

<p/>

<p/><p style="text-align:center">Keep informed, the Gnowit way.</p><a href="http://www.gnowit.com" target="_blank"><img src="/images/gnowitBigger.png" style="display:block;margin:0 auto;"/></a></p>

<p/>
			<div id="mypic">
				<h3>Andrew Droll</h3>
				<p>Ottawa, Canada</p>
			</div>

		
			<div class="container">
				<h3 style="margin-bottom:0em;margin-top:0em;">About</h3>
			</div>
			<div class="container">

				<div id="summary">
				
					<p style="padding-bottom:0px;margin-bottom:0px;margin-top:0em;font-size:0.9em">I am the Lead Data Scientist for Gnowit Inc. in Ottawa, Canada. Recently I joined the Massachusetts Institute of Technology (MIT)'s Solve movement as an invited participant to its inaugural event. I hold a Ph.D. in Mathematics from Queen's University in Kingston, Ontario. If you'd like to contact me, then get in touch by <a href="mailto:andrew.d.droll@gmail.com">e-mail</a>, via social media, or call/text me at 613.864.0442.</p>

					<p style="padding:0px;padding-left:0.2em;padding-top:0.2em;margin:0px;"><a href="/resume/resume.php">Interactive CV</a></p>
					<p style="padding:0px;padding-left:0.2em;padding-bottom:0.2em;margin:0px;"><a href="/who.php">Bio</a></p>
					<!--<p>I am a mathematician, scientist, and gamer. My true passion is simply in talking about and investigating new 
					ideas of all types. I hold a doctoral degree in pure mathematics from Queen's University, 
					and an undergraduate double honours degree in mathematics and physics. My varied
					background includes research from particle physics, to graph theory, to number theory, to information technology.
					Three of my favorite things are traveling, teaching<a href="/who.php">More about me.</a></p>-->
				</div>
			</div>
			
			<div class="contactlinks">
					<a href="https://twitter.com/andrewgnowit" target="_blank"><img src="/images/twitterI.png"/></a>
					<a href="http://www.linkedin.com/in/andrewdroll" target="_blank"><img src="/images/linkedin.png"/></a>
					<a href="mailto:andrew@gnowit.com"><img src="/images/email.png"/></a>
			</div>

		</div>
<!-- End right panes -->

<!-- Close mainbody div -->
	</div>
	
<!--Footer -->
	<div class="footer"> 
		<?php include 'footer.html' ;?>
	</div>

</div>

</body>
</html>
