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
    background: url("home3.jpg");
    background-size: 1920px 1080px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>
  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.watch.js", "index.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.2.0.284"/>
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?57517943" id="pagesheet"/>
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
   <h2 align='left' > WELCOME </h2>
      <font color='black' size='2'><?php echo $_SESSION['email'];   ?></font>

 <form align='right' method='POST' action='logout.php'>
   <input type='submit' name='logout' value="Logout"/>
	


</form>	
<!--<font color='red' size='3'> <h2  align='right'style='margin-right:10px;margin-top:10px;'>
 <a href='logout.php'>Logout</a></h2></font>
-->
 
 
 
  <div class="rounded-corners clearfix" id="page"><!-- column -->
   <div class="clearfix colelem" id="pu271-4"><!-- group -->
    <div class="clearfix grpelem" id="u271-4"><!-- content -->
     <p>INDIAN</p>
    </div>
    <div class="clip_frame grpelem" id="u265"><!-- image -->
     <img class="block" id="u265_img" src="images/logo-r.gif" alt="" width="64" height="72"/>
    </div>
    <div class="clearfix grpelem" id="u272-4"><!-- content -->
     <p>DEFENCE</p>
    </div>
   </div>
   <nav class="MenuBar clearfix pinned-colelem" id="menuu633"><!-- horizontal box -->
    <div class="MenuItemContainer clearfix grpelem" id="u641"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive gradient clearfix colelem" id="u644" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u645-4"><!-- content --><p>Home</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u634"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u635" href="army.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u636-4"><!-- content --><p>ARMY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u648"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u649" href="navy.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u650-4"><!-- content --><p>NAVY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u655"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u658" href="air-force.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u660-4"><!-- content --><p>AIR FORCE</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1249"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1250" href="vehicles.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1253-4"><!-- content --><p>VEHICLES</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u662"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u663" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u664-4"><!-- content --><p>ABOUT US</p></div></a>
    </div>
 <!-- <!--  <div class="MenuItemContainer clearfix grpelem" id="u2081"><!-- vertical box -->
    <!-- <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2082" href="register.php"><!-- horizontal box -->
	<!--<div class="MenuItemLabel NoWrap clearfix grpelem" id="u2085-4"><!-- content --><!--<p>REGISTER</p></div></a>
    <!--</div>-->
   </nav>
   <div class="clearfix colelem" id="pu283-3"><!-- group -->
    <div class="rgba-background clearfix grpelem" id="u283-3"><!-- content -->
     <p>&nbsp;</p>
    </div>
    <div class="clearfix grpelem" id="u284-4"><!-- content -->
     <p>The Indian Armed Forces (Devanagari: भारतीय सशस्त्र सेनाएं, Bhāratīya Saśastra Sēnāēn) are the military forces of the Republic of India. It consists of four professional uniformed services: the Indian Army, Indian Navy, Indian Air Force and Indian Coast Guard. Additionally, the Indian Armed Forces are supported by several paramilitary organizations [(Assam Rifles and Special Frontier Force) and various inter&#45;service institutions such as the Strategic Forces Command. The President of India is the Supreme Commander of the Indian Armed Forces. The Indian Armed Forces are under the management of the Ministry of Defence (MoD), which is led by the Union Cabinet Minister of Defense. With strength of over 1.3 million active personnel, it is world's 3rd largest military force and the largest standing volunteer army in the world.</p>
    </div>
   </div>
   <div class="SlideShowWidget clearfix colelem" id="slideshowu1135"><!-- none box -->
    <div class="popup_anchor" id="u1154popup">
     <div class="SlideShowContentPanel clearfix" id="u1154"><!-- stack box -->
      <div class="SSSlide clip_frame grpelem" id="u1155"><!-- image -->
       <img class="block ImageInclude" id="u1155_img" data-src="images/aircraft-carrier-ins-vikramaditya-indian-navy-crop-u1155.jpg" src="images/blank.gif" alt="" data-width="740" data-height="144"/>
      </div>
      <div class="SSSlide invi clip_frame grpelem" id="u1193"><!-- image -->
       <img class="block ImageInclude" id="u1193_img" data-src="images/ex%20vijayee%20bhava%20in%20progress%20(12)-701420-crop-u1193.jpg" src="images/blank.gif" alt="" data-width="740" data-height="144"/>
      </div>
      <div class="SSSlide invi clip_frame grpelem" id="u1202"><!-- image -->
       <img class="block ImageInclude" id="u1202_img" data-src="images/su_30_by_petervanstigt-d5d9xhi-crop-u1202.jpg" src="images/blank.gif" alt="" data-width="740" data-height="144"/>
      </div>
     </div>
    </div>
    <div class="popup_anchor" id="u1147popup">
     <div class="SlideShowCaptionPanel clearfix" id="u1147"><!-- stack box -->
      <div class="SSSlideCaption clearfix grpelem" id="u1148-4"><!-- content -->
       <p>Navy</p>
      </div>
      <div class="SSSlideCaption invi clearfix grpelem" id="u1199-4"><!-- content -->
       <p>Army</p>
      </div>
      <div class="SSSlideCaption invi clearfix grpelem" id="u1208-4"><!-- content -->
       <p>Air Force</p>
      </div>
     </div>
    </div>
    <div class="popup_anchor" id="u1146-4popup">
     <div class="SlideShowLabel SSSlideCount clearfix" id="u1146-4"><!-- content -->
      <p><span id="u1146">1 &#45; 3</span></p>
     </div>
    </div>
    <div class="popup_anchor" id="u1153-4popup">
     <div class="SSPreviousButton clearfix" id="u1153-4"><!-- content -->
      <p><span id="u1153">&lt;</span></p>
     </div>
    </div>
    <div class="popup_anchor" id="u1136-4popup">
     <div class="SSNextButton clearfix" id="u1136-4"><!-- content -->
      <p>&gt;</p>
     </div>
    </div>
   </div>
   <div class="verticalspacer"></div>
  </div>
  <!--[if lt IE 9]>
  <div class="preload_images">
   <img class="preload" src="images/u644-grad.png" alt=""/>
   <img class="preload" src="images/u635-r-grad.png" alt=""/>
   <img class="preload" src="images/u635-m-grad.png" alt=""/>
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
Muse.Utils.initWidget('#slideshowu1135', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:3500,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,elastic:'off',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false})); });/* #slideshowu1135 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
