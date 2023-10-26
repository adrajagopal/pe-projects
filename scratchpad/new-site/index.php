<?php include('../../header.php');?>

<playground>
<main>

<hero>
	<inner-column class="skinny">

		<text-content>
			<h1 class="xxl-voice">Ad Rajagopal</h1>
			<h2 class="xl-voice">Frontend dev</h2>
		</text-content>
		<div class="portrait-placeholder"></div>

	</inner-column>
</hero>
<!--  -->

<about>
	<inner-column>
	
		<text-content>
			<h2 class="xl-voice">About me</h1>
		</text-content>

		<p class="large-voice">Which version of me do you want?</p>
		<p class="medium-voice">I contain multitudes...or something</p>
		<div class="toggler">
			<button>aggressively confident</button>
			<button>nervous perfectionist</button>
			<button>somewhere in the middle</button>
		</div>

		<aboutMeOutlet><!--inject JS here-->
			
			<p>
				I'm Ad, a frontend web developer. I'm a very organized person, so I like to lean into design system and reusable components.
			</p>

			<p>
				I'm looking for a highly collaborative role that values developer input during the design process. I get excited about products that help people live better -- making healthcare easier for patients, helping people get outside, and music.
			</p>

		</aboutMeOutlet>

	</inner-column>
</about>
<!--  -->


<hook>
	<inner-column>

		<text-content>
			<h2 class="xl-voice">Here's some interactive thing you can play with</h1>
		</text-content>


		<div class="formResult"></div>

		<form style="border: none;">
			
			<label for="">play with this</label>
			<input type="range">			
			<label for="">play with this</label>
			<input type="range">			
			<label for="">play with this</label>
			<input type="range">			
		</form>

		<text-content>
			<h3 class="large-voice">Check out more of this</h3>
			<button>Go do it</button>
		</text-content>

	</inner-column>
</hook>

<latest>
	<inner-column>

		<text-content>
			<h2 class="xl-voice">Here's the latest of my work</h1>
		</text-content>
	
		<ul class="article-list">
			<li>
				<div class="portrait-placeholder"></div>
			</li>
			<li>
				<div class="portrait-placeholder"></div>
			</li>
			<li>
				<div class="portrait-placeholder"></div>
			</li>
		</ul>

		<p><a href="#">See all my work</a></p>

	</inner-column>
</latest>
<!--  -->





</main>
</playground>
<?php include(getFile('site-footer.php'));?>