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
    background: url("vehicles1.jpg");
    background-size: 1920px 900px;
    background-repeat: no-repeat;
    padding-top: 40px;
}


</style>


  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "jquery.watch.js", "jquery.musepolyfill.bgsize.js", "vehicles.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.2.0.284"/>
  <title>VEHICLES</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
  <link rel="stylesheet" type="text/css" href="css/vehicles.css?251735165" id="pagesheet"/>
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

 
 
<!-- <font color='red' size='3'> <h2  align='right'style='margin-right:10px;margin-top:10px;'>
 <a href='logout.php'>Logout</a></h2></font>
-->

  <div class="clearfix" id="page"><!-- group -->
   <nav class="MenuBar clearfix" id="menuu1923"><!-- horizontal box -->
    <div class="MenuItemContainer clearfix grpelem" id="u1959"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1960" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1962-4"><!-- content --><p>Home</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1931"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1934" href="army.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1935-4"><!-- content --><p>ARMY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1924"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1927" href="navy.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1928-4"><!-- content --><p>NAVY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1938"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1939" href="air-force.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1940-4"><!-- content --><p>AIR FORCE</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1952"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive gradient clearfix colelem" id="u1955" href="vehicles.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1958-4"><!-- content --><p>VEHICLES</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1945"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1946" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1949-4"><!-- content --><p>ABOUT US</p></div></a>
    </div>
  <!--  <div class="MenuItemContainer clearfix grpelem" id="u2039"><!-- vertical box -->
     <!--<a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2040" href="register.php"><!--<!-- horizontal box --><!--<div class="MenuItemLabel NoWrap clearfix grpelem" id="u2041-4"><!-- content --><!--<p>REGISTER</p></div></a>
    <!--</div>-->
   </nav>
   <a class="nonblock nontext museBGSize grpelem" id="u1616" href="armyvehicles.php"><!-- simple frame --></a>
   <div class="clearfix grpelem" id="ppu1921-4"><!-- column -->
    <div class="clearfix colelem" id="pu1921-4"><!-- group -->
     <div class="clearfix grpelem" id="u1921-4"><!-- content -->
      <p>INDIAN</p>
     </div>
     <div class="clip_frame grpelem" id="u1919"><!-- image -->
      <img class="block" id="u1919_img" src="images/logo-r.gif" alt="" width="64" height="72"/>
     </div>
     <div class="clearfix grpelem" id="u1922-4"><!-- content -->
      <p>DEFENCE</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu1618"><!-- group -->
     <a class="nonblock nontext museBGSize grpelem" id="u1618" href="navyvehicles.php"><!-- simple frame --></a>
     <a class="nonblock nontext museBGSize grpelem" id="u1619" href="airforcevehicles.php"><!-- simple frame --></a>
    </div>
   </div>
   <div class="verticalspacer"></div>
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
  <script src="scripts/jquery.musepolyfill.bgsize.js?84270510" type="text/javascript"></script>
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
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
