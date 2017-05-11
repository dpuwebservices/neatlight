<?php
/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */
?>


<?php 
$recordSummary="";
$itemArr=array("Creator", "Source", "Description"); 
// Not using these fields "Subject", "Publisher", "Date", "Contributor", "Rights", "Relation", "Format", "Language", "Type", "Identifier", "Coverage"
$itemBlock="";

echo files_for_item(); //display images first

//Don't treat description field differently--move to end
//if (metadata('item', array('Dublin Core','Description'))):
//  echo "<div class=\"description\">" . metadata('item', array('Dublin Core','Description')) . "</div>";
//endif; 


foreach ($itemArr as $i => $element){
if (metadata('item', array('Dublin Core',$element))):
  $itemBlock .= "<div class=\"subItemTitle\">" . $element . ":</div><div class=\"subItem\">" . metadata('item', array('Dublin Core',$element)) . "<br></div>";
endif;   
}
echo "<div class=\"itemBlock\">" . $itemBlock . "</div>";
?>