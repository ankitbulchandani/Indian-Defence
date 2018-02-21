<?php
SESSION_START();

if(!$_SESSION['email'])
{
	header("location: login6.php");
	
}




?>
<!DOCTYPE html>
<html class="html" lang="en-US">
 <head>
 <style type ="text/css">

input[type=text] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
border-radius: 5px;
}
input[type=text]:focus {border-color:#333; }

input[type=submit] {padding:5px 15px; background:#ccc; border:0 none;
cursor:pointer;
-webkit-border-radius: 5px;
border-radius: 5px; }

body {
    background: url("aboutus2.jpg");
    background-size: 1920px 1080px;
    background-repeat: no-repeat;
    padding-top: 40px;
}


</style>


  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.watch.js", "about-us.css"], "outOfDate":[]};
</script>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.2.0.284"/>
  <title>ABOUT US</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
  <link rel="stylesheet" type="text/css" href="css/about-us.css?4045312711" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>
 <form align='right' style='margin-right:10px;margin-top:10px;' method='POST' action='logout.php'>
   <input type='submit' name='logout' value="Logout"/>
	</form>
 
 
 <!--<font color='red' size='3'> <h2  align='right'style='margin-right:10px;margin-top:10px;'>
 <a href='logout.php'>Logout</a></h2></font>
-->

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu860-4"><!-- group -->
     <div class="clearfix grpelem" id="u860-4"><!-- content -->
      <p>INDIAN</p>
     </div>
     <div class="clip_frame grpelem" id="u858"><!-- image -->
      <img class="block" id="u858_img" src="images/logo-r.gif" alt="" width="64" height="72"/>
     </div>
     <div class="clearfix grpelem" id="u861-4"><!-- content -->
      <p>DEFENCE</p>
     </div>
    </div>
    <nav class="MenuBar clearfix pinned-colelem" id="menuu862"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u870"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u873" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u875-4"><!-- content --><p>Home</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u863"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u864" href="army.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u867-4"><!-- content --><p>ARMY</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u877"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u880" href="navy.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u881-4"><!-- content --><p>NAVY</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u891"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u892" href="air-force.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u894-4"><!-- content --><p>AIR FORCE</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u1277"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1278" href="vehicles.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1281-4"><!-- content --><p>VEHICLES</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u884"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive gradient clearfix colelem" id="u885" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u888-4"><!-- content --><p>ABOUT US</p></div></a>
     </div>
    <!-- <div class="MenuItemContainer clearfix grpelem" id="u2025"><!-- vertical box -->
      <!--<a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2026" href="register.php"><!-- horizontal box --><!--<div class="MenuItemLabel NoWrap clearfix grpelem" id="u2028-4"><!-- content --><!--<p>REGISTER</p></div></a>
     <!--</div>-->
    </nav>
    <div class="clearfix colelem" id="pu1110"><!-- group -->
     <div class="rgba-background clearfix grpelem" id="u1110"><!-- group -->
      <div class="clearfix grpelem" id="u1111-11"><!-- content -->
       <p>PROJECT MEMBERS</p>
       <p>&nbsp;</p>
       <p>Ankit Bulchandani&nbsp; 80</p>
       <p>Swarnim Sharma&nbsp;  84</p>

      </div>
     </div>
     <div class="rgba-background clearfix grpelem" id="u1113"><!-- group -->
      <div class="clearfix grpelem" id="u1114-7"><!-- content -->
       <p>PURPOSE</p>
       <p>&nbsp;</p>
       <p>To inform the reader about the Indian military and its various branches. This project aims to inform the user about the personnel of the military as well as the equipment they use and the role they play.</p>
      </div>
     </div>
    </div>
    <div class="SlideShowWidget clearfix colelem" id="slideshowu1211"><!-- none box -->
     <div class="popup_anchor" id="u1212popup">
      <div class="SlideShowContentPanel clearfix" id="u1212"><!-- stack box -->
       <div class="SSSlide clip_frame grpelem" id="u1215"><!-- image -->
        <img class="block ImageInclude" id="u1215_img" data-src="images/aircraft-carrier-ins-vikramaditya-indian-navy-crop-u1215.jpg" src="images/blank.gif" alt="" data-width="740" data-height="144"/>
       </div>
       <div class="SSSlide invi clip_frame grpelem" id="u1217"><!-- image -->
        <img class="block ImageInclude" id="u1217_img" data-src="images/ex%20vijayee%20bhava%20in%20progress%20(12)-701420-crop-u1217.jpg" src="images/blank.gif" alt="" data-width="740" data-height="144"/>
       </div>
       <div class="SSSlide invi clip_frame grpelem" id="u1213"><!-- image -->
        <img class="block ImageInclude" id="u1213_img" data-src="images/su_30_by_petervanstigt-d5d9xhi-crop-u1213.jpg" src="images/blank.gif" alt="" data-width="740" data-height="144"/>
       </div>
      </div>
     </div>
     <div class="popup_anchor" id="u1220popup">
      <div class="SlideShowCaptionPanel clearfix" id="u1220"><!-- stack box -->
       <div class="SSSlideCaption clearfix grpelem" id="u1223-4"><!-- content -->
        <p>Navy</p>
       </div>
       <div class="SSSlideCaption invi clearfix grpelem" id="u1221-4"><!-- content -->
        <p>Army</p>
       </div>
       <div class="SSSlideCaption invi clearfix grpelem" id="u1222-4"><!-- content -->
        <p>Air Force</p>
       </div>
      </div>
     </div>
     <div class="popup_anchor" id="u1233-4popup">
      <div class="SlideShowLabel SSSlideCount clearfix" id="u1233-4"><!-- content -->
       <p><span id="u1233">1 &#45; 3</span></p>
      </div>
     </div>
     <div class="popup_anchor" id="u1231-4popup">
      <div class="SSPreviousButton clearfix" id="u1231-4"><!-- content -->
       <p><span id="u1231">&lt;</span></p>
      </div>
     </div>
     <div class="popup_anchor" id="u1232-4popup">
      <div class="SSNextButton clearfix" id="u1232-4"><!-- content -->
       <p>&gt;</p>
      </div>
     </div>
    </div>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <!--[if lt IE 9]>
  <div class="preload_images">
   <img class="preload" src="images/u635-r-grad.png" alt=""/>
   <img class="preload" src="images/u635-m-grad.png" alt=""/>
   <img class="preload" src="images/u644-grad.png" alt=""/>
  </div>
  <![endif]-->
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?4050293121" type="text/javascript"></script>
  <script src="scripts/jquery.musemenu.js?4027237583" type="text/javascript"></script>
  <script src="scripts/webpro.js?140723489" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?4170221289" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?439400757" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?321465556" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?3946357177" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#slideshowu1211', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:3500,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,elastic:'off',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false})); });/* #slideshowu1211 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
