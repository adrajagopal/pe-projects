<?php include("../header.php");?>


<h1 class="hero-title xl-voice">Character counts.</h1>

<form action="">

	<h2 class="content-header large-voice">Count your characters.</h2>	

	<div class="field">
		<label class="medium-voice" for="">Your string</label>
		<input type="text" name="string" placeholder="Type or paste in..." value="<?=$characters?>">
	</div>
	
	<button type="submit">Count</button>


</form>


<?php include("../footer.php")?>