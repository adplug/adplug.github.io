<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php require("../config.php"); ?>

<html>
<?php $doctitle = "AdLib file formats reference library"; include("../header.php"); ?>
<body>

<?php include("../menu.php"); ?>

<table class="page">

<tr><td>
<h1>AdLib file formats reference library:</h1>
<p>This library is intended for the AdPlug player developer, wishing
to implement a new file format for AdPlug. It consists of file format
documentation, editor/player software, example files and anything
else useful for implementing player software for a particular AdLib
file format.</p>

<p>This reference library can of course also be used by anyone for any
other purpose. It would be nice though, if you would share your ideas
and implementations with us, so we can further enhance the AdPlug
player suite.</p>

<h1>Submitting new information to the library:</h1>
<p>We're always accepting additions and corrections to this
library. Please submit your information to <a
href="mailto:dn.tlp@gmx.net">Simon Peter</a>.</p>

</td></tr>

<tr><td>
<h1>AdLib file formats at a glance:</h1>
<p>This is the whole table of file formats, currently in the library.</p>

<?php
	include("legend.php");
	include("list.php");
?>

</td></tr>

</table>
<?php virtual("../footer.shtml"); ?>
</body>
</html>
