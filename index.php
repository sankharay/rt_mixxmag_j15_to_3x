<?php
// no direct access
define( 'YOURBASEPATH', '/home/aix360a/public_html/apollo3x/templates/rt_mixxmag_j15/' );
require( YOURBASEPATH."rt_styleswitcher.php");
$app            =& JFactory::getApplication();
$template       = $app->getTemplate(true);
$params         = $template->params;
$variable       = $params->get('variable');
global $template_real_width, $leftcolumn_width, $rightcolumn_width, $tstyle, $show_tools, $show_collapse;
global $js_compatibility;
$live_site        		= $app->getCfg('sitename');
$template_path 			= $this->baseurl . '/templates/' .  $this->template;
$default_style 			= $this->params->get("defaultStyle", "style1");
$frontpage_component    = $this->params->get("enableFrontpage", "show");
$enable_ie6warn         = ($this->params->get("enableIe6warn", 0)  == 0)?"false":"true";
$font_family            = $this->params->get("fontFamily", "mixxmag");
$template_width 		= $this->params->get("templateWidth", "958");
$leftcolumn_width		= $this->params->get("leftcolumnWidth", "185");
$rightcolumn_width		= $this->params->get("rightcolumnWidth", "260");
$leftinset_width		= $this->params->get("leftinsetWidth", "160");
$rightinset_width		= $this->params->get("rightinsetWidth", "160");
$splitmenu_col			= $this->params->get("splitmenuCol", "rightcol");
$menu_name 				= $this->params->get("menuName", "mainmenu");
$menu_type 				= $this->params->get("menuType", "moomenu");
$default_font 			= $this->params->get("defaultFont", "default");
$show_tools		 		= ($this->params->get("showTools", 1)  == 0)?"hidetools":"showtools";
$show_collapse			= ($this->params->get("showCollapse", 1) == 0) ? "hidecollapse" : "showcollapse";
$show_logo		 		= ($this->params->get("showLogo", 1)  == 0)?"false":"true";
$show_date		 		= ($this->params->get("showDate", 1)  == 0)?"false":"true";
$show_textsizer		 	= ($this->params->get("showTextsizer", 1)  == 0)?"false":"true";
$show_copyright 		= ($this->params->get("showCopyright", 1)  == 0)?"false":"true";
$clientside_date		= ($this->params->get("clientSideDate", 1) == 0)?"false":"true";
$js_compatibility	 	= ($this->params->get("jsCompatibility", 0)  == 0)?"false":"true";
// moomenu options
$moo_bgiframe     		= ($this->params->get("moo_bgiframe'","0") == 0)?"false":"true";
$moo_delay       		= $this->params->get("moo_delay", "500");
$moo_duration    		= $this->params->get("moo_duration", "600");
$moo_fps          		= $this->params->get("moo_fps", "200");
$moo_transition   		= $this->params->get("moo_transition", "Sine.easeOut");
$moo_bg_enabled			= ($this->params->get("moo_bg_enabled","0") == 0)?"false":"true";
$moo_bg_over_duration		= $this->params->get("moo_bg_over_duration", "100");
$moo_bg_over_transition		= $this->params->get("moo_bg_over_transition", "Expo.easeOut");
$moo_bg_out_duration		= $this->params->get("moo_bg_out_duration", "800");
$moo_bg_out_transition		= $this->params->get("moo_bg_out_transition", "Sine.easeOut");
$moo_sub_enabled		= ($this->params->get("moo_sub_enabled","0") == 0)?"false":"true";
$moo_sub_over_duration		= $this->params->get("moo_sub_over_duration", "50");
$moo_sub_over_transition	= $this->params->get("moo_sub_over_transition", "Expo.easeOut");
$moo_sub_out_duration		= $this->params->get("moo_sub_out_duration", "600");
$moo_sub_out_transition		= $this->params->get("moo_sub_out_transition", "Sine.easeIn");
$moo_sub_offsets_top		= $this->params->get("moo_sub_offsets_top", "5");
$moo_sub_offsets_right		= $this->params->get("moo_sub_offsets_right", "15");
$moo_sub_offsets_bottom		= $this->params->get("moo_sub_offsets_bottom", "5");
$moo_sub_offsets_left		= $this->params->get("moo_sub_offsets_left", "5");
	require(YOURBASEPATH . "/rt_styleloader.php");
?>

<!DOCTYPE html>


<html >
	<head>
		<jdoc:include type="head" />
		<?php
		require(YOURBASEPATH .  "rt_utils.php");
		require(YOURBASEPATH .  "rt_head_includes.php");
	?>
	</head>
	<body id="ff-<?php echo $fontfamily; ?>" class="<?php echo $fontstyle; ?> <?php echo $tstyle; ?> iehandle">
		<div id="page-bg">
			<!--Begin Top Header Bar-->
			<div id="top-bar" class="png">
				<div class="wrapper">
					<?php if ($this->countModules('toplinks')) : ?>
					<div class="links-block">
						<jdoc:include type="modules" name="toplinks" style="none" />
					</div>
					<?php endif ;?>
					<?php if ($show_textsizer=="true") : ?>
					<div id="accessibility"><div id="buttons">
						<a href="<?php echo JROUTE::_($thisurl . "fontstyle=f-larger"); ?>" title="Increase Font Size" class="large"><span class="button">&nbsp;</span></a>
						<a href="<?php echo JROUTE::_($thisurl . "fontstyle=f-smaller"); ?>" title="Decrease Font Size" class="small"><span class="button">&nbsp;</span></a>
					</div></div>
					<?php endif; ?>
					<?php if ($show_date == "true") : ?>
					<div class="date-block">
						<span class="date1"><?php $now = &JFactory::getDate(); echo $now->Format('%A'); ?></span>
						<span class="date2"><?php $now = &JFactory::getDate(); echo $now->Format('%b'); ?></span>
						<span class="date3"><?php $now = &JFactory::getDate(); echo $now->Format('%d'); ?></span>
					</div>
					<?php else : ?>
					<div class="right-module-block">
						<jdoc:include type="modules" name="top" style="xhtml" />
					</div>
					<?php endif; ?>
				</div>
			</div>
			<!--End Top Header Bar-->
			<div class="wrapper"><div class="side-shadow-l png"><div class="side-shadow-r png">
			<!--Begin Main Header-->
			<div id="top-divider" class="png"></div>
			<div id="main-header"<?php if ($tstyle=="style8" or $tstyle=="style9" or $tstyle=="style10"):?> class="png"<?php endif; ?>>
				<?php if($show_logo == "true") : ?>
				<div id="logo-bg-area"></div>
				<div id="logo-surround"><div id="logo-banner"><div id="logo-banner2" class="png"><div id="logo-banner3">
					<a href="<?php echo $this->baseurl; ?>" class="nounder"><img src="<?php echo $template_path; ?>/images/blank.gif" border="0" alt="logo" id="logo" /></a>
				</div></div></div></div>
				<?php elseif($show_logo =="false" and $this->countModules('logo')) : ?>
				<div class="logo-module">
					<jdoc:include type="modules" name="logo" style="xhtml" />
				</div>
				<?php endif; ?>
				
				<div class="header-spacer"></div>
				<?php if($mtype != "none") : ?>
				<div id="horiz-menu" class="<?php echo $mtype; ?>">
					<div class="wrapper">
						<jdoc:include type="modules" name="toolbar" style="none" />
					</div>
				</div>
				<?php else : ?>
				<div id="menu-spacer"></div>
				<?php endif; ?>
				<div class="clr"></div>
			</div>
			<!--End Main Header-->
			<!--Begin Main Content Area-->
			<div id="main-body-bg">
			<div id="main-body">
				<!--Begin Main Column-->
				<div id="maincol" style="width: <?php echo getMainWidth(); ?>px">
					
					
					
					<div id="main-content">
						
						<div id="maincontent-block">
							<jdoc:include type="message" />
							<jdoc:include type="component" />
						</div>
						</div>
					</div>
					<div class="clr"></div>
					
					</div>
					
				</div>
				<!--End Main Column-->
				
			<div class="clr"></div>
			</div>
			
		<!--End Main Content Area-->
		<!--Begin Bottom Area-->
		<div class="bottom-padding">
			<?php if ($this->countModules('bottom')) : ?>
			<div id="bottom-block">
				<div id="footer-bg1"><div id="footer-bg2">
					<jdoc:include type="modules" name="bottom" style="xhtml" />
				</div></div>
			</div>
			<?php endif; ?>
			<?php if ($show_copyright == "true" or $this->countModules('footer')) : ?>
			<div id="footer-bar">
				<?php if ($show_copyright == "true") : ?>
				<div class="copyright-block">
					<div id="copyright">
						&copy; Copyright <?php $now = &JFactory::getDate(); echo $now->Format('%Y'); ?>, All Rights Reserved
					</div>
				</div>
				<?php else: ?>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
		<!--End Bottom Area-->
		</div></div></div>
		</div>
		<div id="bottom-expansion">
			
				<?php if ($this->countModules('debug')) : ?>
				<div class="wrapper"><div class="debug-mod">
					<jdoc:include type="modules" name="debug" style="xhtml" />
				</div></div>
				<?php endif; ?>
			</div>
		</div>
		</div>
	</body>
</html>