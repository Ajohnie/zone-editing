<?php

use Cake\Routing\Router ?>

<section class="section donate primary-text">
    <div class="donate-overlay">
        <div class="container">
            <div class="row"><h3 class="section-title">Join Our Cause</h3></div>
            <div class="row">
                <p class="section-text">We welcome people from allover the world who share our commitment and believe they can make a difference</p>
            </div>
            <div class="row">
                <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'donate']) ?>" class="button button-outline">Please Donate</a>
            </div>
        </div>
    </div>
</section>