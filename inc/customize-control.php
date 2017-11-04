<?php
/**
 * Extend the WP customizer
 *
 */
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

/**
 * Class to create a custom layout control
 */

if ( ! class_exists( 'Novapress_Custom_Text_Control' ) ) {
  class novapress_Custom_Text_Control extends WP_Customize_Control {
          public $type = 'customtext';
          public $extra = ''; // we add this for the extra description
          public function render_content() {
          ?>
          <label id="text-box-custom">
              <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
              <span><?php echo esc_html( $this->description ); ?></span>
              <br /><input type="text" id="custom-text-box" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> />
              <span class="upgrade-box"><u><?php printf( '<a href="https://www.themely.com/themes/novapress-viralnova-clone-wordpress-theme/" target="_blank">' ); ?>
              <?php echo esc_attr_e('Upgrade to Novapress Pro to unlock this feature.'); ?></a></u></span>
          </label>

          <?php
               echo '<style>';
                      echo '#custom-text-box{
                          display: none;
                      }
                      .upgrade-box {
                          border: 2px dashed #0073aa;
                          display: inline-block;
                          padding: 2px 6px;
                          margin-top: 10px;
                      }';
                      echo '</style>';
          }
      }
}