<?php
// $Id$

/*!
 * Dynamic display block module template (Drupal 7): upright60p - content template
 * (c) Copyright Phelsa Information Technology, 2011. All rights reserved.
 * Version 1.3 ( 30-JUL-2011 )
 * Licenced under GPL license
 * http://www.gnu.org/licenses/gpl.html
 */

/**
 * @file
 * Dynamic display block module template (Drupal 7): upright60p - content template
 *
 * Available variables:
 * - $delta: Block number of the block.
 *
 * - $template: template name
 * - $output_type: type of content
 *
 * - $slider_items: array with slidecontent
 * - $slide_text_position of the text in the slider (top | right | bottom | left)
 * - $slide_direction: direction of the text in the slider (horizontal | vertical )
 * -
 * - $pager_content: Themed pager content
 * - $pager_position: position of the pager (top | bottom)
 *
 * notes: don't change the ID names, they are used by the jQuery script.
 */

$settings = $ddblock_cycle_slider_settings; 
 
// add Cascading style sheet
drupal_add_css($directory . '/custom/modules/ddblock/' . $settings['template'] . '/ddblock-cycle-' . $settings['template'] . '.css', array('group' => CSS_THEME, 'every_page' => FALSE));
?>
<!-- dynamic display block slideshow -->
<div id="ddblock-<?php print $settings['delta'] ?>" class="ddblock-cycle-<?php print $settings['template'] ?> clearfix">
 <div class="clearfix">
  <div class="container-inner clearfix">
   <?php if ($settings['pager_toggle'] && $settings['pager_position'] == "top") : ?>
    <?php print $pager_content ?>
   <?php endif; ?> 
   <!-- slider content -->
   <div class="slider clearfix">
    <div class="slider-inner clearfix">
     <?php if ($settings['output_type'] == 'view_fields') : ?>
      <?php foreach ($content as $slider_item): ?>
       <div class="slide clearfix">
        <div class="slide-inner clearfix">
         <?php if (isset($slider_item['slide_image'])) :?>
          <?php print $slider_item['slide_image']; ?>
         <?php endif; ?>               
        </div> <!-- slide-inner-->
       </div>  <!-- slide-->
      <?php endforeach; ?>
     <?php endif; ?>
    </div> <!-- slider-inner-->
       <?php if ($settings['pager_toggle'] && $settings['pager_position'] == "bottom") : ?>
    <?php print $pager_content ?>
   <?php endif; ?> 
   <!-- prev/next pager on slide -->
   <?php if ($settings['pager2'] == 1): ?>
    <div class="pager-slide prev-container prev-container-<?php print $settings['pager_position'] ?>">
     <a class="prev" href="#"><?php print $settings['pager2_slide_prev']?></a>
    </div>
    <div class="pager-slide next-container next-container-<?php print $settings['pager_position'] ?>">
     <a class="next" href="#"><?php print $settings['pager2_slide_next'] ?></a>
    </div>
   <?php endif; ?> 
   </div>  <!-- slider-->

  </div> <!-- container-inner-->
 </div> <!--container-->
</div> <!--  template -->