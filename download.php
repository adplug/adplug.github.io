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

<h2 style="color:red">ATTENTION: Important update to the Winamp input
plugin release system!</h2>

<p style="color:red">All changes to these instructions are designated
in a red font (like this paragraph). Be sure to read them!</p>

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
<li>adplug*.zip - Precompiled binary (unoptimized) for DOS users
(PKZIP compressed)</li>
</ul>
</td></tr>
<tr><td>AdPlay/DOS</td>
<td><h2>AdPlay/DOS for MS-DOS:</h2>

<p>AdPlay/DOS is AdPlug's MS-DOS based frontend. Sporting an
exclusively programmed, highly configurable textmode interface, it
provides a convenient playback experience.</p>

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
<tr><td>AdPlug/Winamp</td>
<td><h2>AdPlug Winamp input plugin:</h2>

<p>The AdPlug Winamp plugin was the first available frontend for AdPlug and right now, it is the most
advanced frontend of them all. If you need more information about Winamp, please go to
<a href="http://www.winamp.com">www.winamp.com</a>.</p>

<p style="color:red">Since version 1.6 of the plugin, no binary
versions are distributed through SourceForge's File Release System!
This is because binary versions are now compiled including the latest
OPL2 emulator from the MAME distribution for the best emulation
quality. These later versions bear a non OSI compliant license and
thus cannot be distributed through SourceForge.</p>

<p style="color:red">Another website has been created however, where
these binary versions can be downloaded, until the license issues have
been resolved. If you want the binary versions, please go to:</p>

<a href="http://www.informatik.uni-oldenburg.de/~dyna/adplug/">
http://www.informatik.uni-oldenburg.de/~dyna/adplug/</a>

<p>The following file packages are available:</p>
<ul>
<li>in_adlib-*.zip - PKZIP compressed binary</li>
<li>in_adlib-*.exe - Win32 self-installing binary</li>
<li>in_adlib-*_source.zip - PKZIP compressed source</li>
<li>in_adlib-*.tar.gz - gzip compressed source</li>
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
<tr><td>Database</td>
<td><h2>Official AdPlug Database:</h2>

<p>The official AdPlug database is the authoritative source for AdPlug to get additional, essential
replay information about problematic files. Some file formats contain too few information about a
song for it to be correctly replayed by AdPlug. To counter this, the AdPlug database was created.</p>

<p>The official AdPlug database at one day should contain the information needed about all problematic
files. If you got a problematic file that's not covered in this database, please file a bug report
against the database and include either the problematic file itself or the corresponding database
entry.</p>

<p>The following file packages are available:</p>
<ul>
<li>adplug.db - uncompressed database file</li>
<li>adplugdb-*.tar.gz - gzip compressed database package</li>
</ul>
</td></tr>
</table>
</td></tr>

</table>
<?php virtual("footer.shtml"); ?>
</body>
</html>
