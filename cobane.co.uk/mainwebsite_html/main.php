<?php 
while(list($key, $value) = each($HTTP_GET_VARS));
if ($myvar) {
	$flashstring1 = "<param name='movie' value='v3.swf?listenervar=" . $myvar . "& + new Date().getTime()' />";
	$flashstring2 = "<embed src='v3.swf?listenervar=" . $myvar . "&' + new Date().getTime()' quality='high' bgcolor='#ffffff' width='775' height='430' align='absmiddle' allowScriptAccess='sameDomain' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' /></embed>";
} else {
	$flashstring1 = "<param name='movie' value='v3.swf?' + new Date().getTime()' />";
	$flashstring2 = "<embed src='v3.swf?' + new Date().getTime()' quality='high' bgcolor='#ffffff' width='775' height='430' align='absmiddle' allowScriptAccess='sameDomain' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' /></embed>";
}


?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>cobane.co.uk</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style2 {font-size: 12px}
.style3 {font-size: 12}
.style4 {font-size: 12px; font-weight: bold; }
.style5 {color: #000000}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #000000; }
a:link {
	color: #000000;
}
a:visited {
	color: #000000;
}
a:hover {
	color: #000000;
}
a:active {
	color: #000000;
}
-->
</style>
</head>

<BODY bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"> 
		<!--url's used in the movie-->
		<!--text used in the movie-->
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="775" height="430" align="absmiddle">
		<param name="allowScriptAccess" value="sameDomain" />
		<?php echo $flashstring1; ?>
		<param name="quality" value="high" />
		<param name="bgcolor" value="#ffffff" />
		<?php echo $flashstring2; ?>
      </object>
	
	</td>
  </tr>
</table>
<p class="style1">&nbsp;</p>
</BODY>
</html>
