<?php
/**
 * @copyright	Copyright (C) 2005 - 2011 Joomlashack / Meritage Assets
 * @author		Jeremy Wilken - Joomlashack
 * @package		Wright
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<doctype>
<html>
<head>
<w:head />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/js_travertine/js/jquery.fullbg.min.js"></script>
</head>
<body>
<img src="<?php echo $this->baseurl ?>/templates/js_travertine/images/<?php echo $this->params->get('style') ?>/bg.jpg" id="background" alt="">
<div id="wrapper">
  <div id="header">
    <div class="container_12 clearfix">
      <w:logo name="newsflash" style="none"/>
      <div class="clear"></div>
    </div>
  </div>
  <?php if($this->countModules('menu')) : ?>
  <div id="menu">
    <w:module type="single" name="menu" chrome="none" />
  </div>
  <?php endif; ?>
  <div id="container">
    <div class="container_12 clearfix">
      <?php if($this->countModules('banner')) : ?>
      <div id="banner" class="grid_12">
        <w:module type="single" name="banner" chrome="none" />
      </div>
      <?php endif; ?>
      <?php if($this->countModules('grid-top1')) : ?>
      <div id="grid-top1">
        <w:module type="grid" name="grid-top1" chrome="wrightflexgrid" />
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <?php endif; ?>
      <?php if($this->countModules('grid-top2')) : ?>
      <div id="grid-top2">
        <w:module type="grid" name="grid-top2" chrome="wrightflexgrid" />
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <?php endif; ?>
      <?php if($this->countModules('grid-top3')) : ?>
      <div id="grid-top3">
        <w:module type="grid" name="grid-top3" chrome="wrightflexgrid" />
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <?php endif; ?>
      <?php if($this->countModules('breadcrumbs')) : ?>
      <div id="breadcrumbs" class="grid_12">
        <w:module type="single" name="breadcrumbs" chrome="none" />
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <?php endif; ?>
      <section id="main">
        <div id="main-inner">
          <w:content />
        </div>
      </section>
      <?php if($this->countModules('sidebar1')) : ?>
      <aside id="sidebar1">
        <div id="sidebar1-inner">
          <w:module name="sidebar1" chrome="xhtml" />
        </div>
      </aside>
      <?php endif; ?>
      <?php if($this->countModules('sidebar2')) : ?>
      <aside id="sidebar2">
        <div id="sidebar2-inner">
          <w:module name="sidebar2" chrome="xhtml" />
        </div>
      </aside>
      <?php endif; ?>
      <div class="clear"></div>
      <?php if($this->countModules('grid-bottom1')) : ?>
      <div id="grid-bottom1">
        <w:module type="grid" name="grid-bottom1" chrome="wrightflexgrid" />
      </div>
      <div class="clear"></div>
      <?php endif; ?>
      <?php if($this->countModules('grid-bottom2')) : ?>
      <div id="grid-bottom2">
        <w:module type="grid" name="grid-bottom2" chrome="wrightflexgrid" />
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <?php endif; ?>
      <div class="clear"></div>
      <div id="footer">
        <w:module type="single" name="footer" chrome="none" />
        <w:footer />
      </div>
    </div>
  </div>
</div>
</script>
<?php //echo $this->document->params->get("footerscript",""); ?>
</body>
</html>
