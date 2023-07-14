<?php
	include('../head.php');
	include('../header.php');
?>



<h1 class="xxl-voice hero-title">Explore your payment options.</h1>

<?php
	
	$pmtOptions = [
		"high" => 0.25,
		"med" => 0.15,
		"low" => 0.05,
	];

	$principal = 1250;

	function amount($principal, $value) {
			echo $principal * $value;
		} ?>

<h2 class="large-voice content-header">Looks like your principal is $<?=$principal?>.</h2>

<ul class="medium-voice content-body">
	
	<?php
		foreach ($pmtOptions as $option => $value) { ?>

		<li style="list-style-type: disc; margin-left: 20px;">
			If you go with a <?=$option?> rate (<?=$value*100?>%), your interest payment will be : $<?=amount($principal, $value)?>
		</li>
			
	<?php	} ?>

</ul>
































<?php
	include('../footer.php');
?>