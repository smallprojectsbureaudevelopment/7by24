<?php
/**
 * The template for Footer.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
?>



      <div style="clear: both"></div>
      <div id="footer">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer1") ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer2") ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer3") ) : ?>
        <?php endif; ?>
        <div style="clear: both"></div>
        <p>COPYRIGHT © 2014 WAYFARE MOBILE LLC. All rights reserved | Web Design By <a href="http://www.responsivemedia.nyc" target="_blank" follow="no-follow">Responsive Media</a></p></div>

<?php wp_footer(); ?>

</body></html>