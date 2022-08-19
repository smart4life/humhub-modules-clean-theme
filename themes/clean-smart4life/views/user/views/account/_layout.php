<?php

use humhub\widgets\FooterMenu;

?>
<div class="container account-layout-container">
    <div class="row">
        <div class="col-md-12 layout-nav-container">
            <?php
            echo \humhub\modules\user\widgets\AccountMenu::widget(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <?php echo $content; ?>
            </div>
            <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_FULL_PAGE]); ?>
        </div>
    </div>
</div>
