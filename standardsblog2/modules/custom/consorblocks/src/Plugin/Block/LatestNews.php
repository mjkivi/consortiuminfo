<?php

namespace Drupal\consorblocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Database\Database;

/**
 * Provides a 'Latest News' block.
 *
 * @Block(
 *   id = "latest_news",
 *   admin_label = @Translation("Latest News")
 * )
 */
class LatestNews extends BlockBase {

 /**
   * {@inheritdoc}
   */
  public function build() {

    //Connect to old Consortium News Database
	\Drupal\Core\Database\Database::setActiveConnection('external');

	// Get a connection going
	$db = \Drupal\Core\Database\Database::getConnection('default', 'external');

	//$now = date('Y-m-d');
	//print $now;

	$query = $db->select('items', 'itm');
	$query->fields('itm', ['blog', 'author', 'headline', 'its', 'source', 'date1', 'date2', 'link1', 'story']);
	$query->isNotNull('itm.headline');
	$query->orderBy('date2', 'DESC'); 
	$query->range(0, 5);

	//echo $query;
	$stories = $query->execute()->fetchAll();
	
	$markup = "";
	for ($i = 0; $i < count($stories); $i++) {
	  $markup .= "<a href='".$stories[$i]->link1."' target='_blank' class='title'>".$stories[$i]->headline."</a><b class='author'>".$stories[$i]->author."</b><p><b>".$stories[$i]->source." &ndash;</b>".$stories[$i]->date1." - ".$stories[$i]->story."<a href='".$stories[$i]->link1."' class='full'>...Full Story</a></p>";
	}

	//echo $markup;

	return array (
	  '#markup' => $markup,
	);

	//  for a twig template
	//return array(
	  //'#theme' => 'item_list',
	  //'#items' => $stories,
	  //'#type' => 'inline_template',
	//);

	// Connect back to D8 Database
	\Drupal\Core\Database\Database::setActiveConnection();

  }
}
