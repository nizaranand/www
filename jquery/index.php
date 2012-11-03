<?php
$head = '<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="jquery.mobile-1.1.1.min.css" />
		<script src="jquery-1.8.1.min.js"></script>
		<script src="jquery.mobile-1.1.1.min.js"></script>';
$navbar = '<div data-role="navbar">
					<ul>
						<li>
							<a href="#courses" data-role="button" data-transition="slide">Courses</a>
						</li>
						<li>
							<a href="@page2" data-role="button" data-shadow="false">Settings</a>
						</li>
						<li>
							<a href="@page3" data-role="button" data-shadow="true">Logout</a>
						</li>
					</ul>
				</div>';
$footer_content = "	<a href='#' data-role='button' data-icon='plus'>Add</a>
					<a href='#' data-role='button' data-icon='arrow-u'>Up</a>
					<a href='#' data-role='button' data-icon='arrow-d'>Down</a>";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Connect - R2</title>
		<?php echo $head ?>

	</head>
	<body>

		<div data-role="page">

			<div data-role="header" data-theme="">
				<a href="#page1" data-icon="gear" style="display:none">Settings</a>
				<h1>Welcome Back Evan!</h1>
				<a href="#" data-icon="gear" onclick="document.getElementById('').style.display='none'">Settings</a>
				<?php echo $navbar?>
			</div><!-- /header -->

			<div data-role="content" data-theme="">
				<ul>
					<li>
						Test
					</li>
					<li>
						Test
					</li>
				</ul>
			</div><!-- /content -->

			<div data-role="footer" data-theme="">
				<?php echo $footer_content ?>
			</div>

		</div><!-- /page -->

		<div data-role="page" id="courses" data-add-back-btn="true" data-back-btn-theme="">
			<div data-role="header">
				<h1>Courses</h1>
				<?php echo $navbar ?>
			</div>
			<div data-role="content">
				<a href='#' data-role='button'>CPSC310</a>
				<a href='#' data-role='button'>CPSC344</a>
				<a href='#' data-role='button'>CPSC404</a>
				<a href='#' data-role='button'>CPSC313</a>
				<a href='#' data-role='button'>STAT341</a>
			</div>
			<div data-role="footer">
				<?php echo $footer_content ?>
			</div>
		</div>

	</body>
</html>