<?php /**
 * @file
 * Contains \Drupal\momentum_tools\EventSubscriber\InitSubscriber.
 */

namespace Drupal\momentum_tools\EventSubscriber;

use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class InitSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return [KernelEvents::REQUEST => ['onEvent', 0]];
  }

  public function onEvent() {
    drupal_add_css(drupal_get_path('module', 'momentum_tools') . '/css/momentum.css', [
      'group' => CSS_DEFAULT,
      'every_page' => TRUE,
    ]);
  }

}
