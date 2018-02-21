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

</style>


  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.watch.js", "jquery.musepolyfill.bgsize.js", "airforcevehicles.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.2.0.284"/>
  <title>AIRFORCEVEHICLES</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
  <link rel="stylesheet" type="text/css" href="css/airforcevehicles.css?3872020832" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body class="museBGSize">
 <form align='right' style='margin-right:10px;margin-top:10px;' method='POST' action='logout.php'>
   <input type='submit' name='logout' value="Logout"/>
	</form>
 
 
 
 
 <!--<font color='red' size='3'> <h2  align='right'style='margin-right:10px;margin-top:10px;'>
 <a href='logout.php'>Logout</a></h2></font>

-->
  <div class="clearfix" id="page"><!-- column -->
   <div class="clearfix colelem" id="pu1866-4"><!-- group -->
    <div class="clearfix grpelem" id="u1866-4"><!-- content -->
     <p>INDIAN</p>
    </div>
    <div class="clip_frame grpelem" id="u1864"><!-- image -->
     <img class="block" id="u1864_img" src="images/logo-r.gif" alt="" width="64" height="72"/>
    </div>
    <div class="clearfix grpelem" id="u1867-4"><!-- content -->
     <p>DEFENCE</p>
    </div>
   </div>
   <nav class="MenuBar clearfix colelem" id="menuu1868"><!-- horizontal box -->
    <div class="MenuItemContainer clearfix grpelem" id="u1897"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1898" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1901-4"><!-- content --><p>Home</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1904"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1905" href="army.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1908-4"><!-- content --><p>ARMY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1883"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1886" href="navy.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1887-4"><!-- content --><p>NAVY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1876"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1877" href="air-force.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1879-4"><!-- content --><p>AIR FORCE</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1869"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1872" href="vehicles.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1873-4"><!-- content --><p>VEHICLES</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1890"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1891" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1892-4"><!-- content --><p>ABOUT US</p></div></a>
    </div>
   <!-- <div class="MenuItemContainer clearfix grpelem" id="u2067"><!-- vertical box -->
    <!-- <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2068" href="register.php"><!-- horizontal box --><!--<div class="MenuItemLabel NoWrap clearfix grpelem" id="u2070-4"><!-- content --><!--<p>REGISTER</p></div></a>
    <!--</div>-->
   </nav>
   <div class="PamphletWidget clearfix colelem" id="pamphletu2401"><!-- none box -->
    <div class="popup_anchor" id="u2415popup">
     <div class="ContainerGroup clearfix" id="u2415"><!-- stack box -->
      <div class="Container clearfix grpelem" id="u2421"><!-- column -->
       <div class="clearfix colelem" id="pu2525"><!-- group -->
        <div class="clip_frame grpelem" id="u2525"><!-- image -->
         <img class="block" id="u2525_img" src="images/pasted%20image%20170x127.jpg" alt="" width="170" height="127"/>
        </div>
        <div class="clip_frame grpelem" id="u2530"><!-- image -->
         <img class="block" id="u2530_img" src="images/pasted%20image%20170x113.jpg" alt="" width="170" height="113"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2550-4"><!-- group -->
        <div class="clearfix grpelem" id="u2550-4"><!-- content -->
         <p>Sukhoi SU&#45;30MKI</p>
        </div>
        <div class="clearfix grpelem" id="u2553-4"><!-- content -->
         <p>Mikoyan MiG&#45;29</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2535"><!-- group -->
        <div class="clip_frame grpelem" id="u2535"><!-- image -->
         <img class="block" id="u2535_img" src="images/pasted%20image%20170x110.jpg" alt="" width="170" height="110"/>
        </div>
        <div class="clip_frame grpelem" id="u2540"><!-- image -->
         <img class="block" id="u2540_img" src="images/pasted%20image%20170x1272.jpg" alt="" width="170" height="127"/>
        </div>
       </div>
       <div class="clearfix colelem" id="u2551-4"><!-- content -->
        <p>HAL Tejas</p>
       </div>
       <div class="clearfix colelem" id="pu2545"><!-- group -->
        <div class="clip_frame grpelem" id="u2545"><!-- image -->
         <img class="block" id="u2545_img" src="images/pasted%20image%20170x128.jpg" alt="" width="170" height="128"/>
        </div>
        <div class="clearfix grpelem" id="u2554-4"><!-- content -->
         <p>Dassault Mirage 2000</p>
        </div>
       </div>
       <div class="clearfix colelem" id="u2552-4"><!-- content -->
        <p>Mikoyan&#45;Gurevich MiG&#45;21</p>
       </div>
      </div>
      <div class="Container invi clearfix grpelem" id="u2416"><!-- column -->
       <div class="clearfix colelem" id="pu2555"><!-- group -->
        <div class="clip_frame grpelem" id="u2555"><!-- image -->
         <img class="block" id="u2555_img" src="images/pasted%20image%20170x121.jpg" alt="" width="170" height="121"/>
        </div>
        <div class="clip_frame grpelem" id="u2560"><!-- image -->
         <img class="block" id="u2560_img" src="images/pasted%20image%20170x108.jpg" alt="" width="190" height="121"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2575-4"><!-- group -->
        <div class="clearfix grpelem" id="u2575-4"><!-- content -->
         <p>C&#45;17 Globemaster</p>
        </div>
        <div class="clearfix grpelem" id="u2576-4"><!-- content -->
         <p>Ilyushin Il&#45;76 Candid</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2565"><!-- group -->
        <div class="clip_frame grpelem" id="u2565"><!-- image -->
         <img class="block" id="u2565_img" src="images/pasted%20image%20170x107.jpg" alt="" width="170" height="107"/>
        </div>
        <div class="clip_frame grpelem" id="u2570"><!-- image -->
         <img class="block" id="u2570_img" src="images/pasted%20image%20170x1132.jpg" alt="" width="181" height="120"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2577-4"><!-- group -->
        <div class="clearfix grpelem" id="u2577-4"><!-- content -->
         <p>C&#45;130J Super Hercules</p>
        </div>
        <div class="clearfix grpelem" id="u2578-4"><!-- content -->
         <p>Antonov An&#45;32 Cline</p>
        </div>
       </div>
      </div>
      <div class="Container invi clearfix grpelem" id="u2426"><!-- column -->
       <div class="clearfix colelem" id="ppu2579"><!-- group -->
        <div class="clearfix grpelem" id="pu2579"><!-- column -->
         <div class="clip_frame colelem" id="u2579"><!-- image -->
          <img class="block" id="u2579_img" src="images/pasted%20image%20170x96.jpg" alt="" width="170" height="96"/>
         </div>
         <div class="clearfix colelem" id="u2614-4"><!-- content -->
          <p>HAL Rudra</p>
         </div>
        </div>
        <div class="clip_frame grpelem" id="u2584"><!-- image -->
         <img class="block" id="u2584_img" src="images/pasted%20image%20170x1133.jpg" alt="" width="170" height="113"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2589"><!-- group -->
        <div class="clip_frame grpelem" id="u2589"><!-- image -->
         <img class="block" id="u2589_img" src="images/pasted%20image%20170x1282.jpg" alt="" width="170" height="128"/>
        </div>
        <div class="clearfix grpelem" id="pu2615-4"><!-- column -->
         <div class="clearfix colelem" id="u2615-4"><!-- content -->
          <p>HAL Light Combat Helicopter</p>
         </div>
         <div class="clip_frame colelem" id="u2594"><!-- image -->
          <img class="block" id="u2594_img" src="images/pasted%20image%20170x98.jpg" alt="" width="177" height="102"/>
         </div>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2616-4"><!-- group -->
        <div class="clearfix grpelem" id="u2616-4"><!-- content -->
         <p>Mil Mi&#45;35 Hind&#45;E</p>
        </div>
        <div class="clearfix grpelem" id="u2617-4"><!-- content -->
         <p>Mi&#45;17</p>
        </div>
       </div>
       <div class="clearfix colelem" id="ppu2599"><!-- group -->
        <div class="clearfix grpelem" id="pu2599"><!-- column -->
         <div class="clip_frame colelem" id="u2599"><!-- image -->
          <img class="block" id="u2599_img" src="images/pasted%20image%20170x117.jpg" alt="" width="170" height="117"/>
         </div>
         <div class="clearfix colelem" id="u2618-4"><!-- content -->
          <p>HAL Dhruv</p>
         </div>
        </div>
        <div class="clip_frame grpelem" id="u2604"><!-- image -->
         <img class="block" id="u2604_img" src="images/pasted%20image%20170x1283.jpg" alt="" width="170" height="128"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2609"><!-- group -->
        <div class="clip_frame grpelem" id="u2609"><!-- image -->
         <img class="block" id="u2609_img" src="images/pasted%20image%20300x177.jpg" alt="" width="180" height="106"/>
        </div>
        <div class="clearfix grpelem" id="u2619-4"><!-- content -->
         <p>HAL Cheetah</p>
        </div>
       </div>
       <div class="clearfix colelem" id="u2620-4"><!-- content -->
        <p>HAL Chetak</p>
       </div>
      </div>
     </div>
    </div>
    <div class="ThumbGroup clearfix grpelem" id="u2402"><!-- none box -->
     <div class="popup_anchor">
      <div class="Thumb popup_element clearfix" id="u2403"><!-- group -->
       <div class="clearfix grpelem" id="u2404-4"><!-- content -->
        <p>Fighter Aircraft</p>
       </div>
      </div>
     </div>
     <div class="popup_anchor">
      <div class="Thumb popup_element clearfix" id="u2407"><!-- group -->
       <div class="clearfix grpelem" id="u2408-4"><!-- content -->
        <p>Transport Aircraft</p>
       </div>
      </div>
     </div>
     <div class="popup_anchor">
      <div class="Thumb popup_element clearfix" id="u2405"><!-- group -->
       <div class="clearfix grpelem" id="u2406-4"><!-- content -->
        <p>Helicopters</p>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="verticalspacer"></div>
  </div>
  <!--[if lt IE 9]>
  <div class="preload_images">
   <img class="preload" src="images/u1774-r-grad.png" alt=""/>
   <img class="preload" src="images/u1774-m-grad.png" alt=""/>
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
  <script src="scripts/jquery.musepolyfill.bgsize.js?84270510" type="text/javascript"></script>
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
Muse.Utils.initWidget('#pamphletu2401', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false}); });/* #pamphletu2401 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
