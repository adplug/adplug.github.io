<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php require("config.php"); ?>

<html>
<?php $doctitle = "A free AdLib sound player library"; include("header.php"); ?>
<body>

<?php include("menu.php"); ?>

<table class="page">
<tr><td>
<a name="download"><h1>Download:</h1></a>

<p>To download AdPlug, please go to the
<a
href="http://sourceforge.net/project/showfiles.php?group_id=28079">download
page</a>. Be sure to read the following download instructions for your
architecture, at least once!</p>
</td></tr>

<tr><td>
<h1>Download instructions:</h1>

<p>On the download page, first locate your desired AdPlug module, then
select the version, you like to download.</p>

<p>There may be multiple files released with your selected
version. This is either just the same release packaged in different
archive formats, the respective binary or source package or a
specially packaged version of the binary or source package, for that
particular architecture only! You can spot the right archive for you
either by examining the filename or by looking at the following table,
which gives an overview of the available modules and file
releases.</p>

<table>
<tr><td><b>Module:</b></td><td><b>Description:</b></td></tr>
<tr><td>AdPlug core library</td>
<td><h2>AdPlug library source distribution for all architectures:</h2>

<p>You need this only if you like to write your own AdPlug frontend or
want/have to recompile any of the available frontends.</p>

<p>The following file packages are available:</p>
<ul>
<li>adplug-*.tar.bz2 - bzip2 compressed source</li>
<li>adplug-*.tar.gz - gzip compressed source</li>
<li>adplg*s.zip - Stripped-down source version for DOS users only
(PKZIP compressed)</li>
<li>adplug*.zip - Precompiled binary (w/ i586 optimization) for DOS
users (PKZIP compressed)</li>
</ul>
</td></tr>
<tr><td>AdPlay/DOS</td>
<td><h2>AdPlay/DOS for MS-DOS:</h2>

<p>AdPlay/DOS is AdPlug's MS-DOS based frontend. Sporting an exclusively programmed, highly configurable
textmode interface, it provides a convenient playback experience.</p>

<p>The following file packages are available:</p>
<ul>
<li>adplay*.zip - PKZIP compressed binary (i386 protected mode)</li>
<li>adply*s.zip - PKZIP compressed source</li>
<li>timer*.zip - Watcom C/C++ 11.x Timer Library (needed by
adply*s.zip)</li>
<li>window*.zip - Watcom C/C++ 11.x Textmode Window Classes (needed by
adply*s.zip)</li>
</ul>
</td></tr>
<tr><td>AdPlay/UNIX</td>
<td><h2>AdPlay/UNIX for UNIX compatible architectures:</h2>

<p>AdPlay/UNIX is a classic UNIX console frontend with all the usual
bells and whistles. It is proven to work well on many different
kinds of UNIX flavours.</p>

<p>The following file packages are available:</p>
<ul>
<li>adplay-*.tar.bz2 - bzip2 compressed source</li>
<li>adplay-*.tar.gz - gzip compressed source</li>
</ul>
</td></tr>
<tr><td>Winamp2 plugin</td>
<td><h2>AdPlug Winamp2 input plugin:</h2>

<p>The AdPlug Winamp2 plugin was the first available frontend for AdPlug and right now, it is the most
advanced frontend of them all. If you need more information about Winamp, please go to
<a href="http://www.winamp.com">www.winamp.com</a>.</p>

<p>The following file packages are available:</p>
<ul>
<li>in_adlib-*.zip - PKZIP compressed binary</li>
<li>in_adlib-*.exe - Win32 self-installing binary</li>
<li>in_adlib-*_source.zip - PKZIP compressed source</li>
</ul>
</td></tr>
<tr><td>AdPlug/XMMS</td>
<td><h2>AdPlug XMMS input plugin:</h2>

<p>AdPlug/XMMS is an XMMS input plugin. It supports playback of all
formats using AdPlug's OPL2 emulator only. If you need more
information about XMMS, please go to <a href="http://www.xmms.org">www.xmms.org</a>.</p>

<p>The following file packages are available:</p>
<ul>
<li>adplug-xmms-*.tar.bz2 - bzip2 compressed source</li>
<li>adplug-xmms-*.tar.gz - gzip compressed source</li>
</ul>
</td></tr>
</table>
</td></tr>

</table>
<?php virtual("footer.shtml"); ?>
</body>
</html>
