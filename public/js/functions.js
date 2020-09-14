var slideCurrent = 1;
var slideEnd = 3;
var isFixed = true;
var errorTimer = '';


function startLoad()
{
var timer = setInterval(function(){changeSlide()},5000);
//getNp();
//var timer = setInterval(function(){getNp()},10000);
audioPlay();
$(function() {
var slider  = $('#slider')
slider.slider({
range: "min",
min: 0,
max: 1,
step: 0.1,
value: 0.5,
slide: function(event, ui) {
var value  = slider.slider('value');
audioVol(value);
console.log(value);
}
})
});
}
         
//$("#audio").prop("currentTime",$("#audio").prop("currentTime")+5);
         
         function changeSlide()
         {
         var tabCtrl = document.getElementById('slideshow');
           var pageToActivate = document.getElementById("slide" + slideCurrent);
           for (var i = 0; i < tabCtrl.childNodes.length; i++) {
               var node = tabCtrl.childNodes[i];
               if (node.nodeType == 1) { 
                   node.style.display = (node == pageToActivate) ? 'block' : 'none';	
               }}
         if(slideCurrent == slideEnd)
         {
         slideCurrent = 1;
         }
         else
         {
         slideCurrent++;
         }
         }
         
function getNp() {
$.get('scripts/nowplaying.php', function(data) {
$("#title").html(data);
});
}
         
function getPage(page) {
$.get(page, function(data) {
$("#content").html(data);
});
}

function audioPlay(){
audio.addEventListener('canplay', function(){
if(!isFixed)
{
clearInterval(errorTimer);
isFixed = true;
}
$("#play").hide();
$("#stop").show();
});
audio.addEventListener('ended', audioDied);
audio.addEventListener('error', audioDied);
audio.addEventListener('stalled', audioDied);
$("#audio").trigger('load');
$("#audio").trigger('play');
audioVol('0.5');
}

function audioStop(){
$("#audio").trigger('pause');
$("#audio").prop("currentTime",0);
$("#stop").hide();
$("#play").show();
}

function audioPause(){
$("#audio").trigger('pause');
$("#stop").hide();
$("#play").show();
}

function audioVol(level) {
$("#audio").prop("volume",level);
}
         
function audioDied() {
audioStop();
isFixed = false;
errorTimer = setInterval(function(){
$("#audio").trigger('load');
$("#audio").trigger('play');
},5000);
}
$(document).ready(function () { 
startLoad();
$("#cform").submit(function(e) {
e.preventDefault();
$.ajax({
type: "POST",
url: "scripts/post-comment.php",
data: $("#cform").serialize()
}).done(function(data) {
alert(data);
});
});
$("#loginForm").submit(function(e) {
e.preventDefault();
$.ajax({
type: "POST",
url: "scripts/login.php",
data: $("#loginForm").serialize()
}).done(function(data) {
alert(data);
});
});
});

$(function() {
    var button = $('#loginButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#loginButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});
       
/*
     FILE ARCHIVED ON 19:03:23 Aug 03, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 00:32:21 Apr 22, 2020.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  xauthn.chkprivs: 0.058
  CDXLines.iter: 14.499 (3)
  exclusion.robots: 126.307
  esindex: 0.015
  RedisCDXSource: 13.978
  PetaboxLoader3.resolve: 43.632
  xauthn.identify: 125.93
  PetaboxLoader3.datanode: 65.418 (4)
  captures_list: 213.913
  LoadShardBlock: 55.885 (3)
  exclusion.robots.policy: 126.295
  load_resource: 73.805
*/