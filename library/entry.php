<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php require("../config.php"); ?>

<html>

<?php
	$doctitle = "AdLib file formats reference library";
	include("../header.php");
	$entry = file($_GET[file]);
?>

<body>
<?php include("../menu.php"); ?>
<table class="page">

<tr><td>
<h1>AdLib file formats reference library entry:</h1>

<?php include("legend.php"); ?>

<table width=100%>
<tr><td width=100%><h1><?php echo(trim($entry[3])); ?></h1></td>
<td><pre><?php echo(trim($entry[2])); ?></pre></td>
<td><pre><?php echo($entry[1]); ?></pre></td>
<td><a href="<?php echo(trim($entry[0])); ?>">Download</a></td></tr>
<tr><td colspan=4><?php

foreach($entry as $key => $desc) {
  if($key >= 4)
    echo($desc);
}

?></td></tr>
</table>

</td></tr>
</table>
<?php virtual("../footer.shtml"); ?>
</body>
</html>
