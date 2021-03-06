<?php

include_once( "inc/webpage.php" );


$webpage = new WebPage();
$webpage->head();

?>

<h1>Development</h1>

<div id="content">

<h2>General</h2>

<p>
Bombermaaan is written in C++ and hosted on SourceForge.net. Bombermaaan should run on all 32-bit MS Windows operating systems.
</p>

<p>
See the <a href="contact.php">contact page</a> for a list of the developers of Bombermaaan.
</p>

<h2>Links to SourceForge.net</h2>

<ul>
<li><a href="https://sourceforge.net/projects/bombermaaan/">Project page</a></li>
<li><a href="https://sourceforge.net/project/showfiles.php?group_id=81520">Download section</a></li>
<li><a href="http://bombermaaan.svn.sourceforge.net/viewvc/bombermaaan/">Subversion repository</a></li>
</ul>

<h2>Source code documentation</h2>

The <a href="/doxydoc/html/">source code documentation</a> is generated by <a href="http://www.doxygen.org/">Doxydoc</a>.<br />
There is also a <code>*_srcdoc.tar.gz</code> file available in the <a href="https://sourceforge.net/project/showfiles.php?group_id=81520&amp;package_id=293941">DevelTools section</a> if you'd like to browse the documentation offline.

<h2>Compile Bombermaaan by yourself</h2>

<p>
There is a <a href="http://bombermaaan.sourceforge.net/doxydoc/html/compileinstructions.html">how-to guide</a> you can use if you want to compile Bombermaaan by yourself.
</p>

<h2>Release steps</h2>

<p>
Compile instructions for Win32
</p>

<ul>
<li>Update version strings in file <code>src/Bombermaaan/Bombermaaan.rc</code> (<a href="http://bombermaaan.svn.sourceforge.net/viewvc/bombermaaan/trunk/src/Bombermaaan/Bombermaaan.rc?r1=529&amp;r2=528&amp;pathrev=529">example</a>)</li>
<li>Update <code>BOMBERMAAAN_VERSION_STRING</code> and <code>BOMBERMAAAN_BUILD_STRING</code> in CGame.cpp (<a href="http://bombermaaan.svn.sourceforge.net/viewvc/bombermaaan/trunk/src/Bombermaaan/CGame.cpp?r1=529&amp;r2=528&amp;pathrev=529">example</a>)</li>
<li>Set line <code>#define ENABLE_DEBUG_KEYS</code> in <code>CGame.cpp</code> to comment</li>
<li>Disable the debug log (<code>#define ENABLE_DEBUG_LOG</code> in <code>CGame.cpp</code>)</li>
<li>Disable the console window (<code>#define ENABLE_CONSOLE</code> in <code>CGame.cpp</code>)</li>
<li>Select configuration &quot;Release&quot; in the solution</li>
<li>Enable switch <code>#define USE_32_PIXELS_PER_BLOCK</code> in <code>STDAFX.H</code></li>
<li>Rebuild the solution</li>
<li>Rename file <code>Bombermaaan.exe</code> by <code>Bombermaaan_32.exe</code></li>
<li>Disable switch <code>#define USE_32_PIXELS_PER_BLOCK</code> in <code>STDAFX.H</code></li>
<li>Rebuild the solution</li>
<li>Rename file <code>Bombermaaan.exe</code> by <code>Bombermaaan_16.exe</code></li>
</ul>

<p>
Zip package for Win32
</p>

<ul>
<li>Update the file <code>CHANGELOG.txt</code></li>
<li>Call the <code>create-release.sh</code> script with parameter <kbd>--stable</kbd></li>
<li style="color: #aaa;">(done by script) Create a new folder <span title="For example, Bombermaaan_1.3_2008-05-07 (stable release) Bombermaaan_rev423_2008-05-07 (experimental release)"><code>Bombermaaan_<i>VERSION</i>_<i>RELEASE-DATE</i></code></span>.</li>
<li style="color: #aaa;">(done by script) Place the files <code>Bombermaaan_16.exe</code>, <code>Bombermaaan_32.exe</code>, <code>Bombermaaan.dll</code> and <code>FMOD.dll</code> in this directory</li>
<li style="color: #aaa;">(done by script) Add the readme file <code>Readme.html</code></li>
<li style="color: #aaa;">(done by script) Add the license file <code>COPYING.txt</code></li>
<li style="color: #aaa;">(done by script) Add the file <code>CHANGELOG.txt</code></li>
<li style="color: #aaa;">(done by script) Copy the directory with level files in the new folder</li>
<li style="color: #aaa;">(done by script) Zip the folder</li>
</ul>

<p>
Installer package for Win32
</p>

<ul>
<li>Update version strings (<a href="http://bombermaaan.svn.sourceforge.net/viewvc/bombermaaan/trunk/installer/InstallScript.iss?r1=627&amp;r2=626&amp;pathrev=627">example</a>, see also <a href="http://bombermaaan.svn.sourceforge.net/viewvc/bombermaaan/trunk/installer/InstallScript.iss?r1=555&amp;r2=611&amp;pathrev=627">version numbers</a>)</li>
<li>Generate installer .exe file using InnoSetup</li>
</ul>

<p>
Publishing
</p>

<ul>
<li>Upload the zip file to the SourceForge.net FTP server</li>
<li>Upload the installer file to the SourceForge.net FTP server</li>
<li>Upload the source files to the SourceForge.net FTP server</li>
<li>Upload the development files to the SourceForge.net FTP server</li>
<li>Add the files in the file release system</li>
<li>Update download page file web/download.php</li>
<li>Upload file <code>CHANGELOG.txt</code> to web space</li>
<li>Upload documentation files to web space</li>
<li>Change group name &quot;Next Release&quot; to &quot;Release <i>x.y</i>&quot; in feature request tracker</li>
<li>Create new group name &quot;Next Release&quot; in feature request tracker</li>
</ul>


</div>

<?php

$webpage->tail();

?>
