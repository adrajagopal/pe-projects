<?php
	include('../head.php');
	include('../header.php');
?>



<h1 class="xxl-voice hero-title">hi there friend</h1>



</ul>


<?php
	
	$pmtOptions = [
		"high" => 0.25,
		"med" => 0.15,
		"low" => 0.05,
	];

	function amount($bal, $value) {
			echo $bal * $value;
		} ?>

<ul class="medium-voice content-body">
	
	<?php
		foreach ($pmtOptions as $option => $value) { ?>


		<li style="list-style-type: disc; margin-left: 20px;">
			If you go with a <?=$option?> interest rate (<?=$value*100?>%), your payment will be : $<?=amount(1250, $value)?>
		</li>
			
	<?php	} ?>
	


</ul>
































<?php
	include('../footer.php');
?>