<div class="sidenav">
<div class="logo">TreeZoX</div>
<br><hr><br>

  <a class="link" href="javascript:getPage('main.php')">Home</a>
  <a class="link" href="javascript:getPage('chat.php')">Chat with us!</a>
  
<hr><br>
  
<div class="np">Now Playing: <p>Main - <span id="rap">LIVE</span></div>

<hr><br>
<div class="click">Click on a station to listen!</div>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			title:"TreeZoX - Main",
			mp3:"http://67.187.203.144:8800/radio.mp3"
		}
	], {
		swfPath: "../dist/jplayer",
		supplied: "oga, mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});

	$("#jplayer_inspector_1").jPlayerInspector({jPlayer:$("#jquery_jplayer_1")});
});
//]]>
</script>
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
				</div>
			</div>
		</div>
		<div class="jp-playlist">
			<ul>
				<li>&nbsp;</li>
			</ul>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
</div>