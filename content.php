<div class="nav">

<div id="listen">
<p>
Tune In:</p>
<a href="scripts/playlist.pls"><img src="./public/images/icons/winamp.png" alt="Winamp" title="Winamp"/></a> 
<a href="scripts/playlist.m3u"><img src="./public/images/icons/vlc.png" alt="VLC" title="VLC Player"/>
</a>

</div>

<div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
	<div class="jp-type-playlist">
		<div class="jp-gui jp-interface">
			<div class="jp-volume-controls">
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>
			<div class="jp-controls-holder">
				<div class="jp-controls">
<li><a class="jp-play" href="#">Play</a><a class="jp-pause" href="#">Pause</a></li>
<li><a class="jp-stop" href="#">Stop</a></li>
<li><a class="jp-mute" href="#">Mute</a><a class="jp-unmute" href="#">Unmute</a></li>
<li><a class="jp-volume-bar" href="#">|----------|</a></li>
<li><a class="jp-volume-max" href="#">Max </a></li>
				</div>
			</div>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
</div>

<div class="main">
 <div id="content">
 <div class="title">Home</div>
<br>
 Home page 1</div> 
</div>

<?php
echo file_get_contents("footer.php");
?>