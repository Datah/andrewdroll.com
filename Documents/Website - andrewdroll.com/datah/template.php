<!DOCTYPE html>
<html lang='en'>

<head>
	<base href="http://www.datah.net/"/>
	
	<link type="text/css" rel="stylesheet" href="mainstyle.css"/>
	<title>Andrew Droll - Template</title>
	<link rel="shortcut icon" href="/images/PiIcon.ico" type="image/x-icon" />
</head>

<body>

<div class="content" style="width:960px">

	<!-- header -->
	<div class="header">
		
		<div class="titleimg" style="margin:auto;background-image:url(INSERT URL);height:315px;width:960px;padding:0px">
			<h1 id="pagehead">andrewdroll.com</h1>
		</div>
	

		<div class="nav">
			<div class="container">
				<?php include 'http://www.datah.net/nav.html' ;?>
			</div>
		</div>

	</div>
	<!-- end header -->

	<div class="mainbody">
	<!-- All content in main pane should go in this div -->
	
		<div class="left-wide">
		<!--can change to class=right-wide if the wide pane should be right -->
			<div class="intro">
				INSERT CONTENT
			</div>
			INSERT MORE CONTENT
		</div>



<!-- Right panes start here -->
<!-- can change to class = left if the narrow pane should be left -->
		<div class="right">
			INSERT CONTENT

		
			<div class="container">
				<h2>SAMPLE RIGHT HEADER<h2>
			</div>
			<div class="container">
				SAME CONTAINER
			</div>

		</div>
<!-- End right panes -->


<!-- Close mainbody div -->
	</div>
	
<!--Footer -->
	<div class="footer"> 
		<?php include 'http://www.datah.net/footer.html' ;?>
	</div>

</div>

</body>
</html>
