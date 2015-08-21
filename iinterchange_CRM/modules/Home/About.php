<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


//NOTE: Under the License referenced above, you are required to leave in all copyright statements in both
//the code and end-user application.

global $sugar_config, $mod_strings;
include('ThirdPartyCredits.php');
?>
<style type="text/css">
ul li {
list-style-type: square;
}
</style>
<script language="javascript" src="modules/Home/about.js"></script>
<span>
<div class="about" style="padding: 10px 15px 20px 15px;">
<p>
<IMG src="include/images/sugar_md.png" alt="SugarCRM" width="425" height="30" ondblclick='abouter.display();'>
<br>
<b><?php echo $mod_strings['LBL_VERSION']." ".$sugar_version." (".$mod_strings['LBL_BUILD']." ".$sugar_build.")";
    if( is_file( "custom_version.php" ) ){
        include( "custom_version.php" );
        print( "&nbsp;&nbsp;&nbsp;" . $custom_version );
    }
?>
</b></p>

<?php
echo "<P>Copyright ".$app_strings['LBL_SUGAR_COPYRIGHT_SUB']."</P>";
 

 

$imgTagString = '<P><A href="http://www.sugarcrm.com" target="_blank"> <img style="margin-top: 2px" border="0" width="106" height="23" src="include/images/poweredby_sugarcrm.png" alt="Powered By SugarCRM"></A>';


echo $imgTagString;
?>

<?php
 

?>

<P> SugarCRM &reg;,
<?php


// Product Name for Professional edition.
$theProductName = "Sugar Professional";
echo $theProductName."&#8482; ".$mod_strings['LBL_AND']." Sugar&#8482; ".$mod_strings['LBL_ARE'];
?>
<a href="http://www.sugarcrm.com/crm/open-source/trademark-information.html"
	target="_blank">
	<?php echo $mod_strings['LBL_TRADEMARKS']."</a> ".$mod_strings['LBL_OF']; ?> SugarCRM Inc.</p>


<p ><table width="100%" border="0" cellspacing="0" cellpadding="0" class="contentBox">
<tr>
    <td  style="padding-right: 10px;" valign="top" rowspan="2" width="300" >

<object  classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="300" height="300" id="SugarPlanet" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="include/images/SugarPlanet.swf" />
<param name="quality" value="high" />
<param name="bgcolor" value="#ffffff" />
<param name="wmode" value="opaque" />
<embed  src="include/images/SugarPlanet.swf" wmode="opaque" quality="high" bgcolor="#ffffff" width="300" height="300" name="SugarPlanet" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<br>
<h3><?php echo $mod_strings['LBL_GET_SUGARCRM_RSS']; ?></h3>

<ul class="noBullet">
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/crm/index2.php?no_html=1&stype=rss20&task=returnRSS&option=com_rss_feed_manager&channel=Corporate" target="_blank"><img src="include/images/rss_xml.gif" border="0" alt="XML" align="top"></a>&nbsp;<a href="http://www.sugarcrm.com/crm/index2.php?no_html=1&stype=rss20&task=returnRSS&option=com_rss_feed_manager&channel=Corporate" target="_blank"><?php echo $mod_strings['LBL_SUGARCRM_NEWS']; ?></a></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/forums/external.php?type=rss" target="_blank"><img src="include/images/rss_xml.gif" border="0" alt="XML" align="top"></a>&nbsp;<a href="http://www.sugarcrm.com/forums/external.php?type=rss" target="_blank"><?php echo $mod_strings['LBL_SUGARCRM_FORUMS']; ?></a></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarforge.org/export/rss_sfnews.php" target="_blank"><img src="include/images/rss_xml.gif" border="0" alt="XML" align="top"></a>&nbsp;<a href="http://www.sugarforge.org/export/rss_sfnews.php" target="_blank"><?php echo $mod_strings['LBL_SUGARFORGE_NEWS']; ?></a></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/crm/index2.php?no_html=1&stype=rss20&task=returnRSS&option=com_rss_feed_manager&channel=all" target="_blank"><img src="include/images/rss_xml.gif" border="0" alt="XML" align="top"></a>&nbsp;<a href="http://www.sugarcrm.com/crm/index2.php?no_html=1&stype=rss20&task=returnRSS&option=com_rss_feed_manager&channel=all" target="_blank"><?php echo $mod_strings['LBL_ALL_NEWS']; ?></a></li>
</ul>
<br>
<h3><?php echo $mod_strings['LBL_JOIN_SUGAR_COMMUNITY']; ?></h3>
<ul class="noBullet">
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarforge.org/" target="_blank">SugarForge</a>: <?php echo $mod_strings['LBL_DETAILS_SUGARFORGE']; ?><br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarexchange.com/" target="_blank">SugarExchange</a>: <?php echo $mod_strings['LBL_DETAILS_SUGAREXCHANGE']; ?><br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/crm/university" target="_blank"><?php echo $mod_strings['LBL_TRAINING']; ?></a>: <?php echo $mod_strings['LBL_DETAILS_TRAINING']; ?><br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/forums/" target="_blank"><?php echo $mod_strings['LBL_FORUMS']; ?></a>: <?php echo $mod_strings['LBL_DETAILS_FORUMS']; ?><br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://www.sugarcrm.com/wiki/" target="_blank"><?php echo $mod_strings['LBL_WIKI']; ?></a>: <?php echo $mod_strings['LBL_DETAILS_WIKI']; ?></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://developer.sugarcrm.com/" target="_blank"><?php echo $mod_strings['LBL_DEVSITE']; ?></a>: <?php echo $mod_strings['LBL_DETAILS_DEVSITE']; ?></li>
</ul>

</td>

    <td colspan="2" valign="top" style="padding: 15px 10px 0px 10px;"><h3>SugarCRM Inc.</h3>

		10050 North Wolfe Road, Suite SW2-130, Cupertino, CA, 95014 USA,&nbsp;
		+1 (408) 454-6940,&nbsp;

<a href="http://www.sugarcrm.com" target="_blank">http://www.sugarcrm.com</a>

<iframe id='abouterdiv' border=0  width=500 style='overflow:hidden;display:none' frameborder="0" marginwidth="0" marginheight="0">
</iframe>
</td>
</tr>

<tr>
    <td valign="top" style="padding: 15px 10px 15px 10px;">
<p><B><a href="http://www.sugarforge.org/content/community/community-spotlight/contributions.php" target="_blank"><?php echo $mod_strings['LBL_LINK_CURRENT_CONTRIBUTORS']; ?></a></b></p>

<P>&nbsp;</p>
<P><h3><?php echo $mod_strings['LBL_SOURCE_CODE']; ?></h3></p>
<ul style="margin-bottom: 20px; padding-left: 0px;">
<LI><?php echo $mod_strings['LBL_SOURCE_SUGAR']; ?> (<A href="http://www.sugarcrm.com" target="_blank">http://www.sugarcrm.com</A>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_XTEMPLATE']; ?> (<A href="http://sourceforge.net/projects/xtpl" target="_blank">http://sourceforge.net/projects/xtpl</A>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_NUSOAP']; ?> (<a href="http://sourceforge.net/projects/nusoap/" target="_blank">http://sourceforge.net/projects/nusoap/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JSCALENDAR']; ?> (<a href="http://www.dynarch.com/mishoo/calendar.epl" target="_blank">http://www.dynarch.com/mishoo/calendar.epl</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PHPPDF']; ?> (<a href="http://ros.co.nz/pdf/" target="_blank">http://ros.co.nz/pdf/</a>)
<LI><?php echo $mod_strings['LBL_SOURCE_JSONPHP']; ?> (<a href="http://pear.php.net/pepr/pepr-proposal-show.php?id=198" target="_blank">http://pear.php.net/pepr/pepr-proposal-show.php?id=198</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JSON']; ?> (<a href="http://www.json.org/js.html" target="_blank">http://www.json.org/js.html</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_HTTP_WEBDAV_SERVER']; ?> (<a href="http://pear.php.net/package/HTTP_WebDAV_Server" target="_blank">http://pear.php.net/package/HTTP_WebDAV_Server</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JS_O_LAIT']; ?> (<a href="http://jsolait.net/" target="_blank">http://jsolait.net/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PCLZIP']; ?> (<a href="http://www.phpconcept.net/pclzip/" target="_blank">http://www.phpconcept.net/pclzip/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_SMARTY']; ?> (<a href="http://www.smarty.net/" target="_blank">http://www.smarty.net/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_OVERLIBMWS']; ?> (<a href="http://www.macridesweb.com/oltest/" target="_blank">http://www.macridesweb.com/oltest/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_YAHOO_UI_LIB']; ?> (<a href="http://developer.yahoo.net/yui/" target="_blank">http://developer.yahoo.net/yui/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PHPMAILER']; ?> (<a href="http://sourceforge.net/projects/phpmailer/" target="_blank">http://sourceforge.net/projects/phpmailer/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_CRYPT_BLOWFISH']; ?> (<a href="http://pear.php.net/package/Crypt_Blowfish/" target="_blank">http://pear.php.net/package/Crypt_Blowfish/</a>) </LI>
<LI><?php echo $mod_strings['LBL_SOURCE_HTML_SAFE']; ?> (<a href="http://pear.php.net/package/HTML_Safe/" target="_blank">http://pear.php.net/package/HTML_Safe/</a>) </LI>
<LI><?php echo $mod_strings['LBL_SOURCE_XML_HTMLSAX3']; ?> (<a href="http://pear.php.net/package/XML_HTMLSax3/" target="_blank">http://pear.php.net/package/XML_HTMLSax3/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_YAHOO_UI_LIB_EXT']; ?> (<a href="http://www.jackslocum.com/blog/" target="_blank">http://www.jackslocum.com/blog/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JSMIN']; ?> (<a href="https://github.com/rgrove/jsmin-php/" target="_blank">https://github.com/rgrove/jsmin-php/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_SWFOBJECT']; ?> (<a href="http://blog.deconcept.com/swfobject/" target="_blank">http://blog.deconcept.com/swfobject</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_TINYMCE']; ?> (<a href="http://wiki.moxiecode.com/index.php/TinyMCE:Index" target="_blank">http://wiki.moxiecode.com/index.php/TinyMCE:Index</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_TCPDF']; ?> (<a href="http://www.tcpdf.org/" target="_blank">http://www.tcpdf.org/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_RECAPTCHA']; ?> (<a href="http://recaptcha.net/" target="_blank">http://recaptcha.net/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_CSSMIN']; ?> (<a href="http://code.google.com/p/cssmin/" target="_blank">http://code.google.com/p/cssmin/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_PHPSAML']; ?> (<a href="https://github.com/onelogin/php-saml" target="_blank">https://github.com/onelogin/php-saml/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_ISCROLL']; ?> (<a href="http://cubiq.org/iscroll" target="_blank">http://cubiq.org/iscroll</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_JIT']; ?> (<a href="http://thejit.org/" target="_blank">http://thejit.org/</a>)</LI>
<LI><?php echo $mod_strings['LBL_SOURCE_FLASHCANVAS']; ?> (<a href="http://flashcanvas.net/" target="_blank">http://flashcanvas.net/</a>)</LI>

</ul>

<?php foreach($credits as $type => $details) {
	echo "<P><h3>". $type . "</h3></p>";
	echo "<ul style=\"margin-bottom: 20px; padding-left: 0px;\">";
		foreach($details as $key => $value) {
			echo "<li><b>".$value['name']."</b> by ".$value['author']." (<a href='http://{$value['website']}' target='_blank'>".$value['website']."</a>)</li>";
		}
	echo "</ul>";
}?>
	</td>

</tr>
</table>

</span>

<br>


</div>
