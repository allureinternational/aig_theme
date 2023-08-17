<?php
$conbix_preloader = conbix_option('preloader', false);

if ($conbix_preloader ==  'yes') :	?>
	<div class="theme-loader">
		<div class="spinner">
			<div class="spinner-bounce one"></div>
			<div class="spinner-bounce two"></div>
			<div class="spinner-bounce three"></div>
		</div>
	</div>
<?php endif; ?>