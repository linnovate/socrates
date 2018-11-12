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
            <?php
            if (module_exists('hybridauth')) {
              $element['#type'] = 'hybridauth_widget';
              print drupal_render($element);
            }
            ?>
            <?php print drupal_render_children($form) ?>
          </div>
        </div>
        <div class="more-options">
          <!-- renew password -->
          <div class="to-renew">
            <a href="<?php print render($user_pass_url); ?>">
              <?php print t('Request new password') ?>
            </a>
          </div>
          <div class="to-register">
            <a href="<?php print render($user_create_url); ?>">
              <?php print t('Create new account') ?>
            </a>
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