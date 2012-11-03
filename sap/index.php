<html>

<head>
<title>Exam Manager</title>
</head>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>

<style>

body {
	background:grey;
	margin:1em;
	padding:0;
	font-family: 'PT Sans', sans-serif;
}
h1 {
	color:#2E3E85;
}
h2 {
	color:#2E3E85;
	text-decoration: underline;
}
.userbar {
	width:100%;
	height:30px;
	display:block;
	position: absolute;
	top:0;
	left:0;
	background: #C0C0C0;
	border-bottom:solid;
}
.body {
	background:white;
	margin:0 auto;
	padding-top: 20px;
	width:960px;
	height:100%;
}
.sidebar {
	margin:0;
	padding-top:1em;
	padding-left:10px;
	border-right:solid;
	width:100px;
	height:100%;
	float:left;
	display:block;
	background:#F8F8F8 ;
}
.sidebar.content {
	background: black;
}
.content {
	padding-left:1em;
	margin:0;
	width:800px;
	float:left;
	display:block;
	overflow: auto;
}
.exam-entry {
	margin-left: 3em;
	margin-right: 1em;
}

</style>
<body>
	<div class='userbar'>
		Welcome Back Evan!
	</div>
	<div class='body'>
		<div class='sidebar'>
			<img border="0" src="ubc.png" alt="UBC Shield" width="90" height="110">

			<ul>
				<li>Home</li>
				<li>Groups</li>
				<li>Tests</li>
			</ul>
		</div>
		<div class='content'>
		<div>
			<h1>Exam Manager</h1>
		</div>
		
		<?php
		$desciption = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam venenatis, magna id placerat iaculis, elit turpis volutpat ipsum, at congue magna sem scelerisque lacus.";
		for($i=1; $i<=8; $i++) { ?>
			<div class='exam-entry'><h2>[Exam Name <?php echo $i ?>]</h2><p><?php echo $desciption ?></p></div>
		<?php
		}
		?>
		</div>
	</div>

</body>

</html>