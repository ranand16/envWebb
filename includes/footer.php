<footer class="my_footer">
	<div class="footer-left">
		<h3>Company<span>logo</span></h3>
		<p class="footer-links">
			<a href="index.php">Home</a>
			·
			<a href="Process.php">Process</a>
			·
			<a href="Products.php">Products</a>
			·
			<a href="Packing.php">Packing</a>
			·
			<a href="contact.php">Contact</a>
			·
			<a href="About">About</a>
		</p>
		<p class="footer-company-name">The Ray &copy; 2017</p>
	</div>
	<div class="footer-center">
		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>21 Revolution Street</span> Paris, France</p>
		</div>
		<div>
			<i class="fa fa-phone"></i>
			<p>+1 555 123456</p>
		</div>
		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:theraycnw@gmail.com">theraycnw@gmail.com</a></p>
		</div>
	</div>
	<div class="footer-right">
		<p class="footer-company-about">
			<span>About the company</span>
			Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
		</p>
		<div class="footer-icons">
			<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>
	</div>
</footer>
<script type="text/javascript">

$(document).ready(function() {
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });

</script>
