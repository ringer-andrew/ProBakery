<?php
/**
 * @copyright     Copyright (c) Professional Performance Inc.
 * @link          http://professionalperformance.ca Professional Performance (tm) Project
 * @package       app.View.Layouts
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta name="description" content="Professional Performance | Mobile Healthcare Solutions" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>  

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- CSS -->
<!-- Bootstrap --> <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Revolution Slider --> <link href="assets/lib/revolution/css/settings.css" rel="stylesheet">
<!-- Main Style --> <link href="assets/lib/anubis/css/main.css" rel="stylesheet">
<!-- FancyBox --> <link href="assets/lib/fancybox/css/jquery.fancybox.css" rel="stylesheet">
<!-- Font Icons --> <link href="assets/font/fonts.css" rel="stylesheet">
<!-- Shortcodes --> <link href="assets/lib/anubis/css/shortcodes.css" rel="stylesheet">
<!-- Responsive --> <link href="assets/lib/anubis/css/responsive.css" rel="stylesheet">
<!-- Custom CSS --> <link href="assets/css/custom.css" rel="stylesheet">

<!-- Font -->
<!-- Google Font --> <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<!-- Scripts -->
<!-- Modernizr --> <script src="assets/lib/modernizr.js"></script>

</head>
<body>

<!-- Header -->
<?php echo $this->element('header'); ?>
<!-- /Header -->

<!-- Here's where I want my views to be displayed -->
<?php echo $this->fetch('content'); ?>

<!-- Footer -->
<?php echo $this->element('footer'); ?>
<!-- /Footer -->

<!-- Footer Scripts -->

<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script> <!-- Google Map API -->
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="assets/lib/revolution/js/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
<script src="assets/lib/revolution/js/jquery.themepunch.plugins.min.js"></script> <!-- Revolution Slider -->
<script src="assets/lib/jquery.superfish.min.js"></script> <!-- Superfish -->
<script src="assets/lib/jquery.supersubs.min.js"></script> <!-- Supersubs -->
<script src="assets/lib/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="assets/lib/fancybox/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="assets/lib/fancybox/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="assets/lib/jquery.tweet.js"></script> <!-- Tweet -->
<script src="assets/lib/jquery.flickr.min.js"></script> <!-- Flickr -->
<script src="assets/lib/plugins.js"></script> <!-- Contains: jQuery Easing, jQuery ScrollTo -->
<script src="assets/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

<!-- Analytics -->
<script type="text/javascript">
/*
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Replace Your Analytics Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 */
</script>
<!-- End Analytics -->

</body>
</html>