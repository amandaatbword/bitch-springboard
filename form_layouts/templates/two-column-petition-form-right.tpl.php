<?php
/**
 * @file
 * This template renders a petition enabled node in 2 columns.
 */

?>

<div id="webform-form-column-wrapper" class="form-layout-container form-right">
  <div class="form-row">

    <div id="left" class="form-col">
      <h1 class="form-layout-title"><?php print render($element['title']); ?></h1>
      <?php print render($element['body']); ?>
      <?php $view = views_get_view('recent_petiton_signers');
      $view->set_display('block_1'); ?>
      <h2><?php print $view->get_title(); ?></h2>
      <?php print $view->preview('block_1'); ?>
    </div>

    <div id="right" class="form-col">
      <div id="webform-form" class="form-wrapper">
        <div class="form-wrapper-inner">
          <?php print render($element['webform']); ?>
        </div>
      </div>
      <div id="petition-quick-sign" class="form-wrapper">
        <div class="form-wrapper-inner">
          <?php print render($element['springboard_petition_quicksign']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
