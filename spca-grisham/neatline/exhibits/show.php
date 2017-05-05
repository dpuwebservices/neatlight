<?php

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<?php queue_css_file('style'); ?>
<?php queue_js_file('show'); ?>


<!-- Exhibit -->
<div class="exhibit">
  <?php echo nl_getExhibitMarkup(); ?>
</div>

