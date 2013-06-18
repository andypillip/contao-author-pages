<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * @see AuthorPages::addAuthorPage()
 */
$GLOBALS['TL_HOOKS']['parseArticles'][] = array(
  'AuthorPages',
  'addAuthorPage'
);

?>