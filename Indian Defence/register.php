<?php
SESSION_START();

if(!$_SESSION['email'])
{
	header("location: login6.php");
	
}




?>
<html class="html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "webpro.js", "jquery.watch.js", "jquery.musepolyfill.bgsize.js", "register.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.2.0.284"/>
  <title>REGISTER</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
  <link rel="stylesheet" type="text/css" href="css/register.css?397397898" id="pagesheet"/>
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
 
 <font color='red' size='3'> <h2  align='right'style='margin-right:10px;margin-top:10px;'>
 <a href='logout.php'>Logout</a></h2></font>


  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu2142-4"><!-- group -->
     <div class="clearfix grpelem" id="u2142-4"><!-- content -->
      <p>INDIAN</p>
     </div>
     <div class="clip_frame grpelem" id="u2140"><!-- image -->
      <img class="block" id="u2140_img" src="images/logo-r.gif" alt="" width="64" height="72"/>
     </div>
     <div class="clearfix grpelem" id="u2143-4"><!-- content -->
      <p>DEFENCE</p>
     </div>
    </div>
    <nav class="MenuBar clearfix colelem" id="menuu2144"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u2187"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2188" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2190-4"><!-- content --><p>Home</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u2173"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2176" href="army.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2177-4"><!-- content --><p>ARMY</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u2152"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2153" href="navy.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2156-4"><!-- content --><p>NAVY</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u2180"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2183" href="air-force.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2185-4"><!-- content --><p>AIR FORCE</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u2159"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2162" href="vehicles.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2165-4"><!-- content --><p>VEHICLES</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u2166"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u2167" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2169-4"><!-- content --><p>ABOUT US</p></div></a>
     </div>
    <!-- <div class="MenuItemContainer clearfix grpelem" id="u2145"><!-- vertical box -->
      <!--<a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive gradient clearfix colelem" id="u2148" href="register.php"><!-- horizontal box --><!--<div class="MenuItemLabel NoWrap clearfix grpelem" id="u2150-4"><!-- content --><!--<p>REGISTER</p></div></a>
     <!--</div>-->
    </nav>
    <div class="clearfix colelem" id="u2195"><!-- group -->
     <div class="clearfix grpelem" id="u2196-4"><!-- content -->
      <p>Send message to show your support to the indian military</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu2244"><!-- group -->
     <div class="rgba-background grpelem" id="u2244"><!-- simple frame --></div>
     <form class="form-grp clearfix grpelem" id="widgetu2245" method="post" enctype="multipart/form-data" action="scripts/form-u2245.php"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu2271" data-required="true"><!-- none box -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u2272-4" for="widgetu2271_input"><!-- content --><span class="actAsPara">Name:</span></label>
       <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2274-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu2271_input" name="custom_U2271" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu2271_prompt" for="widgetu2271_input"><span class="actAsPara">Enter Name</span></label></span>
       <div class="fld-message clearfix grpelem" id="u2273-4"><!-- content -->
        <p>Required</p>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu2258" data-required="true" data-type="email"><!-- none box -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u2261-4" for="widgetu2258_input"><!-- content --><span class="actAsPara">Email:</span></label>
       <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2260-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu2258_input" name="Email" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu2258_prompt" for="widgetu2258_input"><span class="actAsPara">Enter Email</span></label></span>
       <div class="fld-message clearfix grpelem" id="u2259-4"><!-- content -->
        <p>Required</p>
       </div>
      </div>
      <div class="clearfix grpelem" id="u2283-4"><!-- content -->
       <p>Submitting Form...</p>
      </div>
      <div class="clearfix grpelem" id="u2284-4"><!-- content -->
       <p>The server encountered an error.</p>
      </div>
      <div class="clearfix grpelem" id="u2285-4"><!-- content -->
       <p>Form received.</p>
      </div>
      <input class="submit-btn NoWrap grpelem" id="u2270-17" type="submit" value="" tabindex="4"/><!-- state-based BG images -->
      <div class="fld-grp clearfix grpelem" id="widgetu2275" data-required="true"><!-- none box -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u2278-4" for="widgetu2275_input"><!-- content --><span class="actAsPara">Message:</span></label>
       <span class="fld-textarea actAsDiv clearfix grpelem" id="u2276-4"><!-- content --><textarea class="wrapped-input" id="widgetu2275_input" name="custom_U2275" tabindex="3"></textarea><label class="wrapped-input fld-prompt" id="widgetu2275_prompt" for="widgetu2275_input"><span class="actAsPara">Enter Your Message</span></label></span>
       <div class="fld-message clearfix grpelem" id="u2277-4"><!-- content -->
        <p>Required</p>
       </div>
      </div>
     </form>
    </div>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u2270-17-r.png" alt=""/>
   <img class="preload" src="images/u2270-17-m.png" alt=""/>
   <img class="preload" src="images/u2270-17-fs.png" alt=""/>
   <!--[if lt IE 9]>
   <img class="preload" src="images/u635-r-grad.png" alt=""/>
   <img class="preload" src="images/u635-m-grad.png" alt=""/>
   <img class="preload" src="images/u644-grad.png" alt=""/>
   <![endif]-->
  </div>
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
Muse.Utils.initWidget('#widgetu2245', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu2245 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
