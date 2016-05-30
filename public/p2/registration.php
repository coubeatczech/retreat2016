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
				<h4><?php i("form_register_h"); ?></h4>
				<hr />
				<?php if (!$formsubmitted) { ?>
				<form method="POST">
					<div>
						<label class="top" for="name"><?php i("form_name"); ?></label>
						<input type="text" name="name" id="name" />
						<?php if ($error_name) { ?>
							<span class="error"><?php i("form_name_error"); ?></span>
						<?php } ?>
					</div>
					<div>
						<label class="top" for="email"><?php i("form_email"); ?></label>
						<input type="text" name="email" id="email" />
						<?php if ($error_email) { ?>
							<span class="error"><?php i("form_email_error"); ?></span>
						<?php } ?>
					</div>
					<div>
						<h6><?php i("form_chair"); ?></h6>
						<p><?php i("form_chair_p"); ?></p>
						<ul>
							<li><input id="q11" type="radio" name="q1" value="no" checked /><label for="q11"><?php i("form_no"); ?></label></li>
							<li><input id="q12" type="radio" name="q1" value="yes" /><label for="q12"><?php i("form_yes"); ?></label></li>
						</ul>
					</div>
					<div>
						<h6><?php i("form_babysitting"); ?></h6>
						<p><?php i("form_babysitting_p"); ?></p>
						<ul>
							<li><input id="q21" type="radio" name="q2" value="no" checked /><label for="q21"><?php i("form_no"); ?></label></li>
							<li><input id="q22" type="radio" name="q2" value="yes" /><label for="q22"><?php i("form_yes"); ?></label></li>
						</ul>
					</div>
					<div>
						<h6><?php i("form_meal"); ?></h6>
						<p><?php i("form_meal_p"); ?></p>
						<ul>
							<li><input id="q31" type="radio" name="q3" value="none" checked /><label for="q31"><?php i("form_meal_option_1"); ?></label></li>
							<li><input id="q32" type="radio" name="q3" value="saturday" /><label for="q32"><?php i("form_meal_option_2"); ?></label></li>
							<li><input id="q33" type="radio" name="q3" value="sunday" /><label for="q33"><?php i("form_meal_option_3"); ?></label></li>
							<li><input id="q34" type="radio" name="q3" value="both" /><label for="q34"><?php i("form_meal_option_4"); ?></label></li>
						</ul>
					</div>
					<div>
						<h6><?php i("form_amount"); ?></h6>
						<p><?php i("form_amount_p"); ?></p>
						<label for="amount"><?php i("form_pre_amount"); ?></label><input id="amount" type="text" name="amount" />
						<h6><?php i("form_payment"); ?></h6>
						<p><?php i("form_payment_p"); ?></p>
						<ul>
							<li><input checked id="q42" type="radio" name="q4" value="paypal" /><label for="q42"><?php i("form_paypal"); ?></label> </li>
							<li><input id="q41" type="radio" name="q4" value="wire" /><label for="q41"><?php i("form_wire"); ?> </label></li>
							<li><input id="q43" type="radio" name="q4" value="cash" /><label for="q43"><?php i("form_cash"); ?></label> </li>
						</ul>
					</div>
					<div>
						<input type="submit" name="submit" value="<?php i("form_register"); ?>" />
					</div>
				</form>
				<?php } else { ?>
					<p><?php i("form_register_success"); ?></p>
				<?php } ?>
			</div>
		</section>
	</main>

<?php 
	include "footer.php"; ?>
