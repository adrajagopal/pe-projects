<?php include("../../../header.php"); ?>

<?php
	$principal = 0;
	$rate = 0;
	$compoundFreq = 1;
	$years = 0;
	$display = "display-none";


	$message = "Please enter all terms of your investment.";
	$class= "warning";
	
	if (isset($_POST['submitted'])) {
		$principal = $_POST['principal'];
		$rate = $_POST['rate'];
		$compoundFreq = $_POST['compoundFreq'];
		$years = $_POST['years'];
		$display = "display-show";
	}

	$rateDecimal = $rate/100;
	$rOverN = $rateDecimal/$compoundFreq;
	$nTimesT = $compoundFreq*$years;
	$rateMultiplier = ((1 + $rOverN) ** ($nTimesT));
	$amountRaw = $principal * $rateMultiplier;
	$amountFormatted = "$" . number_format(ceil(($amountRaw*100))/100, 2, '.', ',');
?>

<section class="form-intro">
<inner-column>
	<h1 class="xl-voice">Compound Interest Calculator</h1>

	<p class="medium-voice">Simple interest is the interest earned on a principal amount, but compounding includes the money earned during prior periods. So if your interest compounds quarterly, compounding will measure how much the interest you earned last quarter will grow in future quarters.</p>

	<h2 class="large-voice">Enter your investment terms:</h2>
</inner-column>
</section>
	
<section class="form-compound-interest">
<inner-column>
	<?php include(getFile('modules/form-compound-interest/template.php'));?>
</inner-column>
</section>

<?php include(getFile("site-footer.php"));?>