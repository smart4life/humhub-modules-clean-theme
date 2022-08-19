<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2021 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

use humhub\modules\user\widgets\AccountMenu;
use humhub\widgets\FooterMenu;

/* @var string $content */
?>
<div class="container account-layout-container">
    <div class="row">
      <div class="col-md-12 layout-nav-container">
          <?= AccountMenu::widget() ?>
      </div>
  </div>
    <div class="row">
        <div class="col-md-12">
            <?= $content ?>
            <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_FULL_PAGE]); ?>
        </div>
    </div>
</div>
