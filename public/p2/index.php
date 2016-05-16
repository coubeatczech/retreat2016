<?php

	include "/var/www/retreat2016/database.php";

	function redirect($url, $permanent = false) {
    header('Location: ' . "http://" . $_SERVER['HTTP_HOST'] . $url, true, $permanent ? 301 : 302);
    exit(); }

	if (! isset($_GET["lang"])) {
		$user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		switch ($user_lang){
			case "cs":
				redirect('/retreat/cs/', false);
			default:
				redirect('/retreat/en/', false);
				break; } }

	$lang = $_GET["lang"];
	if ($lang != "en" && $lang != "cs") {
		die; }

	$mysqli = new mysqli("localhost", $db_user, $db_pass, $db_database);
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; }
	$result = $mysqli->query("select meta_key, meta_value from wp_postmeta where post_id = " . $copy_post_id . " and (meta_key like '%video%' or meta_key like '" . $lang . "_%')");

	$results_array = array();
	while ($row = $result->fetch_assoc()) {
		$results_array[substr($row["meta_key"],3)] = $row["meta_value"]; }

	function i($key) {
		global $results_array;
		echo $results_array[$key]; }

?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php i("meta_desc"); ?>">
<meta name="keywords" content="<?php i("meta_keywords"); ?>">

<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic|Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

	main, header, footer { min-width: 300px; }

	html, body { 
		width: 100%;
		height: 100%; }

	strong {font-weight: bold;}

	.shown { display: block; }
	a:hover, a:visited, a:focus, a { 
		color: inherit; }

	h4, h5, h6 { font-family: "Libre Baskerville"; }
	header {
		position: relative;
		height: 100%;
		width: 100%;
		font-family: 'Open Sans';
		background-color: #840c20; }
	header nav {
		background-color: #840c20;
		position: fixed;
		top: 0px;
		left: 0px;
		width: 100%;
		z-index: 998;
		color: white;
		height: 66px; }
	header div.stripe {
		z-index: 1000;
		background-image: url("<?php echo $img_path; ?>/stripe.png"); 
		background-repeat: repeat-x; 
		top: 66px;
		left: 0px;
		width: 100%;
		height: 16px;
		position: fixed; }
	header nav div.hamburger {
		display: none; }
	header nav div.menu, header nav div.hamburger {
		position: relative;
		margin-top: 25px;
		float: right;
		margin-right: 25px; }
	header nav div.hamburger i {
		top: 2px;
		position: relative; }
	header nav div a { 
		font-family: "Open Sans";
		color: white; 
		text-transform: uppercase;
		text-decoration: none; }
	header nav a#header-logo {
		margin-top: 7px;
		margin-left: 7px;
		float: left; }
	header div#rinpoche-picture {
		top: 0px;
		left: 0px;
		position: absolute;
		padding-top: 132px;
		height: 100%;
		width: 100%; }
	header div#rinpoche-picture div {
		height: 100%;
		width: 100%;
		background-image: url("<?php echo $img_path; ?>/rinpoche_transparent.png");
		background-size: contain;
		background-repeat: no-repeat;
		background-position: left 0px; }
	header div#header-text-2 h3 {
		margin: 10px 0px; }
	header div#header-text-2 h2 {
		margin: 15px 0px; }
	header div#header-text-2 p {
		margin-top: 40px; }
	header div#background1 {
		height: 100%;
		width: 100%;
		padding-top: 82px; }
	header div#background2 {
		height: 100%;
		width: 100%;
		background-size: cover;
		background-image: url("<?php echo $img_path; ?>/background.png"); } 

	#header-text-1, #header-text-2 { 
		padding: 0px 20px;
		width: 50%;
		margin-left: 40%;
		text-align: center;
		font-family: 'Libre Baskerville';
		color: white; }
	#header-text-1 { 
		width: 70%;
		margin-left: 30%;
		padding: 8% 0px 0px 0px; }
	#header-text-2 hr {
		width: 100px; }

	h1 { 
		text-transform: uppercase;
		font-size: 2.5em; }
	h3 { 
		text-transform: uppercase;
		font-size: 1.5em; }

	h2 { font-size: 2em; }

	/* above the fold */
	@media (min-width: 1000px) and (max-width: 1305px) {
		header div#rinpoche-picture div { 
			background-position: -150px 0px; } }
	@media (max-width: 500px) {
		h1 { font-size: 1.8em; } }

	@media (max-width: 999px), (max-height: 600px) {
		#header-text-1 { padding-top: 35px; }
		#header-text-1, #header-text-2 {
			margin-left: 35%;
		  width: 60%; }
		header div#rinpoche-picture {
			padding-top: 300px; }
		header div#rinpoche-picture div {
			background-position: -100px 0px; } }

	@media (max-width: 767px), (max-height:600px) {
		header { height: auto; }
		header div#background1, header div#background2 { height: auto; }
		#header-text-1, #header-text-2 {
			margin-left: 0px;
			width: 100%; }
		#header-text-1, #header-text-2 { padding: 40px 20px; }
		#header-text-1 { margin-top: 0px; }
		header div#rinpoche-picture {
			padding-top: 0px;
			width: 100%;
			position: static; }
		header div#rinpoche-picture div {
			background-position: left 0px;
			width: 100%;
			height: 0px;
			padding-bottom: 76%; } }
	@media (max-width: 400px) {
		 header .mobile { display: none; } }

	/* menu */
	@media (max-width: 1012px) {
		header nav div.hamburger {
			display: block; }
		header nav div.menu.shown {
			display: block; }
		header nav div.menu span {
			display: none; }
		header nav div.menu a {
			text-align: right;
			margin-bottom: 30px;
			color: black;
			display: block; }
		header nav div.menu {
			z-index: 99999;
			padding: 30px 30px 0px 30px;
			background-color: #fcf1c9;
			right: 0px;
			top: 40px;
			position: absolute;
			display: none; } }

	div.clear, span.clear { 
		display: block;
		clear: both; }
	section, footer {
		padding: 70px 0px; }
	h4 {
		font-size: 2em;
		font-weight: 600; }
	h5, .h8 {
		margin-top: 15px;
		margin-bottom: 40px; }
	.h8 { 
		display: block;
		text-align: center; }
	h4, h5 {
		text-transform: uppercase;
		text-align: center; }
	h6 {
		font-size: 1.1em;
		font-weight: bolder;
		text-transform: uppercase;
		margin-bottom: 20px; }
	section p.marginup {
		margin-top: 20px; }
	section hr, footer hr {
		border: 0;
		height: 2px;
		border-top: 2px solid black; }

	main section {
		width: 100%; }
	main section div.center, footer div.center {
		padding: 0px 20px;
		position: relative;
		max-width: 1000px;
		margin: 0px auto; }
	div.float {
		width: 1000px; 
		position: relative; }
	.gray {
		background-color: #fffee8; }
	.red {
		color: #fffee9;
		background-color: #840c20; }
	
	@media (min-width: 780px) {
		.table-row {
			display: table-row }
		.table-row div {
			width: 300px;
			vertical-align: top;
			display: table-cell }
		.table {
			display: table; } }

	.table {
		margin: 50px auto 0px auto; }

	section .table .table-row h6 { margin: 0px 0px 15px 0px; }
	section .table .table-row h6.non-first { margin: 40px 0px 15px 0px; }

	img.mkcenter { 
		max-width: 100%;
		height: auto;
		display: block;
		margin: 0px auto; }

	p { 
		font-family: 'Open Sans';
		line-height: 1.3em; }
	
	section#teacher hr { max-width: 400px; }
	section#teacher p.q {
		font-family: 'Libre Baskerville';
		font-size: 1.3em;
		font-style: italic;
		margin: 0px auto;
		text-align: center;
		max-width: 800px; }
	section#teacher p.q em {
		margin-top: 20px;
		text-align: center;
		display: block; }
	section#teacher div.text { 
		min-width: 220px ;
		max-width: 220px; }
	section#teacher .table-row div { 
		width: auto; }
	section#teacher h6 {
		margin-top: 15px; }
	section#teacher div.table-row img {
		padding: 0px 20px;
		display: block;
		margin: 0px auto }
	@media (max-width: 800px) {
		section#teacher .table { 
			display: block; }
		section#teacher .table-row { 
			display: block; }
		section#teacher .table-row div { 
			display: block;
			float: left; }
		section#teacher .table-row div.text.mobile-row { 
			max-width: 500px; }
		section#teacher .table-row div.text { 
			max-width: 300px;
			margin: 0px auto;
			text-align: left; } }
	@media (min-width: 300px) and (max-width: 640px) {
		section#teacher .table-row div.text { 
			max-width: 500px; } }

	section#programme hr { width: 200px; }
	section#programme p.standalone { 
		margin: 0px auto;
		max-width: 900px; }
	section#programme p.after-programme { margin-top: 35px; }
	section#programme p { text-align: center; }
	section#programme hr.after-programme { 
		max-width: 400px;
		margin: 20px auto; }
	section#programme ul li {
		line-height: 1.3em;
		font-family: 'Open Sans'; }
	section#programme .table-row div h6 {
		margin-top: 20px; }
	section#programme .table-row div strong {
		display: inline-block;
		margin-top: 10px; }
	@media (max-width:780px) {
		section#programme .table-row div h6 {
			margin-top: 40px; } }
	@media (max-width: 699px) {
		section#programme .table-row div {
			text-align: left; } }
	@media (min-width: 700px) {
		section#programme .table {
			table-layout: fixed; }
		section#programme .table-row {
			display: table-row; }
		section#programme .table-row div {
			padding: 0px 15px;
			max-width: 300px;
			width: auto;
			vertical-align: top;
			display: table-cell; }
		section#programme .table {
			display: table; } } 

	section#activities .right-side {
		padding-left: 50px; }
	section#activities .left-side { 
		padding-right: 10px;
		text-align: right; }
	section#activities .table-row { position: relative; } 
	section#activities .table-row div { padding-bottom: 55px; }
	section#activities .table-row div h6 { margin: 50px 0px 0px 0px; }
	section#activities .table-row p { margin-top: 15px; }
	section#activities .video-left { 
		left: -50%;
		position: relative; }
	section#activities .right-side { 
		right: -50%;
		position: relative; }
	section#activities hr { 
		position: relative;
		width: 140px; }
	section#activities .left-side hr { 
		float: right;
		right: -50px }
	section#activities .right-side hr { 
		float: left;
		left: -50px; }
	@media (min-width: 940px) {
		section#activities .video-left iframe { 
			right: 0px;
			position: absolute; }
		section#activities .table-row {
			display: table-row; }
		section#activities .table-row .left-side {
			padding-right: 50px; }
		section#activities .table-row div {
			width: 400px;
			vertical-align: top;
			display: table-cell; }
		section#activities .table {
			table-layout: fixed;
			display: table; } }
	@media (max-width: 939px) {
		section#activities .table-row {
			display: block }
		section#activities .table-row div {
			max-width: 500px;
			width: auto;
			display: block }
		section#activities .right-side {
			padding-left: 0px; }
		section#activities .table {
			display: block; }
		section#activities .table-row div { padding-bottom: 20px; }
		section#activities hr { display: none; }
		section#activities h6 { text-align: center; }
		section#activities p { text-align: left; }
		section#activities .right-side { position: static; }
		section#activities .video-left { position: static; } }

	section#donation #thermometer {
		text-align: center;
		width: 100%; }
	section#donation #thermometer div {
		position: relative;
		margin: 40px auto;
		max-width: 500px }
	section#donation #thermometer hr {
		
		margin: 0px;
		max-width: 100%;
		height: 0px;
		border-radius: 10px; }
	section#donation #thermometer hr.whole {
		display: block;
		border: 10px solid #dcd9d9;
		color: black;
		box-sizing: border-box;
		width: 100%; }
	section#donation #thermometer hr.active {
		left: 0px;
		top: 0px;
		width: <?php i("eo_donation_percent"); ?>%;
		border: 10px solid #840c20;
		position: absolute; }
	section#donation p { 
		margin-top: 20px;
		text-align: left; }
	section#donation p.before { 
		margin-top: inherit; }
	section#donation hr { max-width: 400px; }
	section#donation .table-row div { 
		max-width: 400px; 
		padding:0px 40px; }
	section#donation h6 { text-align: center; }
	@media (max-width:780px) {
		section#donation .table-row div { 
			margin: 0px auto;
			text-align: center;
			max-width: 500px;
			padding: 0px; }
		section#donation .table-row div h6 {
			margin-top: 40px; } }

	section#venue h6 { 
		margin-top: 35px;
		text-align: center; }
	section#venue hr {
		margin-top: 40px;
		width: 50px; }
	section#venue p, section#venue strong {
		display: block;
		text-align: center; }
	section#venue strong.h7 { 
		font-family: "Open Sans";
		margin: 20px 0px; }
	section#venue ul li { 
		line-height: 1.3em;
		text-align: center; 
		font-family: "Open Sans"; }
	section#venue img#pin { 
		margin: 40px auto; }

	footer#contact hr { 
		max-width: 400px; 
		border-color: white; }
	footer address { 
		line-height: 1.3em;
		font-family: "Open Sans"; }
	footer i.glyphicon { font-size: 3em; display: block; }
	footer div.table-row div { padding: 0px 20px; }
	footer form input {
		border: 0px;
		max-width: 300px;
		font-family: "Open Sans";
		padding-left: 20px;
		color: black;
		border-radius: 300px;
		font-weight: bold;
		height: 40px;
		font-size: 1.2em;
		line-height: 1.2em;
		text-transform: uppercase;
		font-family: "Open Sans";
		margin-top: 20px;
		display: block;
		text-align: left;
		width: 100%; }
	footer form input[type="submit"] {
		background-color: #dcd9d9;
		padding-left: 0px;
		text-align: center; }
	footer form input[type="text"] {
		text-transform: none; }
	footer .table-row div a { 
		display: block;
		margin-top: 20px;
		font-family: "Open Sans"; }
	@media (min-width: 781px) and (max-width: 1100px) {
		footer#contact .table .table-row div.first-row {
			margin-bottom : 40px; }
		footer#contact .table .table-row div {
			width: 50%;
			float: left; } }
	@media (max-width: 780px) {
		footer#contact .table .table-row div h6 {
			margin-top: 40px; }
		footer#contact .table .table-row div {
			padding: 0px; }

</style>

<title><?php i("title"); ?></title>
</head>

<body>
	<header>
		<nav>
			<a class="page-scroll" id="header-logo" href="#header-part-1"><img src="<?php echo $img_path; ?>/idc_logo.png" /></a>
			<div class="menu">
				<a class="page-scroll" href="#teacher"><?php i("menu_teacher"); ?></a> 
				<span>|</span>
				<a class="page-scroll" href="#programme"><?php i("menu_programme"); ?></a>
				<span>|</span>
				<a class="page-scroll" href="#donation"><?php i("menu_fee"); ?></a>
				<span>|</span>
				<a class="page-scroll" href="#venue"><?php i("menu_venue"); ?></a>
				<span>|</span>
				<a class="page-scroll" href="#contact"><?php i("menu_contact"); ?></a>
				<span>|</span>
				<a href="/aktuality/puvodni-homepage/"><?php i("menu_original_page"); ?></a>
				<span>|</span>
				<a href="<?php i("menu_lang_link"); ?>"><?php i("menu_lang"); ?></a>
			</div>
			<div class="hamburger">
				<a href="javascript://">Menu <i class="glyphicon glyphicon-menu-hamburger"></i></a>
			</div>
		</nav>
		<div class="stripe"></div>
		<div id="background1">
			<div id="background2">
				<div id="header-part-1">
					<div id="header-text-1">
						<h1><?php i("h1"); ?></h1>
					</div>
					<div id="rinpoche-picture">
						<div></div>
					</div>
				</div>
				<div id="header-text-2">
					<h3><?php i("h1_p1"); ?></h3>
					<hr />
					<h2><?php i("h1_p2"); ?></h2>
					<h3><?php i("h1_p3"); ?></h3>
					<p><?php i("h1_p"); ?></p>
				</div>
			</div>
		</div>
	</header>
	<main>
		<section id="teacher" class="gray">
			<div class="center">
				<h4><?php i("menu_teacher"); ?></h4>
				<hr />
				<h5><?php i("teacher_h"); ?></h5>
				<p class="q"><?php i("teacher_col_1"); ?></p>
				<div class="table">
					<div class="table-row">
						<div class="text"> <?php i("teacher_col_2"); ?> </div>
						<div><img src="<?php echo $img_path; ?>/rinpoche_small.png" /></div>
						<span class="clear"></span>
						<div class="text mobile-row"> 
							<?php i("teacher_col_4"); ?> 
						</div>
						<span class="clear"></span>
					</div>
				</div>
			</div>
		</section>
		<section id="programme">
			<div class="center">
				<h4><?php i("menu_programme"); ?></h4>
				<hr />
				<h5><?php i("programme_h2"); ?></h5>
				<p class="standalone">
					<?php i("programme_general"); ?>
				</p>
				<div class="table">
					<div class="table-row">
						<div>
							<?php i("programme_day_1"); ?>
						</div>
						<div>
							<?php i("programme_day_2"); ?>
						</div>
						<div>
							<?php i("programme_day_3"); ?>
						</div>
					</div>
				</div>
				<p class="after-programme"> <?php i("programme_after_schedule"); ?> </p>
				<hr class="after-programme" />
				<p> <?php i("programme_slovakia"); ?> </p>
			</div>
		</section>
		<?php if ($lang != "en") { ?>
		<section class="gray" id="activities">
			<div class="center">
				<div class="table">
					<div class="table-row">
						<div class="left-side">
							<h6><?php i("programme_h3_dz"); ?></h6>
							<hr />
							<span class="clear"></span>
							<p><?php i("programme_p_dz"); ?></p>
						</div>
						<div class="video"><iframe width="400" height="300" src="<?php i("eo_dzogchen"); ?>" frameborder="0" allowfullscreen></iframe></div>
					</div>
					<div class="table-row">
						<div class="right-side">
							<h6><?php i("programme_h3_yy"); ?></h6>
							<hr />
							<span class="clear"></span>
							<p> <?php i("programme_p_yy"); ?> </p>
						</div>
						<div class="video video-left"><iframe width="400" height="300" src="<?php i("eo_yy"); ?>" frameborder="0" allowfullscreen></iframe></div>
					</div>
					<div class="table-row">
						<div class="left-side">
							<h6><?php i("programme_h3_vd"); ?></h6>
							<hr />
							<span class="clear"></span>
							<p><?php i("programme_p_vd"); ?></p>
						</div>
						<div class="video"><iframe width="400" height="300" src="<?php i("eo_vd"); ?>" frameborder="0" allowfullscreen></iframe></div>
					</div>
					<div class="table-row">
						<div class="right-side">
							<h6><?php i("programme_h3_kh"); ?></h6>
							<hr />
							<span class="clear"></span>
							<p><?php i("programme_p_kh"); ?></p>
						</div>
						<div class="video video-left"><iframe width="400" height="300" src="<?php i("eo_kh"); ?>" frameborder="0" allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>
		<?php if ($lang == "en") { ?>
		<section id="donation" class="gray">
		<?php } else { ?>
		<section id="donation">
		<?php } ?>
			<div class="center">
				<h4><?php i("menu_fee"); ?></h4>
				<hr />
				<div id="thermometer">
					<div>
						<hr class="whole" />
						<hr class="active" />
					</div>
				</div>
				<p><?php i("donation_h2"); ?></p>
				<p class="before"><?php i("donation_p"); ?></p>
				<div class="table">
					<div class="table-row">
						<div>
							<h6><?php i("donation_h3_1"); ?></h6>
							<?php i("donation_p1"); ?>
						</div>
						<div>
							<h6><?php i("donation_h3_2"); ?></h6>
							<?php i("donation_p2"); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php if ($lang != "en") { ?>
		<section id="venue" class="gray">
		<?php } else { ?>
		<section id="venue">
		<?php } ?>
			<div class="center">
				<h4><?php i("menu_venue"); ?></h4>
				<hr />
				<h5><?php i("venue_h2"); ?></h5>
				<div class="responsive-image">
					<img src="<?php echo $img_path; ?>/foto_palac.jpg" class="mkcenter" />
				</div>
				<h6><?php i("venue_h6"); ?></h6>
				<p><?php i("venue_p1"); ?></p>
				<a href="https://goo.gl/maps/va8d4R7M8eJ2">
					<img src="<?php echo $img_path; ?>/pin.png" id="pin" class="mkcenter" />
				</a>
				<hr />
				<h6><?php i("venue_h6_2"); ?></h6>
				<p><?php i("venue_p2"); ?></p>
				<hr />
				<h6><?php i("venue_h6_3"); ?></h6>
				<p><?php i("venue_p3"); ?></p>
				<strong class="h7"><?php i("venue_h7_1"); ?></strong>
				<ul><?php i("venue_li_1"); ?></ul>
				<strong class="h7"><?php i("venue_h7_2"); ?></strong>
				<ul><?php i("venue_li_2"); ?></ul>
			</div>
		</section>
		<footer id="contact" class="red">
			<div class="center">
				<h4><?php i("menu_contact"); ?></h4>
				<hr/>
				<div class="table">
					<div class="table-row">
						<div class="first-row">
							<h6><?php i("contact_email_h3"); ?></h6>
							<i class="glyphicon glyphicon-envelope"></i>
							<a href="mailto:<?php i("contact_email"); ?>"><?php i("contact_email"); ?></a>
						</div>
						<div class="first-row">
							<h6><?php i("subscribe_h3") ?></h6>
							<p><?php i("subscribe_p"); ?></p>
							<form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post" class="form-inline subscribe">
								<input type="hidden" name="campaign_token" value="xxx" class="form-control" />
								<input type="text" name="email" placeholder="<?php i("subscribe_placeholder"); ?>"/>
								<input type="submit" value="<?php i("contact_send"); ?>"/>
							</form>
						</div>
						<div>
							<h6><?php i("contact_organizer_h3"); ?></h6>
							<address>
								Mezinárodní komunita dzogčhenu Kunkyabling, z.s. <br/>
								Opletalova 35 <br/>
								11000 Praha 1 <br/>
								IČ 26518562
							</address>
						</div>
						<div>
							<h6><?php i("contact_social"); ?></h6>
							<a href="https://www.facebook.com/events/914385668683147/">
								<img src="<?php echo $img_path; ?>/FB-f-Logo__blue_50.png" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</main>
<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script>
jQuery.easing.jswing=jQuery.easing.swing;jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g)},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a},easeInOutQuad:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a}return -h/2*((--f)*(f-2)-1)+a},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a}return h/2*((f-=2)*f*f+2)+a},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a}return -h/2*((f-=2)*f*f*f-2)+a},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a}return h/2*((f-=2)*f*f*f*f+2)+a},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a}if(f==g){return a+h}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a}return h/2*(-Math.pow(2,-10*--f)+2)+a},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k/2)==2){return e+l}if(!j){j=k*(0.3*1.5)}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*(f/=h)*f*((g+1)*f-g)+a},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a}});
</script>
<script>
	$(document).ready(function () {
    $('a.page-scroll').bind('click', function(event) {
				$("div.menu").toggleClass("shown");
        var $anchor = $(this);
        $('html, body').stop().animate({
					scrollTop: ($($anchor.attr('href')).offset().top - 82)
        }, 499, 'easeInOutExpo');
        event.preventDefault(); });
		var hash = window.location.hash;
		if (hash.length > 3) {
			$('html, body').stop().animate({
				scrollTop: ($(hash).offset().top - 82)
			}, 499, 'easeInOutExpo'); }
		$(".hamburger a").click(function(){
			$("div.menu").toggleClass("shown"); }); });
</script>
</body>
</html>
