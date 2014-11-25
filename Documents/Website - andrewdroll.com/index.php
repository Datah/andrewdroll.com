<!DOCTYPE html>
<html lang='en'>

<head>
	<base href="http://www.datah.net"/>
	<?php include 'fonts.html' ;?>
	<link type="text/css" rel="stylesheet" href="mainstyle.css"/>
	<title>Andrew Droll - Home</title>
	<link rel="shortcut icon" href="/images/PiIcon.ico" type="image/x-icon" />
</head>

<body>

<div class="content" style="width:960px">

	<!-- header -->
	<div class="header">
		
		<div class="titleimg" style="margin:auto;background-image:url(/images/HeaderL.png); height:315px;width:960px;padding:0px">
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
		
				<p style="margin-bottom:20px">...<span class="firstletter">A</span>ndrew Droll's personal website, where I host professional and academic 
				information about myself, and perhaps the occasional blog entry about science, technology, mathematics, education, or philosophy. 
				Please feel free to browse the site. Below are some links that you may find interesting:</p>
				<p style="text-align:center"><a href="#">About me</a></p>
				<p style="text-align:center"><a href="#">Selected publications, and professional information</a></p>
			

				<div class="contactlinks">
					<a href="https://www.facebook.com/andrew.droll" target="_blank"><img src="/images/fb.png"/></a>
					<a href="http://www.linkedin.com/in/andrewdroll" target="_blank"><img src="/images/linkedin.png"/></a>
					<a href="mailto:andrew.math@gmail.com"><img src="/images/email.png"/></a>
				</div>

				<p>The latest blog post will always appear below.</p>
			</div>

<!-- Add php for blog entries here -->

		</div>



<!-- Right panes start here -->
		<div class="left">
			<div id="mypic">
				<h3>Andrew Droll</h3>
				<p>Ottawa, Canada</p>
			</div>

		
			<div class="container">
				<h2>About</h2>
			</div>
			<div class="container">
				<div id="summary">
					<p>I am a mathematician, scientist, and gamer. My true passion is simply in talking about and investigating new 
					ideas of all types. I hold a doctoral degree in pure mathematics from Queen's University, 
					and an undergraduate double honours degree in mathematics and physics. My varied
					background includes research from particle physics, to graph theory, to number theory, to information technology.
					Three of my favorite things are traveling, teaching, and playing video games. <a href="/who.php">More about me.</a></p>
				</div>
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
