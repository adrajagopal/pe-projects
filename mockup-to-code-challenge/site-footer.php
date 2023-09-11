	</main>

<!-- Site footer-------------------------------------- -->
	
	<footer class="site-footer" aria-label="Site footer">
		<inner-column>
		
		<div class="footer-items">

		<div class="site-map">

			<nav class="product-menu" aria-label="Product menu">
				<h3 class="medium-voice">Product</h3>
				<ul>
					<li><a href="">Some link</a></li>
					<li><a href="">Some link here</a></li>
					<li><a href="">Some link</a></li>
					<li><a href="">Some link there</a></li>
					<li><a href="">Some link</a></li>
					<li><a href="">Some link to click</a></li>
				</ul>
			</nav>

			<nav class="information-menu" aria-label="Information menu">
				<h3 class="medium-voice">Information</h3>
				<ul>
					<li><a href="">Some link</a></li>
					<li><a href="">Some link here</a></li>
					<li><a href="">Some link</a></li>
				</ul>
			</nav>

			<nav class="company-menu" aria-label="Company menu">
				<h3 class="medium-voice">Company</h3>
				<ul>
					<li><a href="">Some link</a></li>
					<li><a href="">Some link here</a></li>
					<li><a href="">Some link</a></li>
					<li><a href="">Some link there</a></li>
				</ul>
			</nav>

			<div class="email-subscribe">
				<h3 class="medium-voice">Subscribe</h3>
				<?php include('components/email-subscribe/template.php');?>
				<p class="small-voice">Some paragraph describing what the email subscription means for you. What content it will include, exclude, how you can unsubscribe, and how we limit the use of your information.</p>
			</div>

		</div>

		<div class="secondary-footer">
			<?php include(getFile('components/company-logo/template.php'));?>
			
			<nav class="legal-menu small-voice" aria-label="Legal menu">
				<ul>
					<li><a href="">Terms</a></li>
					<li><a href="">Privacy</a></li>
					<li><a href="">Cookies</a></li>
				</ul>
			</nav>
			
			<nav class="socials-menu" aria-label="Social media links">
				<a href="">
					<span class="icon-container fill-only"><?php include(getFile('images/linked-in.svg'));?></span>
				</a>
				<a href="">
					<span class="icon-container fill-only"><?php include(getFile('images/facebook.svg'));?></span>
				</a>
				<a href="">
					<span class="icon-container stroke-only"><?php include(getFile('images/git.svg'));?></span>
				</a>
			</nav>
		</div>

		</div>
		
		</inner-column>		
	</footer>


</body>
</html>