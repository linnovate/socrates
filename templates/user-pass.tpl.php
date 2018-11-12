<?php
  global $base_url;
  $logo = theme_get_setting('logo');
?>
<div class="content-wrapper">
  <div class="content-block">
    <div>
      <div class="title">
        <p><?php print render($intro_text); ?></p>
      </div>
      <div class="inner">
        <!-- to register -->
        <div id="block-system-main" class="block block-system">
          <div class="content">
            <?php print drupal_render_children($form) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pane-sheatufim-logo">
    <div class="logo-content">
      <p><a class="company_logo" href="<?php print $base_url; ?>"><img src="<?php print $logo; ?>"></a></p>
    </div>
  </div><!-- footer -->

</div>