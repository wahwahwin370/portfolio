<?php ob_start();
?>
<!DOCTYPE html>
<!-- <html  oncontextmenu="return false;"> -->
<html >
<head>
<?php
	if(isset($_REQUEST['pg'])){
	$page = $_REQUEST['pg'];	
	} else {
	$page = NULL;
	}

	if($page<>NULL) {
	$seo_titile = str_replace("-", " ", $page);
	?>
	<title><?php echo ucwords($seo_titile); ?> | W.W.W</title>
	<meta name="description" content="<?php echo ucwords($seo_titile);?>, " />
	<?php }
	else{?>
	<title>W.W.W</title>
	<meta name="description" content="" />
	<?php } 
	?>
 
	<title>W.W.W</title>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ...icon... -->
	<meta property="og:image" content="/images/og-logo.jpg">
	 <link rel="icon" href="/images/fav-icon.png" type="image/x-icon"> 

	<!-- .......bootstrapt link....... -->
  	<link rel="stylesheet" href="/css/bootstrap.min.css">

  	<!-- ........font....... -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

	<!-- ....for scroll animation copy from smooth scroll page... -->
	<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

	<!-- ....animation for each element copy from animation on scroll page.... -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!-- .............animation for logo copy from animate.css............. -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	
	<!-- ..........menu........... -->
	<link rel="stylesheet" href="/css/mmenu.css">
    <link rel="stylesheet" href="/css/hamburgers.css">
    <link rel="stylesheet" href="/css/mmenu-style.css">



	<!-- .......css link........ -->
	<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>










