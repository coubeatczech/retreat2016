<?php

	ob_start();
	
	include "/var/www/retreat2016/database.php";

	function redirect($url, $permanent = false) {
    header('Location: ' . "http://" . $_SERVER['HTTP_HOST'] . $url, true, $permanent ? 301 : 302);
    exit(); }

	if (! isset($_GET["lang"])) {
		$user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		switch ($user_lang){
			case "ru":
				redirect("/$page/ru/", false);
			case "cs":
				redirect("/$page/cs/", false);
			default:
				redirect("/$page/en/", false);
				break; } }

	$lang = $_GET["lang"];
	if ($lang != "en" && $lang != "cs" && $lang != "ru") {
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

	h4, h5, h6, label.top { font-family: "Libre Baskerville"; }
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
		z-index: 1001;
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
	@media (max-width: 1112px) {
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
	h6, label.top {
		font-size: 1.1em;
		font-weight: bolder;
		text-transform: uppercase; }
	h6 {
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
	section#donation input[type="image"] {
		margin: 0px auto;
		display: block; }
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
		text-align: left; 
		font-family: "Open Sans"; }
	section#venue ul li a { text-decoration: underline }
	section#venue img#pin { 
		margin: 40px auto; }
	section#venue p, section#venue ul {
		text-align: left;
		margin: 0px auto;
		max-width: 750px; }

	footer#contact hr { 
		max-width: 400px; 
		border-color: white; }
	footer address { 
		line-height: 1.3em;
		font-family: "Open Sans"; }
	footer i.glyphicon { font-size: 3em; display: block; }
	footer div.table-row div { padding: 0px 20px; }

	main.registration p {
		margin-top: 10px; }
	main.registration ul {
		margin-bottom: 40px }
	main.registration input[type="text"], main.registration input[type="submit"] {
		margin: 10px 0 40px 0; }
	main.registration input[type="text"] {
		max-width: 400px; }
	main.registration input[type="submit"] {
		max-width: 250px; }
	footer form input {
		margin-top: 20px;
		max-width: 300px; }
	footer form input, main.registration input[type="text"], main.registration input[type="submit"] {
		border: 0px;
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
		display: block;
		text-align: left;
		width: 100%; }
	footer form input[type="submit"], main.registration input[type="submit"] {
		background-color: #dcd9d9;
		padding-left: 0px;
		text-align: center; }
	footer form input[type="text"], main.registration input[type="text"] {
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
			padding: 0px; } }

	main.registration hr {
		border-color: #fff;
		margin-bottom: 40px;
		max-width: 100px; }
	main.registration section div.center {
		max-width: 600px; }
	main.registration h6 {
		margin-bottom: 0; }
	main.registration ul li label {
		font-family: "Open Sans";
		margin-left: 10px; }
	.min100 {
		background-color: #840c20;
		min-height: 100%; }
	main.registration input[name="amount"] {
		display: inline; }

</style>

<title><?php i("title"); ?></title>
</head>

<body>
