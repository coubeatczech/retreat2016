<?php 
	$page = "retreat";
	include "header.php"; 
	echo ob_get_clean (); ?>

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
				<span>|</span>
				<a href="<?php i("menu_lang_link_2"); ?>"><?php i("menu_lang_2"); ?></a>
			</div>
			<div class="hamburger">
				<a href="javascript://">Menu <i class="glyphicon glyphicon-menu-hamburger"></i></a>
			</div>
		</nav>
		<div class="stripe"></div>
		<div id="background1">
			<div id="background2">
				<div class="social-media">
					<a class="fb" href="<?php i("event_link"); ?>"></a>
					<a class="tw" href="<?php i("twitter_link"); ?>"></a>
				</div>
				<div id="header-part-1">
					<div id="header-text-1">
						<h3>
							<img src="<?php echo $img_path; ?>/trik_left.png" />
							<span><?php i("h1_top"); ?></span>
							<img src="<?php echo $img_path; ?>/trik_right.png" />
						</h3>
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
	<?php if ($lang == "cs") { ?>
		<div id="my-rein">
			<h3>Moje reinkarnace</h3>
			<p>U příležitosti návštěvy Čhögjala Namkhai Norbu v Praze odvysílala Česká televize výjimečný dokument Moje reinkarnace.</p>
			<strong>Repríza: ČT&nbsp;2, úterý 2.8, 23:55, ke shlédnutí <a href="http://www.ceskatelevize.cz/porady/11528430690-moje-reinkarnace/21638256199">online zde</a></strong>
			<span>❌</span>
		</div>
	<?php } ?>
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
		<?php if ($lang == "cs") { ?>
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
		<?php if ($lang != "cs") { ?>
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
		<?php if ($lang == "cs") { ?>
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
				<a target="_blank" href="https://goo.gl/maps/va8d4R7M8eJ2">
					<img src="<?php echo $img_path; ?>/pin.png" id="pin" class="mkcenter" />
				</a>
				<hr />
				<h6><?php i("venue_h6_portal"); ?></h6> <!-- portals -->
				<?php i("venue_p_portal"); ?>
				<hr />
				<h6><?php i("venue_h6_2"); ?></h6> <!-- housing near -->
				<p><?php i("venue_p2"); ?></p>
				<hr />
				<h6><?php i("venue_h6_3"); ?></h6> <!-- cheap housing -->
				<p><?php i("venue_p3"); ?></p>
				<strong class="h7"><?php i("venue_h7_1"); ?></strong> <!-- hostels -->
				<ul><?php i("venue_li_1"); ?></ul>
				<strong class="h7"><?php i("venue_h7_2"); ?></strong> <!-- camps -->
				<ul><?php i("venue_li_2"); ?></ul>
			</div>
		</section>
<!--
		<section id="media">
			<div class="center">
				<h4>Mejidální panteři</h4>
				<hr />
				<table>
					<tr>
						<td><img src="https://www.cocacola.co.uk/content/dam/GO/CokeZone/Common/global/logo/logodesktop/coca-cola-logo-260x260.png" /></td>
						<td><img src="https://www.cocacola.co.uk/content/dam/GO/CokeZone/Common/global/logo/logodesktop/coca-cola-logo-260x260.png" /></td>
						<td><img src="https://www.cocacola.co.uk/content/dam/GO/CokeZone/Common/global/logo/logodesktop/coca-cola-logo-260x260.png" /></td>
						<td><img src="https://www.cocacola.co.uk/content/dam/GO/CokeZone/Common/global/logo/logodesktop/coca-cola-logo-260x260.png" /></td>
					</tr>
					<tr>
						<td><img src="https://www.cocacola.co.uk/content/dam/GO/CokeZone/Common/global/logo/logodesktop/coca-cola-logo-260x260.png" /></td>
						<td><img src="https://www.cocacola.co.uk/content/dam/GO/CokeZone/Common/global/logo/logodesktop/coca-cola-logo-260x260.png" /></td>
						<td><img src="https://www.cocacola.co.uk/content/dam/GO/CokeZone/Common/global/logo/logodesktop/coca-cola-logo-260x260.png" /></td>
						<td><img src="https://www.cocacola.co.uk/content/dam/GO/CokeZone/Common/global/logo/logodesktop/coca-cola-logo-260x260.png" /></td>
					</tr>
				</table>
			</div>
		</section>
-->
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
								<input type="hidden" name="campaign_token" value="<?php i("campaign"); ?>" class="form-control" />
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
							<a href="<?php i("event_link"); ?>">
								<img src="<?php echo $img_path; ?>/FB-f-Logo__blue_50.png" />
							</a>
							<a class="twitter" href="<?php i("twitter_link"); ?>">
								<img src="<?php echo $img_path; ?>/twitter75.png" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</main>

<?php include "footer.php"; ?>
