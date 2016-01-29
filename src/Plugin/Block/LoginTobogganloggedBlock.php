<?php

/**
 * @file
 * Contains \Drupal\logintoboggan\Plugin\Block\LoginTobogganloggedBlock.
 */

namespace Drupal\logintoboggan\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'LoginToboggan logged' block.
 *
 * @Block(
 *   id = "logintoboggan_logged_in",
 *   admin_label = @Translation("LoginToboggan logged in block"),
 *   module = "logintoboggan"
 * )
 */

class LoginTobogganloggedBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $user = \Drupal::currentUser();
    $page = array(
      '#theme' => 'lt_loggedinblock',
      '#account' => $user,
    );
    return $page;
  }
}