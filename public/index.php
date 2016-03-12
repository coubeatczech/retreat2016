<?php

	include "../database.php";

	function redirect($url, $permanent = false) {
    header('Location: ' . "http://" . $_SERVER['HTTP_HOST'] . $url, true, $permanent ? 301 : 302);
    exit(); }

	if (! isset($_GET["lang"])) {
		$user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		switch ($user_lang){
			case "cs":
				redirect('/cs/', false);
			default:
				redirect('/en/', false);
				break; } }

	$lang = $_GET["lang"];
	if ($lang != "en" && $lang != "cs") {
		die; }

	$mysqli = new mysqli("localhost", $db_user, $db_pass, $db_database);
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; }
	$result = $mysqli->query("select meta_key, meta_value from wp_postmeta where post_id = 3724 and meta_key like '" . $lang . "_%'");

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
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/creative.css" type="text/css">
	
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
                <a class="navbar-brand page-scroll" href="#page-top">Logo international dc</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li> <a class="page-scroll" href="#teacher">Učitel</a> </li>
                    <li> <a class="page-scroll" href="#program">Program</a> </li>
                    <li> <a class="page-scroll" href="#venue">Místo konání</a> </li>
                    <li> <a class="page-scroll" href="#fee">Vstupné</a> </li>
                    <li> <a class="page-scroll" href="#accomodation">Ubytování</a> </li>
                    <li> <a class="page-scroll" href="#contact">Kontakt</a> </li>
                    <li> <a class="page-scroll" href="https://www.dzogchen.cz/">Původní stránky >></a> </li>
                    <li> <a class="page-scroll" href="">English</a> </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1><?php i("h1"); ?></h1>
                <hr>
                <p>Tibetský mistr Chogyal namkhai norbu přijede po 15 letech do Prahy předávat nauku dzogčhenu a taky si tu zatancujeme a vůbec to bude príma</p>
                <hr>
                <h3>Nepřijďte o novinky, změny programu, atd.</h3>
                <form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
                    <!-- Email field (required) -->
                    <input type="text" class="input btn btn-default btn-xl" name="email" placeholder="Váš e-mail" />
                    <!-- Campaign token -->
                    <!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
                    <input type="hidden" name="campaign_token" value="pSCBw" />
                    <!-- Subscriber button -->
                    <input type="submit" href="#about" class="btn btn-primary btn-xl page-scroll" value="Dostávat info" />
                </form>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="teacher">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Living buddha teaches dzogchen around the globe</h2>
                    <hr class="light">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-3 text-center">
                  <h3>Chogyal Namkhai Norbu</h3>
                  Čhögjal Namkhai Norbu se narodil desátého dne, desátého měsíce roku Země a Tygra (8.12.1938) ve vesnici Geug, v okrese Čongra, v kraji Derge ve východním Tibetu. Jeho otec pocházel ze šlechtické rodiny a pracoval jako vládní úředník v Derge.
                </div>
                <div class="col-lg-3 text-center">
                  <img src="http://placehold.it/250x250">
                </div>
            </div>
        </div>
    </section>

    <section id="program">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Learn dzogchen teaching & have fun with joyful dances</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3">
                    <h4>12.8.2016</h4>
                    <p><strong>10:00</strong> Nauka</p>
                    <p><strong>17:00</strong> Khaita</p>
                </div>
                <div class="col-lg-3">
                    <h4>13.8.2016</h4>
                    <p><strong>10:00</strong> Nauka</p>
                    <p><strong>17:00</strong> Khaita</p>
                </div>
                <div class="col-lg-3">
                    <h4>14.8.2016</h4>
                    <p><strong>10:00</strong> Nauka</p>
                    <p><strong>17:00</strong> Khaita</p>
                </div>
                <div class="col-lg-3">
                    <h4>15.8.2016</h4>
                    <p><strong>15:00</strong> Nauka</p>
                    <p><strong>17:00</strong> Krátká ganapúdža</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-3 text-center">
                  <h3>About dzogchen</h3>
                  Slovo “dzogčhen” je z tibetštiny překládáno jako “úplná dokonalost”. Jeho význam odkazuje k pravé přirozenosti všech bytostí, k jejich “prvotnímu stavu”. Tento stav je od počátku svobodný a nezávislý na všech omezeních a podmíněno
                </div>
                <div class="col-lg-3 text-center">
                  <h3>About khaita</h3>
                  about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita about khaita
                </div>
            </div>
        </div>
    </section>

    <section id="venue" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Tibetan buddhism in heart of europe</h2>
                    <hr class="light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
										<p>Je to v hele královka. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent dapibus. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Sed ac dolor sit</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24088.72340978796!2d11.533485602929655!3d42.843908437901504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13291290407ce2a3%3A0x500ac86c73e194ac!2sAssociazione+Culturale+Comunita&#39;+Dzogchen!5e0!3m2!1scs!2scz!4v1457533766407" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="fee">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Help make the course possible</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                  <h3>Free</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent dapibus. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Sed ac dolor sit amet purus malesuada congue. </p>
                </div>
                <div class="col-lg-3 text-center">
                  <h3>Basic generosity</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent dapibus. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Sed ac dolor sit amet purus malesuada congue. </p>
                </div>
                <div class="col-lg-3 text-center">
                  <h3>Great generosity</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent dapibus. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Sed ac dolor sit amet purus malesuada congue. </p>
                </div>
                <div class="col-lg-3 text-center">
                  <h3>Custom generosity</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent dapibus. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Sed ac dolor sit amet purus malesuada congue. </p>
                </div>
            </div>
        </div>
    </section>

    <section id="accomodation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Rozbal si karimatku nebo buď v hotelu</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-lg-offset-3 text-center">
                  <h3>V hale</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent dapibus. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Sed ac dolor sit amet purus malesuada congue. </p>
                </div>
                <div class="col-lg-3">
                  <h3 class="text-center">V hotelu</h3>
                  <ul>
                    <li><a href="">Hotel 1</a></li>
                    <li><a href="">Hotel 1</a></li>
                    <li><a href="">Hotel 1</a></li>
                    <li><a href="">Hotel 1</a></li>
                    <li><a href="">Hotel 1</a></li>
                    <li><a href="">Hotel 1</a></li>
                    <li><a href="">Hotel 1</a></li>
                  </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontakt</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-lg-offset-3 text-center">
                  <h3>E-mail</h3>
                  <p><a href="mail@retreat">Mail@retreat</a></p>
                </div>
                <div class="col-lg-3 text-center">
                  <h3>Telefon</h3>
                  <p>+420 777 123 567</p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/jquery.fittext.js"></script>
    <script src="/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/creative.js"></script>

</body>

</html>
