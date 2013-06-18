<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');


/**
 * New field for author page URL
 */
$GLOBALS['TL_DCA']['tl_user']['fields']['url'] = array(
      'label'                   => &$GLOBALS['TL_LANG']['tl_user']['url'],
      'exclude'                 => true,
      'search'                  => true,
      'inputType'               => 'text',
      'eval'                    => array('rgxp'=>'url', 'maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50')
); 

/**
 * Adjust layout to fit four basic fields on the form
 */
$GLOBALS['TL_DCA']['tl_user']['fields']['username']['eval']['tl_class'] = "w50";
$GLOBALS['TL_DCA']['tl_user']['fields']['email']['eval']['tl_class'] = "w50 clr";

/**
 * insert new field after email in most palettes
 */ 
foreach (array('default', 'admin', 'group', 'extend', 'custom') as $palette) {
  $GLOBALS['TL_DCA']['tl_user']['palettes'][$palette] = str_replace(
    ',email;',
    ',email,url;',
    $GLOBALS['TL_DCA']['tl_user']['palettes'][$palette]
  );
}

?>