<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

class AuthorPages extends Frontend {
  /**
   * HOOK parseArticles: adds the author's page URL to the template
   * @param FrontendTemplate $objTemplate
   * @param Array $arrArticle
   * @param ModuleNews $objModule
   * @return void
   */
  public function addAuthorPage (FrontendTemplate $objTemplate, Array $arrArticle, ModuleNews $objModule) {    
    $result = $this->Database->prepare('SELECT u.url FROM tl_user u INNER JOIN tl_news n ON u.id=n.author WHERE n.id=?')
                ->execute($arrArticle['id']);
    
    $objTemplate->authorPage = $result->url;
  }
}

?>