<?php 

include "config/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Kevin Orrego">
    <meta name="description" content="Desarrollador Web full stack">
    <meta name="keywords" content="Kevin, Kevin Orrego, desarrollador web, full stack, kevin, kevin orrego, programador"/>
    <meta name="google-site-verification" content="lSLunSnrPOLUnbPi1zmiazUUc8HnCF7IQVVQvvSecVs" />
    <meta name="copyright" content="Kevin Orrego" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script data-ad-client="ca-pub-8451882773801242" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<title><?=$appName?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" href="assets/media/<?=$icoName?>.png">
	<style type="text/css">
		.anim{
			animation-name: active;
			animation-duration: 2s;
			width: 100%
		}
		@keyframes active{
			from{
				width: 0px;
			}
			to{
				width: 100%;
			}
		}
	</style>
</head>
<body>
<div class= container>
    <div class="container">
		<div class="row">
			<div class="col-12 card" style="height: 40vh; margin-top: 10vh;">
				<div class="text-center">
					<h1 class="par" style="margin-top: 30px" id="par">Loaded</h1>
				</div>
				<div class="progress" style="height: 20px; margin-top: 90px;">
  					<div class="progress-bar anim" id="barra" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152770313-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-152770313-1');
</script>
<script type="text/javascript">
		setTimeout(function() {
			document.getElementById('par').innerHTML = "Loaded.";
		}, 500);
		setTimeout(function() {
			document.getElementById('par').innerHTML = "Loaded..";
		}, 1000);
		setTimeout(function() {
			document.getElementById('par').innerHTML = "Loaded...";
		}, 1500);
		setTimeout(function() {
			document.getElementById('par').innerHTML = "Listo";
			window.location.href = 'home';
		}, 2000);
</script>
</body>
</html>