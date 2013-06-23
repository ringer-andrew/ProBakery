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

<title>Professional Performance | Mobile Healthcare Solutions</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- CSS -->
<!-- Bootstrap --> <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap-2.3.2.min.css">

<!-- Anubis -->
<!-- Main Style --> <link rel="stylesheet" href="assets/lib/anubis/css/main.min.css">
<!-- Shortcodes --> <link rel="stylesheet" href="assets/lib/anubis/css/shortcodes.min.css">
<!-- Responsive --> <link rel="stylesheet" href="assets/lib/anubis/css/responsive.css">

<!-- Icons -->
<!-- Font Icons --> <link rel="stylesheet" href="assets/font/fonts.min.css">
<!-- Font Aesome --><link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.min.css">

<!-- LESS -->
<link rel="stylesheet/less" type="text/css" href="assets/less/main.less" />

<!-- LESS --> <script src="assets/lib/less-1.3.3.min.js"></script>

<!-- Font -->
<!-- Google Font --> <link rel="stylesheet" type="text/css" href="assets/font/fonts-google.min.css">

<!-- Scripts -->
<!-- Modernizr --> <script src="assets/lib/modernizr.custom.95163-2.6.2.min.js"></script>

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
<script src="assets/lib/jquery/jquery-2.0.2.min.js"></script> <!-- jQuery Core -->
<script src="assets/lib/bootstrap/js/bootstrap-2.3.2.min.js"></script> <!-- Bootstrap -->
<script src="assets/lib/jquery/plugins/jquery.superfish.min.js"></script> <!-- Superfish -->
<script src="assets/lib/jquery/plugins/jquery.supersubs.min.js"></script> <!-- Supersubs -->
<script src="assets/lib/plugins.min.js"></script> <!-- Contains: jQuery Easing, jQuery ScrollTo -->
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