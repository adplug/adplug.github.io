<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php require("config.php"); ?>

<html>
<?php $doctitle = "A free AdLib sound player library"; include("header.php"); ?>
<body>

<?php include("menu.php"); ?>

<table class="page">
<tr><td>
<h1>Description:</h1>
<p>AdPlug is a free, cross-platform, hardware independent AdLib sound player library, mainly written in C++ and
released under the LGPL. AdPlug plays sound data, originally created for the AdLib (OPL2) audio board, directly
from its original format on top of an OPL2 emulator or by using the real hardware. No OPL chip is required for
playback.</p>

<p>AdPlug itself is just the backend to many different audio player frontends, which are also being developed
here. There are plugins for popular audio players, like Winamp and XMMS, as well as stand-alone players for
many different systems available.</p>
</td></tr>

<tr><td>
<a name="news"><h1>News:</h1></a>
<?php virtual("news.html"); ?>
</td></tr>

<tr><td>
<h1>Supported formats:</h1>
<p>AdPlug implements unique file replayers for each supported audio format in order to
achieve the best possible replay quality. Players marked as "preliminary" aren't considered
final by the author and may contain many replay issues, but are included for testing purposes
anyway. As of now, the following formats are supported:</p>

<ul>
<li>A2M: AdLib Tracker 2 by subz3ro</li>
<li>AMD: AMUSIC Adlib Tracker by Elyssis</li>
<li>BAM: Bob's Adlib Music Format</li>
<li>CFF: BoomTracker 4.0 by CUD</li>
<li>CMF: Creative Music File Format by Creative Technology</li>
<li>D00: EdLib by Vibrants</li>
<li>DFM: Digital-FM by R.Verhaag</li>
<li>DMO: Twin TrackPlayer by TwinTeam</li>
<li>DRO: DOSBox Raw OPL Format</li>
<li>DTM: DeFy Adlib Tracker by DeFy</li>
<li>HSC: HSC Adlib Composer by Hannes Seifert, HSC-Tracker by Electronic Rats</li>
<li>HSP: HSC Packed by Number Six / Aegis Corp.</li>
<li>IMF: Apogee IMF File Format</li>
<li>KSM: Ken Silverman's Music Format</li>
<li>LAA: LucasArts AdLib Audio File Format by LucasArts</li>
<li>LDS: LOUDNESS Sound System</li>
<li>M: Origin AdLib Music Format</li>
<li>MAD: Mlat Adlib Tracker</li>
<li>MID: MIDI Audio File Format</li>
<li>MKJ: MKJamz by M \ K Productions <b>(preliminary)</b></li>
<li>MTK: MPU-401 Trakker by SuBZeR0</li>
<li>RAD: Reality ADlib Tracker by Reality</li>
<li>RAW: RdosPlay RAW file format by RDOS</li>
<li>ROL: AdLib Visual Composer by AdLib Inc.</li>
<li>S3M: Screamtracker 3 by Future Crew</li>
<li>SA2: Surprise! Adlib Tracker 2 by Surprise! Productions</li>
<li>SAT: Surprise! Adlib Tracker by Surprise! Productions</li>
<li>SCI: Sierra's AdLib Audio File Format</li>
<li>SNG: SNGPlay by BUGSY of OBSESSION</li>
<li>SNG: Faust Music Creator by FAUST</li>
<li>SNG: Adlib Tracker 1.0 by TJ</li>
<li>XAD: eXotic ADlib Format by Riven the Mage</li>
<li>XMS: XMS-Tracker by MaDoKaN/E.S.G</li>
<li>XSM: eXtra Simple Music by Davey W Taylor</li>
</ul>

<p>Not all formats may be implemented on all platforms. This depends mainly on compiler
facilities. Details are published in the README file, included in the AdPlug library
distribution.</p>
</td></tr>

</table>
<?php virtual("footer.shtml"); ?>
</body>
</html>
