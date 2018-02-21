<?php
SESSION_START();

if(!$_SESSION['email'])
{
	header("location: login6.php");
}
	
	mysql_connect("localhost","root","ankit");
mysql_select_db("users_db");
$query = "SELECT * FROM data WHERE id = 4";
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
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "webpro.js", "musewpdisclosure.js", "jquery.watch.js", "navy.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.2.0.284"/>
  <title>NAVY</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
  <link rel="stylesheet" type="text/css" href="css/navy.css?4174539133" id="pagesheet"/>
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
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu718-4"><!-- group -->
     <div class="clearfix grpelem" id="u718-4"><!-- content -->
      <p>INDIAN</p>
     </div>
     <div class="clip_frame grpelem" id="u716"><!-- image -->
      <img class="block" id="u716_img" src="images/logo-r.gif" alt="" width="64" height="72"/>
     </div>
     <div class="clearfix grpelem" id="u719-4"><!-- content -->
      <p>DEFENCE</p>
     </div>
    </div>
    <nav class="MenuBar clearfix colelem" id="menuu720"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u721"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u724" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u727-4"><!-- content --><p>Home</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u749"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u750" href="army.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u751-4"><!-- content --><p>ARMY</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u735"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive gradient clearfix colelem" id="u738" href="navy.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u740-4"><!-- content --><p>NAVY</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u742"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u743" href="air-force.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u745-4"><!-- content --><p>AIR FORCE</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u1284"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u1287" href="vehicles.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1288-4"><!-- content --><p>VEHICLES</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u728"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u729" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u732-4"><!-- content --><p>ABOUT US</p></div></a>
     </div>
     
    </nav>
    <ul class="AccordionWidget clearfix colelem" id="accordionu1026"><!-- vertical box -->
     <li class="AccordionPanel clearfix colelem" id="u1035"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u1036-4"><!-- content --><p>INDIAN NAVY</p></div><div class="AccordionPanelContent clearfix colelem" id="u1037"><!-- group --><div class="clearfix grpelem" id="u1039-7"><!-- content --><p><?php echo $row['details']; ?></p></div></div></li>
     <li class="AccordionPanel clearfix colelem" id="u1027"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u1030-4"><!-- content --><p>PERSONNEL</p></div><div class="AccordionPanelContent disn clearfix colelem" id="u1028"><!-- group --><div class="clearfix grpelem" id="u1046-4"><!-- content --><p><?php echo $row['pdetails']; ?></p></div><div class="clearfix grpelem" id="pu1045-3"><!-- group --><div class="clearfix grpelem" id="u1045-3"><!-- content --><p>&nbsp;</p></div><div class="grpelem" id="u1122"><!-- custom html --><table class="wikitable">
<tr>
<th style="background:#ccc;">Commands</th>
<th style="background:#ccc;">HQ Location</th>
<th style="background:#ccc;">Current FOC-in-C</th>
</tr>
<tr>
<td><a href="/wiki/Western_Naval_Command" title="Western Naval Command">Western Naval Command</a></td>
<td><a href="/wiki/Mumbai" title="Mumbai">Mumbai</a></td>
<td>Vice Admiral Anil Chopra<sup id="cite_ref-76" class="reference"><a href="#cite_note-76"><span>[</span>76<span>]</span></a></sup></td>
</tr>
<tr>
<td><a href="/wiki/Eastern_Naval_Command" title="Eastern Naval Command">Eastern Naval Command</a></td>
<td><a href="/wiki/Visakhapatnam" title="Visakhapatnam">Visakhapatnam</a></td>
<td>Vice Admiral Satish Soni<sup id="cite_ref-77" class="reference"><a href="#cite_note-77"><span>[</span>77<span>]</span></a></sup></td>
</tr>
<tr>
<td><a href="/wiki/Southern_Naval_Command" title="Southern Naval Command">Southern Naval Command</a></td>
<td><a href="/wiki/Kochi" title="Kochi">Kochi</a></td>
<td>Vice Admiral Surinder Pal Singh Cheema<sup id="cite_ref-78" class="reference"><a href="#cite_note-78"><span>[</span>78<span>]</span></a></sup></td>
</tr>
</table></div></div></div></li>
     <li class="AccordionPanel clearfix colelem" id="u1063"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u1064-4"><!-- content --><p>SHIPS</p></div><div class="AccordionPanelContent disn clearfix colelem" id="u1065"><!-- column --><div class="clearfix colelem" id="u1129-16"><!-- content --><p><p><?php echo $row['equipment']; ?></p></div></div></li>
    </ul>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <!--[if lt IE 9]>
  <div class="preload_images">
   <img class="preload" src="images/u724-r-grad.png" alt=""/>
   <img class="preload" src="images/u724-m-grad.png" alt=""/>
   <img class="preload" src="images/u738-grad.png" alt=""/>
   <img class="preload" src="images/u743-r-grad.png" alt=""/>
   <img class="preload" src="images/u743-m-grad.png" alt=""/>
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
Muse.Utils.initWidget('#accordionu1026', function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu1026 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
