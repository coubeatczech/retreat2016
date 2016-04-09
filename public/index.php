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
	$result = $mysqli->query("select meta_key, meta_value from wp_postmeta where post_id = 4866 and meta_key like '" . $lang . "_%'");

	$results_array = array();
	while ($row = $result->fetch_assoc()) {
		$results_array[substr($row["meta_key"],3)] = $row["meta_value"]; }

	function i($key) {
		global $results_array;
		echo $results_array[$key]; }

?>



<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php i("title"); ?></title>

    <!-- Bootstrap Core CSS -->

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/retreat/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
<!--
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
-->
    <link rel="stylesheet" href="/retreat/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/retreat/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/retreat/css/creative.css" type="text/css">
	
		<style>
			input.input { cursor: text; }
		</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="/retreat/<?php i("menu_dc"); ?>" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li> <a class="page-scroll" href="#teacher"><?php i("menu_teacher"); ?></a> </li>
                    <li> <a class="page-scroll" href="#program"><?php i("menu_programme"); ?></a> </li>
                    <li> <a class="page-scroll" href="#fee"><?php i("menu_fee"); ?></a> </li>
                    <li> <a class="page-scroll" href="#venue"><?php i("menu_venue"); ?></a> </li>
                    <li> <a class="page-scroll" href="#contact"><?php i("menu_contact"); ?></a> </li>
                    <li> <a class="page-scroll" href="/aktuality/puvodni-homepage/"><?php i("menu_original_page"); ?></a> </li>
                    <li> <a class="page-scroll" href="<?php i("menu_lang_link"); ?>"><?php i("menu_lang"); ?></a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
				<div class="mobile-image" ></div>
				<div class="strips"></div>
        <div class="header-content">
            <div class="header-content-inner">
							<div class="inner">
									<h1><?php i("h1"); ?></h1>
									<div class="h1-p1"><?php i("h1_p1"); ?></div>
									<div class="h1-p2"><?php i("h1_p2"); ?></div>
                <hr>
                <p><?php i("h1_p"); ?></p>
							</div>
            </div>
        </div>
    </header>

    <section id="teacher" class="primary">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-heading"><span class="menu-repeat"><?php i("menu_teacher"); ?></span>

                    <hr>
<?php i("teacher_h"); ?></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
								<div class="col-lg-3">
									<?php i("teacher_col_1"); ?>
                </div>
                <div class="col-lg-3">
									<?php i("teacher_col_2"); ?>
                </div>
                <div class="col-lg-3">
									<?php i("teacher_col_4"); ?>
                </div>
                <div class="col-lg-3">
                  <img src="/retreat/cnn_250x250.jpg" />
                </div>
            </div>
        </div>
    </section>

    <section id="program">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-heading text-center">
<span class="menu-repeat">
<?php i("menu_programme"); ?>
</span>

                    <hr>
<?php i("programme_h2"); ?></h2>
										<p><?php i("programme_general"); ?></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                  <h3><?php i("programme_h3_dz"); ?></h3>
                  <p><?php i("programme_p_dz"); ?></p>
								</div>
                <div class="col-lg-3">
                  <h3><?php i("programme_h3_kh"); ?></h3>
                  <p><?php i("programme_p_kh"); ?></p>
								</div>
                <div class="col-lg-3">
                  <h3><?php i("programme_h3_vd"); ?></h3>
                  <p><?php i("programme_p_vd"); ?></p>
								</div>
                <div class="col-lg-3">
                  <h3><?php i("programme_h3_yy"); ?></h3>
                  <p><?php i("programme_p_yy"); ?></p>
								</div>
            </div>
        </div>
    </section>

    <section id="fee" class="primary">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-heading">

<span class="menu-repeat">
<?php i("menu_fee"); ?>
</span>

                    <hr>
<?php i("donation_h2"); ?></h2>
										<p><?php i("donation_p"); ?> </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
									<div class="col-sm-6">
										<h3><?php i("donation_h3_1"); ?></h3>
										<p><?php i("donation_p1"); ?> </p>
									</div>
									<div class="col-sm-6">
										<h3><?php i("donation_h3_2"); ?></h3>
										<p><?php i("donation_p2"); ?> </p>
									</div>
            </div>
        </div>
    </section>


    <section id="venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
<span class="menu-repeat">
<?php i("menu_venue"); ?>
</span>
                    <hr>
<?php i("venue_h2"); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-offset-3 col-md-6">
										<p><?php i("venue_p"); ?></p>
                </div>
                <div class="col-md-offset-3 col-md-3">
										<?php i("venue_col_1"); ?>
                </div>
                <div class="col-md-3">
										<?php i("venue_col_2"); ?>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="primary">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-heading"><?php i("contact_h2"); ?></h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
								<div class="col-md-3">
									<h3><?php i("contact_email_h3"); ?></h3>
<i class="fa fa-envelope fa-3x"></i>
									<p><a href="mailto:<?php i("contact_email") ?>"><?php i("contact_email") ?></a></p>
								</div>
								<div class="col-md-3">
<!--
									<h3><?php i("subscribe_h3"); ?></h3>
									<p> 

		<?php i("subscribe_p"); ?>
<form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post" class="form-inline subscribe">
	<div class="form-group">
		<input type="hidden" name="campaign_token" value="<?php i("campaign"); ?>" class="form-control" />
		<input class="form-control btn btn-default sub-input" type="text" name="email" placeholder="<?php i("subscribe_placeholder"); ?>"/>
		<input class="form-control btn btn-default"  type="submit" value="<?php i("subscribe_confirm"); ?>"/>
	</div>
</form>
</p>
-->
								</div>
								<div class="col-md-3">
									<h3><?php i("contact_organizer_h3"); ?></h3>
									<address><?php i("contact_organizer_p"); ?></address>
								</div>
								<div class="col-md-3">
									<h3><?php i("contact_social"); ?></h3>
									<p><a href="https://www.facebook.com/events/914385668683147/">
										<img src="/retreat/img/FB-f-Logo__blue_58.png" /></a></p>
								</div>
            </div>
        </div>
    </section>

    <script src="/retreat/js/jquery.js"></script>

    <script src="/retreat/js/bootstrap.min.js"></script>

    <script src="/retreat/js/jquery.easing.min.js"></script>
    <script src="/retreat/js/jquery.fittext.js"></script>
<!--    <script src="/retreat/js/wow.min.js"></script> -->

    <script src="/retreat/js/creative.js"></script>

</body>

</html>
