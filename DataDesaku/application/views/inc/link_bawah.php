<!-- Bootstrap Core JavaScript -->
 	<script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>

 	<!-- top-header and slider -->
 	<!-- here stars scrolling icon -->
 	<script type="text/javascript">
 		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //here ends scrolling icon -->
		<script src="<?php echo base_url()."assets/";?>js/minicart.min.js"></script>
		<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="<?php echo base_url()."assets/";?>js/skdslider.min.js"></script>
<link href="<?php echo base_url()."assets/";?>css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

		jQuery('#responsive').change(function(){
			$('#responsive_wrapper').width(jQuery(this).val());
		});

	});
</script>	
<!-- //main slider-banner --> 