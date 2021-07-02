<!DOCTYPE html>
<html lang="en">
<head>
<title>m.marochess.de</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="utf-8"/>
<meta name="author" content="Manfred Rosenboom"/>
<meta name="description" content=""/>
<meta name="keywords" content="HTML5"/>
<meta name="robots" content="index, follow">
<link rel="stylesheet" type="text/css" href="./includes/layout.css" media="all"/>
<link rel="shortcut icon" href="./images/favicon.ico">
</head>
<body>
<header class="nomobile">
<h1>m.marochess.de</h1>
</header>

<nav>
<ul>
<li><a href="infosystems.php">Infosystems</a></li>
<li><a href="./misc.php">Miscellaneous</a></li>
<li><a href="./mobsoft.php">Mobile Software</a></li>
<li><a href="./tools/index.php">Tools</a></li>
</ul>
</nav>


<footer>
<p>
<span class="noprint nomobile">Validate <a href="https://validator.w3.org/check/referer" target="_blank">HTML</a> , Validate <a href="https://jigsaw.w3.org/css-validator/check/referer" target="_blank">CSS</a><br/></span>
Last updated: <?php echo(date("r", filemtime($_SERVER['SCRIPT_FILENAME']))); ?><br/>
<a href="./copyright.php">Copyright</a> Manfred Rosenboom<br/>
</p>
</footer>
</body>
</html>
