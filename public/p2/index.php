<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />

<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic|Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

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

	html, body { 
		width: 100%;
		height: 100%; }

	strong {font-weight: bold;}

	h4, h5, h6 { font-family: "Libre Baskerville"; }
	header {
		background-image: url("/img/background.png");
		background-position: center 66px;
		background-size: cover;
		position: relative;
		height: 100%;
		width: 100%;
		font-family: 'Open Sans';
		background-color: #840c20; }
	header nav {
		color: white;
		height: 66px; }
	header nav div.menu {
		margin-top: 25px;
		float: right;
		margin-right: 132px; }
	header nav div a { 
		font-family: "Open Sans";
		color: white; 
		text-transform: uppercase;
		text-decoration: none; }
	header nav a#header-logo {
		margin-top: 7px;
		margin-left: 127px;
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
		background-image: url("/img/rinpoche_transparent.png");
		background-size: contain;
		background-repeat: no-repeat;
		background-position: left 0px; }

	#header-text-1, #header-text-2 { 
		font-family: "Libre Baskerville";
		color: white; }
	#header-text-1 {
		width: 50%;
		margin-left: 45%;
		text-align: center;
		margin-top: 100px; }
	#header-text-1 h1 { font-size: 3em; }
	#header-text-1 h3 { 
		text-transform: uppercase;
		font-size: 1.5em; }

	div#header h2 { font-size: 40px; }
	div#header h3 { font-size: 30px; }

	div#header { 
		background-image: url("/img/background.png");
		font-family: "Libre Baskerville";
		position: absolute;
		top: 20%;
		left: 45%;
		width: 50%;
		text-align: center;
		color: white; }
	div#header hr { width: 100px; }
	div.clear, span.clear { 
		display: block;
		clear: both; }
	div.stripe { 
		background-image: url("/img/stripe.png"); 
		background-repeat: repeat-x; 
		height: 16px; }
	section, footer {
		padding: 70px 0px; }
	h4 {
		font-size: 2em;
		font-weight: 600; }
	h5 {
		margin-top: 15px;
		margin-bottom: 40px;}
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
		background-color: #fcf1c9; }
	.red {
		color: white;
		background-color: #840c20; }
	
	@media (min-width: 780px) {
		.table-row {
			position: relative;
			right: 50px;
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
		display: block;
		margin: 0px auto; }

	p { 
		font-family: 'Open Sans';
		line-height: 1.3em; }
	
	section#teacher hr { width: 400px; }
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
		max-width: 350px; }
	@media (max-width:780px) {
		section#teacher .table-row div { 
			margin-bottom: 20px;
			float: left; } }
	section#teacher h6 {
		margin-top: 15px; }
	section#teacher div.table-row img {
		padding: 0px 20px;
		display: block;
		margin: 0px auto }

	section#programme hr { width: 200px; }
	section#programme p.standalone { 
		margin: 0px auto;
		width: 900px; }
	section#programme p.after-programme { margin-top: 35px; }
	section#programme p { text-align: center; }
	section#programme hr.after-programme { 
		width: 400px;
		margin: 20px auto; }
	section#programme ul li {
		font-family: 'Open Sans'; }

	section#activities .right-side {
		padding-left: 10px; }
	section#activities .left-side { 
		padding-right: 10px;
		text-align: right; }
	section#activities .table-row div { padding-bottom: 55px; }
	section#activities .table-row div h6 { margin: 50px 0px 0px 0px; }
	section#activities .table-row p { margin-top: 15px; }
	section#activities .video-left { position: relative; }
	section#activities .video-left iframe { 
		right: 0px;
		position: absolute; }
	section#activities hr { 
		position: relative;
		width: 110px; }
	section#activities .left-side hr { 
		float: right;
		right: -10px }
	section#activities .right-side hr { 
		float: left;
		left: -10px }

	section#donation p { 
		margin-top: 20px;
		text-align: center }
	section#donation p.before { 
		margin-top: inherit; }
	section#donation hr { width: 410px; border-color: white; }
	section#donation .table-row div { width: 400px; padding:0px 40px 0px 40px; }
	section#donation h6 { text-align: center; }

	section#venue h6 { 
		margin-top: 35px;
		text-align: center; }
	section#venue hr {
		margin-top: 40px;
		width: 50px; }
	section#venue p, section#venue strong {
		display: block;
		text-align: center; }
	section#venue strong.h7 { margin: 20px 0px; }
	section#venue ul li { 
		line-height: 1.3em;
		text-align: center; 
		font-family: "Open Sans"; }

	footer#contact hr { 
		width: 400px; 
		border-color: white; }
	footer address { 
		line-height: 1.3em;
		font-family: "Open Sans"; }
	footer i { font-size: 3em; }
	footer div.table-row div { padding: 0px 20px; }

</style>

<title></title>
</head>

<body>
	<header>
		<nav>
			<a id="header-logo" href="#"><img src="/img/idc_logo.png" /></a>
			<div class="menu">
				<a href="#">Učitel</a> |
				<a href="#">Program</a> |
				<a href="#">Podpořte akci</a> |
				<a href="#">Místo a ubytování</a> |
				<a href="#">Kontakt</a>
			</div>
		</nav>
		<div class="stripe"></div>
		<div id="rinpoche-picture">
			<div></div>
		</div>
		<div id="header-text-1">
			<h1>Příme uvedení<br/> do stavu poznání</h1>
			<h3>Chogjal namkhai norbu</h3>
		</div>
<!--
		<div id="header-text-2">
			<hr />
			<h2>12. - 14. 8. 2016</h2>
			<h3>Prmůmyslový palác, Praha</h3>
			<p>Nejvýznamnější současný mistr dzogčhenu Čhögjal Namkhai Norbu<br/> předá v Praze přímé uvedení do přirozenosti mysli<br/> a vzácné učení dzogčhenu.</p>
		</div>
-->
	</header>
	<main>
		<section id="teacher" class="gray">
			<div class="center">
				<h4>UČITEL</h4>
				<hr />
				<h5>Nejvýznamnější mistr dzogčhenu současnosti</h5>
				<p class="q">
					„Když jsem opustil Tibet a usadil se na západě, uvědomil jsem si, že učení dzogčhenu je obrovská pokladnice poznání, nezávislá na kulturním kontextu. Může nám pomoci žít lepší život jako lidským bytostem a zároveň podporuje přirozený duchovní a společenský rozvoj.“
					<em>Chogyal namkhai norbu</em>
				</p>
				<div class="table">
					<div class="table-row">
						<div class="text">
							<h6>O učiteli</h6>
							<p>
								Čhögjal Namkhai Norbu je v současné době nejvýznamnějším žijícím mistrem dzogčhenu. Dzogčhen (v překladu „velká dokonalost") je prastaré učení, které pomáhá vést lidi k přirozenému stavu nenásilí, soucitu a laskavosti.
							</p>
							<p class="marginup">
			Celý životopis Mistra najdete zde
							</p>
						</div>
						<div><img src="/img/rinpoche_small.png" /></div>
						<div class="text">
							<h6>Příme uvedení</h6>
							<p>
								Poselstvím, které Mistr posledních 50 let odevzdává je, že je možné žít harmonicky i uprostřed chaotického každodenního shonu dnešních dnů. Je možné žít životem, který je uvolněný, pokojný a prostoupený vzájemnou spoluprací.
							</p>
						</div>
						<span class="clear"></span>
					</div>
				</div>
			</div>
		</section>
		<section id="programme">
			<div class="center">
				<h4>PROGRAM</h4>
				<hr />
				<h5>Objevte učení dzogčhenu</h5>
				<p class="standalone">
					V rámci programu akce proběhnou následující aktivity: 
				</p>
				<div class="table">
					<div class="table-row">
						<div>
							<h6>Čtvrtek 11.8.</h6>
							<ul>
								<li> <strong>10:00 - 12:00</strong> - Radostné tance Khaita </li>
								<li> <strong>10:00 - 12:00</strong> - Radostné tance Khaita </li>
							</ul>
							<h6 class="non-first">Čtvrtek 11.8.</h6>
							<ul>
								<li> <strong>10:00 - 12:00</strong> - Radostné tance Khaita </li>
								<li> <strong>10:00 - 12:00</strong> - Radostné tance Khaita </li>
							</ul>
						</div>
						<div>
							<h6>Čtvrtek 11.8.</h6>
							<ul>
								<li> <strong>10:00 - 12:00</strong> - Radostné tance Khaita </li>
								<li> <strong>10:00 - 12:00</strong> - Radostné tance Khaita </li>
							</ul>
							<h6 class="non-first">Čtvrtek 11.8.</h6>
							<ul>
								<li> <strong>10:00 - 12:00</strong> - Radostné tance Khaita </li>
								<li> <strong>10:00 - 12:00</strong> - Radostné tance Khaita </li>
							</ul>
						</div>
					</div>
				</div>
				<p class="after-programme">
	Podrobný hodinový rozvrh bude publikován zde a na facebooku události, jakmile bude Mistrem upřesněn. 
				</p>
				<hr class="after-programme" />
				<p>
					<strong>Následující víkend 19. - 21. 8. předá Čhögjal Namkhai Norbu učení dzogčhenu v Bratislavě.</strong> Více informací najdete zde.
				</p>
			</div>
		</section>
		<section class="gray" id="activities">
			<div class="center">
				<div class="table">
					<div class="table-row">
						<div class="left-side">
							<h6>dzogčhen?</h6>
							<hr />
							<span class="clear"></span>
							<p>
			Slovo "dzogčhen" se dá z tibetštiny přeložit jako "velká dokonalost". Jeho význam odkazuje k pravé přirozenosti všech bytostí, která je od počátku svobodná a nezávislá na všech omezeních a podmíněnostech. Tuto svoji nepodmíněnou přirozenost však většina bytostí nerozpoznává. Učení dzogčhenu a spolupráce s mistrem dzogčhenu je způsobem, jak tuto přirozenost rozpoznat a aktualizovat ji ve svém každodením životě. 
							</p>
						</div>
						<div><iframe width="250" height="250" src="https://www.youtube.com/embed/DaJwuhs0ZPM" frameborder="0" allowfullscreen></iframe></div>
					</div>
					<div class="table-row">
						<div class="video-left"><iframe width="250" height="250" src="https://www.youtube.com/embed/DaJwuhs0ZPM" frameborder="0" allowfullscreen></iframe></div>
						<div class="right-side">
							<h6>jantrajóga?</h6>
							<hr />
							<span class="clear"></span>
							<p>
			Jantrajóga je důležitá metoda, která pomáhá sladit tělo, energii a mysl a zároveň nás uvádí do rovnováhy a zbavuje napětí. Skrze pozice, pohyby a jejich kombinaci s dechem a rytmem, koordinujeme a harmonizujeme svou energii. Tak může mysl dosáhnout stavu relaxace a původní rovnováhy, které jsou zásadní pro dosažení stavu kontemplace. Je tedy nesmírně cenným nástrojem nejen pro adepty jógy, ale pro všechny lidské bytosti. 
							</p>
						</div>
					</div>
					<div class="table-row">
						<div class="left-side">
							<h6>Tanec vadžry?</h6>
							<hr />
							<span class="clear"></span>
							<p>
			Tanec vadžry je prostředek k harmonizaci energie každého jednotlivce. Jestliže někdo hlouběji porozumí významu Tance, pak se pro něj Tanec stává metodou pro integraci tří existencí těla, řeči a mysli do poznání stavu kontemplace. Tato integrace je jedním z nejdůležitějších cílů praktikujícího učení dzogčhenu. Tanec se praktikuje na mandale, která reprezentuje soulad mezi vnitřní dimenzí jedince a vnější dimenzí světa. 
							</p>
						</div>
						<div><iframe width="250" height="250" src="https://www.youtube.com/embed/DaJwuhs0ZPM" frameborder="0" allowfullscreen></iframe></div>
					</div>
					<div class="table-row">
						<div class="video-left"><iframe width="250" height="250" src="https://www.youtube.com/embed/DaJwuhs0ZPM" frameborder="0" allowfullscreen></iframe></div>
						<div class="right-side">
							<h6>radostné tance Khaita?</h6>
							<hr />
							<span class="clear"></span>
							<p>
			Krátký výklad slova „khaita” je „harmonie v prostoru”. „Kha" znamená prostor nebo nebe. „Ta" označuje harmonii nebo melodii. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="donation" class="red">
			<div class="center">
				<h4>Podpořte akci!</h4>
				<hr />
				<h5>Pomozte uskutečnit tuto jedinečnou událost!</h5>
				<p class="before">Zatím jste darovali: 656 905 Kč (65,9%) z potřebných: 1 000 000 Kč. Děkujeme!</p>
				<div class="table">
					<div class="table-row">
						<div>
							<h6>Způsob financování akce</h6>
								<p>
		Jsme inspirováni vznešeným záměrem našeho Mistra zorganizovat učení podle principu štědrosti. Nebudeme tedy vybírat klasické vstupné a učení tak bude dostupné pro všechny zájemce bez rozdílu! 
								</p>
								<p>
		Aby toho bylo možné dosáhnout, jsou vřele vítány příspěvky od každého, kdo si přeje podpořit realizaci této jedinečné události v naší zemi. Výše příspěvku by měla vycházet z přání dárce, jeho možností a jeho pochopení hodnoty předávaného učení. Zásluhy plynoucí z takového daru jsou mimo veškerá omezení! 
								</p>
								<p>
		Pevně věříme, že náklady na celou akci budou pokryty skrze štědrost účastníků a sponzorů, které aktuálně hledáme!
								</p>
						</div>
						<div>
							<h6>Jak můžu přispět už nyní?</h6>
								<p>
		Neváhejte a pošlete váš dar přes PayPal nebo kreditní kartu pomocí tohoto darovacího tlačítka:
								</p>

								<p>
		PayPal – The safer, easier way to pay online. 
		Váš dar můžete rovněž poukázat na účet pořadatele akce, Mezinárodní komunity dzogčhenu v České Republice, č. účtu 2400378087 / 2010, VS 108108. Do zprávy pro příjemce uveďte „DAR CHNN" a vaše jméno. 

								</p>
								<p>
		Pokud máte záměr akci finančně podpořit a chcete podrobnosti projednat osobně, neváhejte kontaktovat zástupkyni týmu pro fundraising Mirku Šiškovou na donation@dzogchen.cz
								</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="venue" class="gray">
			<div class="center">
				<h4>Místo a ubytování</h4>
				<hr />
				<h5>Učení dzogčhenu v Praze</h5>
				<img src="/img/foto_palac.jpg" class="mkcenter" />
				<h6>Místo konání</h6>
				<p>Akce proběhne v reprezentativní budově Průmyslového paláce,
areál Výstaviště Praha Holešovice, 170 00, Praha 7. </p>
				<hr />
				<h6>Ubytování</h6>
				<p>Praha nabízí návštěvníkům velké množství ubytovacích možností, od stylových hotelů až po levné ubytovny a kempy.</p>
				<hr />
				<h6>Možnosti levného ubytování</h6>
				<p>Pokud chcete za ubytování spíše ušetřit, můžete využít následující možnosti:</p>
				<strong class="h7">Levné hostely</strong>
				<ul>
					<li> Budget apartment, Kubelikova 40, Praha </li>
					<li> Cown and Bard hostel, Bořivojova 102/758, Praha 3, tel. +420 222 716 45 </li>
					<li> Hostel a ubytovna Liben, areál Meteor Praha, tel. +420 776 646 33 </li>
					<li> Hostel Alia, ul. Vladimirova, Praha 4 Nusle, tel.+420 723 702 42 </li>
					<li> Hostel Cortina, Arbesovo namesti, Praha 5 Smichov, tel. +420 776 336 03 </li>
				</ul>
				<strong class="h7">Pražské kempy</strong>
				<ul>
					<li> Budget apartment, Kubelikova 40, Praha </li>
					<li> Cown and Bard hostel, Bořivojova 102/758, Praha 3, tel. +420 222 716 45 </li>
					<li> Hostel a ubytovna Liben, areál Meteor Praha, tel. +420 776 646 33 </li>
					<li> Hostel Alia, ul. Vladimirova, Praha 4 Nusle, tel.+420 723 702 42 </li>
					<li> Hostel Cortina, Arbesovo namesti, Praha 5 Smichov, tel. +420 776 336 03 </li>
				</ul>
			</div>
		</section>
		<footer id="contact" class="red">
			<div class="center">
				<h4>Kontakt</h4>
				<hr/>
				<div class="table">
					<div class="table-row">
						<div>
							<h6>E-mail</h6>
							<i class="glyphicon glyphicon-envelope"></i>
						</div>
						<div>
							<h6>Informace</h6>
							<p>Nechcete, aby vám unikly změny v programu? Odebírejte aktuální informace o retreatu!</p>
						</div>
						<div>
							<h6>Pořadatel</h6>
							<address>
								Mezinárodní komunita dzogčhenu Kunkyabling, z.s. 
								Opletalova 35
								11000 Praha 1
								IČ 26518562
							</address>
						</div>
						<div>
							<h6>Sledujete nás</h6>
							<img src="/img/FB-f-Logo__blue_58.png" />
						</div>
					</div>
				</div>
			</div>
		</footer>
	</main>
</body>
</html>
