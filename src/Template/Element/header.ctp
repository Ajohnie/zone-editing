<?php

use Cake\Routing\Router ?>
<!--Introduction text-->
<div class="section header header-img primary-text">
    <div class="container">
        <div class="row">
            <div class="col c4">
                <picture>
                    <source srcset="<?= $this->Url->image('logo/bcf-logo-clear.webp') ?>" type="image/webp">
                    <?= $this->Html->image('logo/bcf-logo-clear.png', ['class' => 'logo']) ?>
                </picture> 
            </div>
            <div class="col c6">
                <h3 class="section-title">
                    Only a life lived for others is worth living
                </h3>
                <p class="section-text">Here at Bes Charity Foundation, We have a big heart for orphans and vulnerable children</p>
                <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'join']) ?>" class="button button-outline">Join Us</a>
            </div>

        </div>
    </div>
</div>

<!--End Introduction text-->