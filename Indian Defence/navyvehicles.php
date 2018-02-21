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
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.watch.js", "jquery.musepolyfill.bgsize.js", "navyvehicles.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.2.0.284"/>
  <title>NAVYVEHICLES</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
  <link rel="stylesheet" type="text/css" href="css/navyvehicles.css?228762923" id="pagesheet"/>
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
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu1770-4"><!-- group -->
     <div class="clearfix grpelem" id="u1770-4"><!-- content -->
      <p>INDIAN</p>
     </div>
     <div class="clip_frame grpelem" id="u1768"><!-- image -->
      <img class="block" id="u1768_img" src="images/logo-r.gif" alt="" width="64" height="72"/>
     </div>
     <div class="clearfix grpelem" id="u1771-4"><!-- content -->
      <p>DEFENCE</p>
     </div>
    </div>
    <nav class="MenuBar clearfix colelem" id="menuu1772"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u1773"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1774" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1775-4"><!-- content --><p>Home</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u1808"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1811" href="army.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1812-4"><!-- content --><p>ARMY</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u1801"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1802" href="navy.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1805-4"><!-- content --><p>NAVY</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u1780"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1781" href="air-force.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1784-4"><!-- content --><p>AIR FORCE</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u1787"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1790" href="vehicles.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1792-4"><!-- content --><p>VEHICLES</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u1794"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1797" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1799-4"><!-- content --><p>ABOUT US</p></div></a>
     </div>
     <!--<div class="MenuItemContainer clearfix grpelem" id="u2053"><!-- vertical box -->
     <!-- <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2056" href="register.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2059-4"><!-- content --><p>REGISTER</p></div></a>
     <!--</div>-->
    </nav>
    <div class="PamphletWidget clearfix colelem" id="pamphletu2367"><!-- none box -->
     <div class="popup_anchor" id="u2381popup">
      <div class="ContainerGroup clearfix" id="u2381"><!-- stack box -->
       <div class="Container clearfix grpelem" id="u2387"><!-- group -->
        <div class="clearfix grpelem" id="pu2437"><!-- column -->
         <div class="clip_frame colelem" id="u2437"><!-- image -->
          <img class="block" id="u2437_img" src="<?php mysql_connect("localhost","root","ankit");
mysql_select_db("users_db");
$query = "SELECT * FROM store WHERE id = 6";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
 echo $row['image'];?>" alt="" width="200" height="132"/>
         </div>
         <div class="clearfix colelem" id="u2447-4"><!-- content -->
          <p>INS Viraat</p>
         </div>
        </div>
        <div class="clearfix grpelem" id="pu2442"><!-- column -->
         <div class="clip_frame colelem" id="u2442"><!-- image -->
          <img class="block" id="u244_img" src="<?php mysql_connect("localhost","root","ankit");
mysql_select_db("users_db");
$query = "SELECT * FROM store WHERE id =11";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
 echo $row['image'];?>" alt="" width="200" height="133"/>
         </div>
         <div class="clearfix colelem" id="u2448-4"><!-- content -->
          <p>INS Vikramaditya</p>
         </div>
        </div>
       </div>
       <div class="Container invi clearfix grpelem" id="u2382"><!-- column -->
        <div class="clearfix colelem" id="ppu2449"><!-- group -->
         <div class="clearfix grpelem" id="pu2449"><!-- column -->
          <div class="clip_frame colelem" id="u2449"><!-- image -->
           <img class="block" id="u2449_img" src="images/pasted%20image%20200x107.jpg" alt="" width="200" height="107"/>
          </div>
          <div class="clearfix colelem" id="u2484-4"><!-- content -->
           <p>Kolkata class</p>
          </div>
         </div>
         <div class="clip_frame grpelem" id="u2454"><!-- image -->
          <img class="block" id="u2454_img" src="images/pasted%20image%20200x130.jpg" alt="" width="200" height="130"/>
         </div>
        </div>
        <div class="clearfix colelem" id="pu2459"><!-- group -->
         <div class="clip_frame grpelem" id="u2459"><!-- image -->
          <img class="block" id="u2459_img" src="images/pasted%20image%20200x137.jpg" alt="" width="200" height="137"/>
         </div>
         <div class="clearfix grpelem" id="pu2487-4"><!-- column -->
          <div class="clearfix colelem" id="u2487-4"><!-- content -->
           <p>Delhi class</p>
          </div>
          <div class="clip_frame colelem" id="u2464"><!-- image -->
           <img class="block" id="u2464_img" src="images/pasted%20image%20200x86.jpg" alt="" width="200" height="86"/>
          </div>
          <div class="clearfix colelem" id="u2488-4"><!-- content -->
           <p>Shivalik class</p>
          </div>
         </div>
        </div>
        <div class="clearfix colelem" id="ppu2485-4"><!-- group -->
         <div class="clearfix grpelem" id="pu2485-4"><!-- column -->
          <div class="clearfix colelem" id="u2485-4"><!-- content -->
           <p>Rajput class</p>
          </div>
          <div class="clip_frame colelem" id="u2469"><!-- image -->
           <img class="block" id="u2469_img" src="images/pasted%20image%20200x1332.jpg" alt="" width="200" height="133"/>
          </div>
         </div>
         <div class="clearfix grpelem" id="pu2474"><!-- column -->
          <div class="clip_frame colelem" id="u2474"><!-- image -->
           <img class="block" id="u2474_img" src="images/pasted%20image%20200x114.jpg" alt="" width="200" height="114"/>
          </div>
          <div class="clearfix colelem" id="u2489-4"><!-- content -->
           <p>Brahmaputra class</p>
          </div>
         </div>
        </div>
        <div class="clearfix colelem" id="pu2486-4"><!-- group -->
         <div class="clearfix grpelem" id="u2486-4"><!-- content -->
          <p>Talwar class</p>
         </div>
         <div class="clip_frame grpelem" id="u2479"><!-- image -->
          <img class="block" id="u2479_img" src="images/pasted%20image%20200x128.jpg" alt="" width="200" height="128"/>
         </div>
        </div>
        <div class="clearfix colelem" id="u2490-4"><!-- content -->
         <p>Godavari class</p>
        </div>
       </div>
       <div class="Container invi clearfix grpelem" id="u2392"><!-- column -->
        <div class="clearfix colelem" id="pu2491"><!-- group -->
         <div class="clip_frame grpelem" id="u2491"><!-- image -->
          <img class="block" id="u2491_img" src="images/pasted%20image%20200x1333.jpg" alt="" width="200" height="133"/>
         </div>
         <div class="clip_frame grpelem" id="u2496"><!-- image -->
          <img class="block" id="u2496_img" src="images/pasted%20image%20200x121.jpg" alt="" width="220" height="133"/>
         </div>
        </div>
        <div class="clearfix colelem" id="pu2516-4"><!-- group -->
         <div class="clearfix grpelem" id="u2516-4"><!-- content -->
          <p>INS Chakra</p>
         </div>
         <div class="clearfix grpelem" id="u2518-4"><!-- content -->
          <p>INS Arihant</p>
         </div>
        </div>
        <div class="clearfix colelem" id="pu2501"><!-- group -->
         <div class="clip_frame grpelem" id="u2501"><!-- image -->
          <img class="block" id="u2501_img"  alt="" width="200" height="130"/>
         </div>
         <div class="clip_frame grpelem" id="u2506"><!-- image -->
          <img class="block" id="u2506_img" src="<?php mysql_connect("localhost","root","ankit");
mysql_select_db("users_db");
$query = "SELECT * FROM store WHERE id =12";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
 echo $row['image'];?>" alt="" width="187" height="140"/>
         </div>
        </div>
        <div class="clearfix colelem" id="pu2517-4"><!-- group -->
         <div class="clearfix grpelem" id="u2517-4"><!-- content -->
          <p>Sindhughosh class</p>
         </div>
         <div class="clearfix grpelem" id="u2519-4"><!-- content -->
          <p>Shishumar class</p>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="ThumbGroup clearfix grpelem" id="u2368"><!-- none box -->
      <div class="popup_anchor">
       <div class="Thumb popup_element clearfix" id="u2369"><!-- group -->
        <div class="clearfix grpelem" id="u2370-4"><!-- content -->
         <p>Aircraft Carriers</p>
        </div>
       </div>
      </div>
      <div class="popup_anchor">
       <div class="Thumb popup_element clearfix" id="u2373"><!-- group -->
        <div class="clearfix grpelem" id="u2374-4"><!-- content -->
         <p>Destroyers &amp; Frigates</p>
        </div>
       </div>
      </div>
      <div class="popup_anchor">
       <div class="Thumb popup_element clearfix" id="u2371"><!-- group -->
        <div class="clearfix grpelem" id="u2372-4"><!-- content -->
         <p>Submarines</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer"></div>
   </div>
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
Muse.Utils.initWidget('#pamphletu2367', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false}); });/* #pamphletu2367 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
