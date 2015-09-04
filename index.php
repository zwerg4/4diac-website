<html>
<head>
<?php include 'head.php';?>
<title>4DIAC</title>
</head>

<body>
<?php include 'header.html';?>

<section class="image">
	<h1>IEC 61499 Implementation for Distributed <br>Devices of the Next Generation</br></h1>
</section>

<section class="news">
<?php 
	$files = array_reverse(glob('./news/*.php'));
?>
	<a href="">
		<svg width="40px" height="40px">
			<polygon points="10,0 30,0 20,20 30,40 10,40 0,20 10,0" style="fill:rgba(1,34,105,1.0);fill-rule:evenodd;" />
			Sorry, your browser does not support inline SVG.
		</svg>
	</a>
	<div class="news-item"><span></span><a href="en_news.php#<?php echo basename($files[0],".php");?>"><?php $lines = file($files[0]); echo $lines[1];?></a></div>
  <div class="news-item"><span></span><a href="en_news.php#<?php echo basename($files[1],".php");?>"><?php $lines = file($files[1]); echo $lines[1];?></a></div>
	<div class="news-item"><span></span><a href="en_news.php#<?php echo basename($files[2],".php");?>"><?php $lines = file($files[2]); echo $lines[1];?></a></div>
	<a href="">
		<svg width="60px" height="60px">
			<polygon points="10,0 30,0 40,20 30,40 10,40 20,20 10,0" style="fill:rgba(1,34,105,1.0);fill-rule:evenodd;" />
			Sorry, your browser does not support inline SVG.
		</svg>
	</a>
</section>

<section class="content">
	<a href="en_rte.php">RTE
		<img height="100px" src="img/rte-button.png"/>
		<span>Runtime Environment</span></a>
	<a href="en_ide.php">IDE
		<img height="100px" src="img/ide-button.png"/>
		<span>Development Environment</span></a>
	<a href="en_lib.php">LIB
		<img height="100px" src="img/lib-button.png"/>
		<span>Library</span></a>
	<a href="en_sys.php">SYS
		<img height="100px" src="img/sys-button.png"/>
		<span>Systems</span></a>
</section>

<?php include 'footer.php';?>

</body>

</html> 
