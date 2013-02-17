<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Client Data</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="author" content="Manfred Rosenboom"/>
<meta name="description" content=""/>
<meta name="keywords" content="HTML5"/>
<meta name="robots" content="index, follow">
<link rel="stylesheet" type="text/css" href="../includes/layout.css" media="all"/>
<link rel="shortcut icon" href="../images/favicon.ico">
<script type="text/javascript">
<!-- Begin
function getDate() {
d = new Date();
dstr  = "";
if (d.getYear() >= 2000)
  dstr += d.getYear();
else
  dstr += d.getYear() + 1900;
dstr += "-";

n = d.getMonth() + 1;
if (n < 10)
  dstr += "0";
dstr += n;
dstr += "-";

n = d.getDate();
if (n < 10)
  dstr += "0";
dstr += n;
dstr += "T";

n = d.getHours();
if (n < 10)
  dstr += "0";
dstr += n;
dstr += ":";

n = d.getMinutes();
if (n < 10)
  dstr += "0";
dstr += n;
dstr += ":";

n = d.getSeconds();
if (n < 10)
  dstr += "0";
dstr += n;

n = -1 * d.getTimezoneOffset();
if (n >= 0)
  dstr += "+";
else
 {
  dstr += "-";
  n = -1 *n;
 }
h = n / 60;
if (h < 10)
  dstr += "0";
dstr += h;

m = n % 60;
if (m < 10)
  dstr += "0";
dstr += m;

return dstr;
}
// End -->
</script>
</head>
<body>
<header class="nomobile">
<h1>Web Client Data</h1>
</header>

<section style="margin-top: 5px;">
<?php 
$agent         = $_SERVER['HTTP_USER_AGENT'];
$remoteAddress = $_SERVER['REMOTE_ADDR'];
$remoteHost    = gethostbyaddr($_SERVER['REMOTE_ADDR']);
?>

<table>
<tr><td><b>Agent:</b></td>      <td><? print($agent); ?></td></tr>
<tr><td><b>IP Address:</b></td> <td><? print($remoteAddress); ?></td></tr>
<tr><td><b>Host:</b></td>       <td><? print($remoteHost); ?></td></tr>
<script type="text/javascript">
<!-- Begin
if (screen != null) {
document.write("<tr><td><b>Screen</b>:</td><td>w: " + screen.width + " , h: " + screen.height + "</td></tr>");
}
d = new Date();
document.write("<tr><td><b>Agent Time</b>:</td><td>" + getDate() + "</td></tr>");
// End -->
</script>
<tr><td><b>Server Time:</b></td> <td><? print(date("Y-m-d\\TH:i:sO")); ?></td></tr>
</table>
</section>

<section>
<ul>
<li><a href="./index.php">Zur&uuml;ck</a></li>
</ul>
</section>

<footer>
<p>
Last updated: <?php echo(date("r", filemtime($_SERVER['SCRIPT_FILENAME']))); ?><br/>
<a href="../copyright.php">Copyright</a> Manfred Rosenboom<br/>
</p>
</footer>
</body>
</html>
