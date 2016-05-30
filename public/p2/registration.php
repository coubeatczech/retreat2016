<?php

	$formsubmitted = $_GET["formsubmitted"] === 'true';

	if ($_POST["q1"]) {
		$error_name = empty($_POST["name"]);
		$error_email = empty($_POST["email"]); 
		if (!$error_email && !$error_name) {
			// insert into db
			$newURL = strtok($_SERVER["REQUEST_URI"],'?') . "?formsubmitted=true";
			header ('Location: ' . $newURL);
			exit();
		} }

	$page = 'registration';
	include "header.php"; 
	echo ob_get_clean(); ?>

	<main class="min100 registration">
		<section class="red">
			<div class="center">
				<h4>Registrace</h4>
				<hr />
				<?php if (!$formsubmitted) { ?>
				<form method="POST">
					<div>
						<label class="top" for="name">Jméno a Příjmení</label>
						<input type="text" name="name" id="name" />
						<?php if ($error_name) { ?>
							<span class="error">Vyplň jméno</span>
						<?php } ?>
					</div>
					<div>
						<label class="top" for="email">E-mail</label>
						<input type="text" name="email" id="email" />
						<?php if ($error_email) { ?>
							<span class="error">Vyplň email</span>
						<?php } ?>
					</div>
					<div>
						<h6>Chcete si rezervovat židli na sezení během nauky?</h6>
						<p>V místě konání retreatu se bude sedět převážně na zemi. Je třeba si s sebou vzít vlastní polštářek na sezení. Rezervace židle je možná zde.</p>
						<ul>
							<li><input id="q11" type="radio" name="q1" value="no" checked /><label for="q11">Ne</label></li>
							<li><input id="q12" type="radio" name="q1" value="yes" /><label for="q12">Ano</label></li>
						</ul>
					</div>
					<div>
						<h6>Pokud přijedete na retreat s dětmi, budete mít zájem o babysitting?</h6>
						<p>Pokud máte zájem o babysitting pro více dětí než jedno, prosíme, uveďte to do prostoru pro poznámky na konci tohoto formuláře.</p>
						<ul>
							<li><input id="q21" type="radio" name="q2" value="no" checked /><label for="q21">Ne</label></li>
							<li><input id="q22" type="radio" name="q2" value="yes" /><label for="q22">Ano</label></li>
						</ul>
					</div>
					<div>
						<h6>Pokud si chcete objednat obědy přímo v místě konání retreatu, vyberte si některou z následujících možností.</h6>
						<p>Obědy budou zajištěny ve dnech 13. a 14. 8. (sobota a neděle), bude dostupná pouze vegetariánská varianta. Odhadovaná cena jednoho oběda je 150,- Kč. Objednávka je závazná.</p>
						<ul>
							<li><input id="q31" type="radio" name="q3" value="none" checked /><label for="q31">nemám zájem o obědy</label></li>
							<li><input id="q32" type="radio" name="q3" value="saturday" /><label for="q32">chci oběd v sobotu 13.8.</label></li>
							<li><input id="q33" type="radio" name="q3" value="sunday" /><label for="q33">chci oběd v neděli 14.8.</label></li>
							<li><input id="q34" type="radio" name="q3" value="both" /><label for="q34">chci oba obědy</label></li>
						</ul>
					</div>
					<div>
						<h6>Chci zaplatit:</h6>
						<ul>
							<li><input id="q52" type="radio" name="q5" value="1500" checked /><label for="q52">1500</label></li>
							<li><input id="q53" type="radio" name="q5" value="7500" /><label for="q53">7500</label></li>
							<li>
								<input id="q54" type="radio" name="q5" value="other" /><label for="q54">jinou částku:</label>
								<input type="text" name="amount" />
							</li>
						</ul>
						<h6>Metodou:</h6>
						<ul>
							<li><input checked id="q42" type="radio" name="q4" value="paypal" /><label for="q42">PayPal</label> </li>
							<li><input id="q41" type="radio" name="q4" value="wire" /><label for="q41">převodem</label></li>
							<li><input id="q43" type="radio" name="q4" value="cash" /><label for="q43">hotově</label> </li>
						</ul>
					</div>
					<div>
						<input type="submit" name="submit" value="Registrovat se" />
					</div>
				</form>
				<?php } else { ?>
					<p>Registracte úspěšná</p>
				<?php } ?>
			</div>
		</section>
	</main>

<?php 
	include "footer.php"; ?>
