<?php

use Cake\Routing\Router ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col c4">
                <div class="row"><h3 class="footer-title">Contact Us</h3></div>
                <div class="row footer-text  section-text">
                    <p><i class="fa fa-phone"></i><a href="callTo:+256772591495">(+256)772-591-485</a></p>
                    <p><i class="fa fa-envelope"></i><a href="mailTo:info@bescharityfoundation.org">info@bescharityfoundation.org</a></p>
                    <p><i class="fa fa-globe"></i><a href="http:\\www.bescharityfoundation.org">www.bescharityfoundation.org</a></p>
                    <p><i class="fa fa-map-marker"></i>P. O. Box 23988, Kampala(U)</p>
                    <p><i class="fa fa-home"></i>Plot 4708, Mpererwe Ttula – Kawempe</p>
                </div>
                <div class="row">
                    <picture>
                        <source srcset="<?= $this->Url->image('logo/bcf-logo.webp') ?>" type="image/webp">
                        <?= $this->Html->image('logo/bcf-logo.png') ?>
                    </picture> 
                </div>
            </div>
            <div class="col c4">
                <div class="row"><h3 class="footer-title">Partners</h3></div>
                <div class="row footer-text section-text">
                    <p><i class="fa fa-phone"></i><a href="callTo:+256704810630">(+256)704-810-630</a></p>
                    <p><i class="fa fa-envelope"></i><a href="mailTo:inspiredeventsplanners@gmail.com">inspiredeventsplanners@gmail.com</a></p>
                    <p><i class="fa fa-globe"></i><a href="http:\\www.inspiredeventsug.com">www.inspiredeventsug.com</a></p>
                    <p><i class="fa fa-map-marker"></i>P.O. Box, 23988 Kampala(U)</p>
                    <p><i class="fa fa-home"></i>Plot 4708, Mpererwe Ttula – Kawempe</p>
                </div>
                <div class="row">
                    <picture>
                        <source srcset="<?= $this->Url->image('logo/inspired-events-logo.webp') ?>" type="image/webp">
                        <?= $this->Html->image('logo/inspired-events-logo.png') ?>
                    </picture> 
                </div>
            </div>
            <div class="col c4">
                <div class="row"><h3 class="footer-title">Navigation</h3></div>
                <div class="row footer-text section-text">
                    <p><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'home']) ?>" class="<?= ($page == 'home') ? 'active' : '' ?>">Home</a></p>
                    <p><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'about']) ?>" class="<?= ($page == 'about') ? 'active' : '' ?>">About Us</a></p>
                    <p><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'projects']) ?>" class="<?= ($page == 'projects') ? 'active' : '' ?>">Projects</a></p>
                    <p><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'join']) ?>" class="<?= ($page == 'join') ? 'active' : '' ?>">Join Us</a></p>
                    <p><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'donate']) ?>" class="<?= ($page == 'donate') ? 'active' : '' ?>">Donate</a></p>
                    <p><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'contact']) ?>" class="<?= ($page == 'contact') ? 'active' : '' ?>">Contact Us</a></p>
                    <p><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'gallery']) ?>" class="<?= ($page == 'gallery') ? 'active' : '' ?>">Gallery</a></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="copy">&copy;<script>document.write(new Date().getFullYear());</script></div>
    </div>
</footer>