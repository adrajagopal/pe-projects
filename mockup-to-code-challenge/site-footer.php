	</main>

<!-- Site footer-------------------------------------- -->
	
	<footer class="site-footer" aria-label="Site footer">
		<inner-column>
		
		<div class="footer-items">

		<div class="site-map">

			<nav class="product-menu" aria-label="Product menu">
				<h3>Product</h3>
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
				<h3>Information</h3>
				<ul>
					<li><a href="">Some link</a></li>
					<li><a href="">Some link here</a></li>
					<li><a href="">Some link</a></li>
				</ul>
			</nav>

			<nav class="company-menu" aria-label="Company menu">
				<h3>Company</h3>
				<ul>
					<li><a href="">Some link</a></li>
					<li><a href="">Some link here</a></li>
					<li><a href="">Some link</a></li>
					<li><a href="">Some link there</a></li>
				</ul>
			</nav>

			<div class="email-subscribe">
				<h3>Subscribe</h3>
				<?php include('components/email-subscribe/template.php');?>
				<p class="small-voice">Some paragraph describing what the email subscription means for you. What content it will include, exclude, how you can unsubscribe, and how we limit the use of your information.</p>
			</div>

		</div>

		<div class="secondary-footer">
			<a href="" class="footer-logo">
				<svg viewBox='0 0 10 3'>
					<rect width='10' height='3' />
				</svg>
			</a>
			
			<nav class="legal-menu" aria-label="Legal menu">
				<ul>
					<li><a href="">Terms</a></li>
					<li><a href="">Privacy</a></li>
					<li><a href="">Cookies</a></li>
				</ul>
			</nav>
			
			<nav class="socials-menu" aria-label="Social media links">
				<?php include('../socials.php');?>
			</nav>
		</div>

		</div>
		
		</inner-column>		
	</footer>


</body>
</html>