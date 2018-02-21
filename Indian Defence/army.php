<?php
SESSION_START();

if(!$_SESSION['email'])
{
	header("location: login6.php");
	
}
mysql_connect("localhost","root","ankit");
mysql_select_db("users_db");
$query = "SELECT * FROM data WHERE id = 2";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
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
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "webpro.js", "musewpdisclosure.js", "jquery.watch.js", "army.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.2.0.284"/>
  <title>ARMY</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
  <link rel="stylesheet" type="text/css" href="css/army.css?470155638" id="pagesheet"/>
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
  <div class="clearfix" id="page"><!-- column -->
   <div class="clearfix colelem" id="pu671-4"><!-- group -->
    <div class="clearfix grpelem" id="u671-4"><!-- content -->
     <p>INDIAN</p>
    </div>
    <div class="clip_frame grpelem" id="u669"><!-- image -->
     <img class="block" id="u669_img" src="images/logo-r.gif" alt="" width="64" height="72"/>
    </div>
    <div class="clearfix grpelem" id="u672-4"><!-- content -->
     <p>DEFENCE</p>
    </div>
   </div>
   <nav class="MenuBar clearfix colelem" id="menuu673"><!-- horizontal box -->
    <div class="MenuItemContainer clearfix grpelem" id="u702"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u703" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u705-4"><!-- content --><p>Home</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u695"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive gradient clearfix colelem" id="u698" href="army.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u701-4"><!-- content --><p>ARMY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u681"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u684" href="navy.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u686-4"><!-- content --><p>NAVY</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u688"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u689" href="air-force.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u691-4"><!-- content --><p>AIR FORCE</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u1263"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1264" href="vehicles.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1267-4"><!-- content --><p>VEHICLES</p></div></a>
    </div>
    <div class="MenuItemContainer clearfix grpelem" id="u674"><!-- vertical box -->
     <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u677" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u680-4"><!-- content --><p>ABOUT US</p></div></a>
    </div>
   
   </nav>
   <ul class="AccordionWidget clearfix colelem" id="accordionu1088"><!-- vertical box -->
    <li class="AccordionPanel clearfix colelem" id="u1100"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u1103-4"><!-- content --><p>INDIAN ARMY</p></div><div class="AccordionPanelContent clearfix colelem" id="u1101"><!-- group --><div class="clearfix grpelem" id="u1115-10"><!-- content --><p><?php echo $row['details']; ?></p></div></div></li>
    <li class="AccordionPanel clearfix colelem" id="u1089"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u1093-4"><!-- content --><p>PERSONNEL</p></div><div class="AccordionPanelContent disn clearfix colelem" id="u1090"><!-- group --><div class="clearfix grpelem" id="u1132-4"><!-- content --><p><?php echo $row['pdetails']; ?></p></div><div class="clearfix grpelem" id="u1092-3"><!-- content --><p>&nbsp;</p></div></div></li>
    <li class="AccordionPanel clearfix colelem" id="u1097"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u1099-4"><!-- content --><p>EQUIPMENT</p></div><div class="AccordionPanelContent disn clearfix colelem" id="u1098"><!-- group --><div class="clearfix grpelem" id="u1133-7"><!-- content --><p><?php echo $row['equipment']; ?></p></div></div></li>
   </ul>
   <div class="verticalspacer"></div>
  </div>
  <!--[if lt IE 9]>
  <div class="preload_images">
   <img class="preload" src="images/u703-r-grad.png" alt=""/>
   <img class="preload" src="images/u703-m-grad.png" alt=""/>
   <img class="preload" src="images/u703-grad.png" alt=""/>
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
  <script src="scripts/musewpdisclosure.js?4078529368" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?3946357177" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu1088', function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu1088 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
