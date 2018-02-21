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
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.watch.js", "jquery.musepolyfill.bgsize.js", "armyvehicles.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.2.0.284"/>
  <title>ARMYVEHICLES</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
  <link rel="stylesheet" type="text/css" href="css/armyvehicles.css?169883183" id="pagesheet"/>
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
   <div class="clearfix colelem" id="pu1718-4"><!-- group -->
    <div class="clearfix grpelem" id="u1718-4"><!-- content -->
     <p>INDIAN</p>
    </div>
    <div class="clip_frame grpelem" id="u1716"><!-- image -->
     <img class="block" id="u1716_img" src="images/logo-r.gif" alt="" width="64" height="72"/>
    </div>
    <div class="clearfix grpelem" id="u1719-4"><!-- content -->
     <p>DEFENCE</p>
    </div>
   </div>
   <nav class="MenuBar clearfix colelem" id="menuu1720"><!-- horizontal box -->
    <div class="MenuItemContainer clearfix grpelem" id="u1721"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1722" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1723-4"><!-- content --><p>Home</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1728"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1731" href="army.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1733-4"><!-- content --><p>ARMY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1749"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1752" href="navy.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1753-4"><!-- content --><p>NAVY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1735"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1738" href="air-force.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1739-4"><!-- content --><p>AIR FORCE</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1742"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1743" href="vehicles.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1745-4"><!-- content --><p>VEHICLES</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1756"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1759" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1761-4"><!-- content --><p>ABOUT US</p></div></a>
    </div>
   <!-- <div class="MenuItemContainer clearfix grpelem" id="u2032"><!-- vertical box -->
   <!--  <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2033" href="register.php"><!-- horizontal box --><!--<div class="MenuItemLabel NoWrap clearfix grpelem" id="u2035-4"><!-- content --><!--<p>REGISTER</p></div></a>
   <!-- </div>-->
   </nav>
   <div class="PamphletWidget clearfix colelem" id="pamphletu2327"><!-- none box -->
    <div class="popup_anchor" id="u2330popup">
     <div class="ContainerGroup clearfix" id="u2330"><!-- stack box -->
      <div class="Container clearfix grpelem" id="u2341"><!-- column -->
       <div class="clearfix colelem" id="ppu2661"><!-- group -->
        <div class="clearfix grpelem" id="pu2661"><!-- column -->
         <div class="clip_frame colelem" id="u2661"><!-- image -->
          <img class="block" id="u2661_img" src="images/pasted%20image%20150x113.jpg" alt="" width="150" height="113"/>
         </div>
         <div class="clearfix colelem" id="u2691-4"><!-- content -->
          <p>Arjun MBT</p>
         </div>
        </div>
        <div class="clearfix grpelem" id="pu2666"><!-- column -->
         <div class="clip_frame colelem" id="u2666"><!-- image -->
          <img class="block" id="u2666_img" src="images/pasted%20image%20150x96.jpg" alt="" width="150" height="96"/>
         </div>
         <div class="clearfix colelem" id="u2692-4"><!-- content -->
          <p>T&#45;90S &quot;Bhishma&quot;</p>
         </div>
        </div>
        <div class="clip_frame grpelem" id="u2671"><!-- image -->
         <img class="block" id="u2671_img" src="images/pasted%20image%20150x139.jpg" alt="" width="150" height="139"/>
        </div>
       </div>
       <div class="clearfix colelem" id="u2693-4"><!-- content -->
        <p>T&#45;72 Ajeya</p>
       </div>
       <div class="clearfix colelem" id="pu2676"><!-- group -->
        <div class="clip_frame grpelem" id="u2676"><!-- image -->
         <img class="block" id="u2676_img" src="images/pasted%20image%20150x1132.jpg" alt="" width="150" height="113"/>
        </div>
        <div class="clip_frame grpelem" id="u2681"><!-- image -->
         <img class="block" id="u2681_img" src="images/pasted%20image%20150x962.jpg" alt="" width="150" height="96"/>
        </div>
        <div class="clip_frame grpelem" id="u2686"><!-- image -->
         <img class="block" id="u2686_img" src="images/pasted%20image%20150x100.jpg" alt="" width="150" height="100"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2695-4"><!-- group -->
        <div class="clearfix grpelem" id="u2695-4"><!-- content -->
         <p>BMP&#45;1</p>
        </div>
        <div class="clearfix grpelem" id="u2696-4"><!-- content -->
         <p>BMD&#45;2</p>
        </div>
       </div>
       <div class="clearfix colelem" id="u2694-4"><!-- content -->
        <p>BMP&#45;2 &quot;Sarath&quot;</p>
       </div>
      </div>
      <div class="Container invi clearfix grpelem" id="u2336"><!-- column -->
       <div class="clearfix colelem" id="pu2707"><!-- group -->
        <div class="clip_frame grpelem" id="u2707"><!-- image -->
         <img class="block" id="u2707_img" src="images/pasted%20image%20240x160.jpg" alt="" width="184" height="123"/>
        </div>
        <div class="clip_frame grpelem" id="u2712"><!-- image -->
         <img class="block" id="u2712_img" src="images/pasted%20image%20300x141.jpg" alt="" width="273" height="128"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2727-4"><!-- group -->
        <div class="clearfix grpelem" id="u2727-4"><!-- content -->
         <p>DRDO 155 mm artillery gun</p>
        </div>
        <div class="clearfix grpelem" id="u2728-4"><!-- content -->
         <p>Smerch 9K58 MBRL</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2717"><!-- group -->
        <div class="clip_frame grpelem" id="u2717"><!-- image -->
         <img class="block" id="u2717_img" src="images/pasted%20image%20300x187.jpg" alt="" width="199" height="124"/>
        </div>
        <div class="clip_frame grpelem" id="u2722"><!-- image -->
         <img class="block" id="u2722_img" src="images/pasted%20image%20300x225.jpg" alt="" width="178" height="133"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2729-4"><!-- group -->
        <div class="clearfix grpelem" id="u2729-4"><!-- content -->
         <p>Pinaka MBRL</p>
        </div>
        <div class="clearfix grpelem" id="u2730-4"><!-- content -->
         <p>M&#45;46</p>
        </div>
       </div>
      </div>
      <div class="Container invi clearfix grpelem" id="u2331"><!-- column -->
       <div class="clearfix colelem" id="ppu2741"><!-- group -->
        <div class="clearfix grpelem" id="pu2741"><!-- column -->
         <div class="clip_frame colelem" id="u2741"><!-- image -->
          <img class="block" id="u2741_img" src="images/pasted%20image%20300x200.jpg" alt="" width="182" height="121"/>
         </div>
         <div class="clearfix colelem" id="u2771-4"><!-- content -->
          <p>Brahmos</p>
         </div>
        </div>
        <div class="clip_frame grpelem" id="u2746"><!-- image -->
         <img class="block" id="u2746_img" src="images/pasted%20image%20218x382.jpg" alt="" width="86" height="151"/>
        </div>
       </div>
       <div class="clearfix colelem" id="u2772-4"><!-- content -->
        <p>Prahaar</p>
       </div>
       <div class="clearfix colelem" id="pu2756"><!-- group -->
        <div class="clip_frame grpelem" id="u2756"><!-- image -->
         <img class="block" id="u2756_img" src="images/pasted%20image%20250x555.jpg" alt="" width="71" height="158"/>
        </div>
        <div class="clip_frame grpelem" id="u2751"><!-- image -->
         <img class="block" id="u2751_img" src="images/pasted%20image%20300x368.jpg" alt="" width="117" height="143"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2773-4"><!-- group -->
        <div class="clearfix grpelem" id="u2773-4"><!-- content -->
         <p>Dhanush</p>
        </div>
        <div class="clearfix grpelem" id="u2774-4"><!-- content -->
         <p>Prithvi</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2766"><!-- group -->
        <div class="clip_frame grpelem" id="u2766"><!-- image -->
         <img class="block" id="u2766_img" src="images/pasted%20image%20250x161.jpg" alt="" width="250" height="161"/>
        </div>
        <div class="clip_frame grpelem" id="u2761"><!-- image -->
         <img class="block" id="u2761_img" src="images/pasted%20image%20300x453.jpg" alt="" width="112" height="169"/>
        </div>
       </div>
       <div class="clearfix colelem" id="pu2776-4"><!-- group -->
        <div class="clearfix grpelem" id="u2776-4"><!-- content -->
         <p>Agni</p>
        </div>
        <div class="clearfix grpelem" id="u2775-4"><!-- content -->
         <p>Shaurya</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="ThumbGroup clearfix grpelem" id="u2350"><!-- none box -->
     <div class="popup_anchor">
      <div class="Thumb popup_element clearfix" id="u2353"><!-- group -->
       <div class="clearfix grpelem" id="u2354-4"><!-- content -->
        <p>Tanks</p>
       </div>
      </div>
     </div>
     <div class="popup_anchor">
      <div class="Thumb popup_element clearfix" id="u2355"><!-- group -->
       <div class="clearfix grpelem" id="u2356-4"><!-- content -->
        <p>Artillery</p>
       </div>
      </div>
     </div>
     <div class="popup_anchor">
      <div class="Thumb popup_element clearfix" id="u2351"><!-- group -->
       <div class="clearfix grpelem" id="u2352-4"><!-- content -->
        <p>Missile Systems</p>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="verticalspacer"></div>
  </div>
  <!--[if lt IE 9]>
  <div class="preload_images">
   <img class="preload" src="images/u1722-r-grad.png" alt=""/>
   <img class="preload" src="images/u1722-m-grad.png" alt=""/>
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
Muse.Utils.initWidget('#pamphletu2327', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false}); });/* #pamphletu2327 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
