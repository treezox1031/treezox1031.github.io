<!doctype html>

<head>

<title>TreeZoX Network</title>

<LINK rel="shortcut icon" HREF="logo.ico">
<link rel="stylesheet" href="./public/css/home.css">

<script src="./public/js/functions.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://jplayer.org/latest/lib/jquery.min.js"></script>
<script type="text/javascript" src="http://jplayer.org/latest/dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="http://jplayer.org/latest/dist/add-on/jplayer.playlist.min.js"></script>

  <script type="text/javascript">//<![CDATA[


function radioTitle() {
 
// this is the URL of the json.xml file located on your server.
    var url = 'http://67.187.203.144:8800/json.xsl'; 
 
$.ajax({
   type: 'GET',
    url: url,
    async: true,
    jsonpCallback: 'parseMusic',
    contentType: "application/json",
    dataType: 'jsonp',
    success: function(json) {
        // this is the element we're updating that will hold the track title
       $('#rap').text(json['/radio.mp3']['title']);
	   $('#country').text(json['/country.mp3']['title']);
	   $('#metal').text(json['/metal.mp3']['title']); 
        // this is the element we're updating that will hold the listeners count
       $('#listeners').text(json['/radio']['listeners']); 
    },
    error: function(e) {
       console.log(e.message);
    }
});
 
}

$(document).ready(function(){

  setTimeout(function(){radioTitle();}, 2000);
  setInterval(function(){radioTitle();}, 15000); // we're going to update our html elements / player every 15 seconds

});



  //]]></script>

</head>
