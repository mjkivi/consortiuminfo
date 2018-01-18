<?php

namespace Drupal\common_test\Controller;

use Drupal\Component\Utility\Html;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller routines for common_test routes.
 */
class CommonTestController {

  /**
   * Returns links to the current page, with and without query strings.
   *
   * Using #type 'link' causes these links to be rendered with the link
   * generator.
   */
  public function typeLinkActiveClass() {
    return array(
      'no_query' => array(
        '#type' => 'link',
        '#title' => t('Link with no query string'),
        '#url' => Url::fromRoute('<current>'),
        '#options' => array(
          'set_active_class' => TRUE,
        ),
      ),
      'with_query' => array(
        '#type' => 'link',
        '#title' => t('Link with a query string'),
        '#url' => Url::fromRoute('<current>'),
        '#options' => array(
          'query' => array(
            'foo' => 'bar',
            'one' => 'two',
          ),
          'set_active_class' => TRUE,
        ),
      ),
      'with_query_reversed' => array(
        '#type' => 'link',
        '#title' => t('Link with the same query string in reverse order'),
        '#url' => Url::fromRoute('<current>'),
        '#options' => array(
          'query' => array(
            'one' => 'two',
            'foo' => 'bar',
          ),
          'set_active_class' => TRUE,
        ),
      ),
    );
  }

  /**
   * Adds a JavaScript file and a CSS file with a query string appended.
   *
   * @return string
   *   An empty string.
   */
  public function jsAndCssQuerystring() {
    $attached = array(
      '#attached' => array(
        'library' => array(
          'node/drupal.node',
        ),
        'css' => array(
          drupal_get_path('module', 'node') . '/consortiuminfo2017/css/node.admin.css' => array(),
          // A relative URI may have a query string.
          '/' . drupal_get_path('module', 'node') . '/node-fake.css?arg1=value1&arg2=value2' => array(),
        ),
      ),
    );
    return \Drupal::service('renderer')->renderRoot($attached);
  }

  /**
   * Prints a destination query parameter.
   *
   * @return \Symfony\Component\HttpFoundation\Response
   *   A new Response object containing a string with the destination query
   *   parameter.
   */
  public function destination() {
    $destination = \Drupal::destination()->getAsArray();
    $output = "The destination: " . Html::escape($destination['destination']);
    return new Response($output);
  }

}