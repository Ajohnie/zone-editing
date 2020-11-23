<?php

use Cake\Routing\Router ?>
<!--Navigation-->
<header>
    <div class="nav-bar">
        <div class="container">
            <ul>
                <li class="brand"><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'home']) ?>">Bes Charity Foundation</a></li>
                <div class="navigation">
                    <li><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'home']) ?>" class="<?= ($page == 'home') ? 'active' : '' ?>">Home</a></li>
                    <li><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'about']) ?>" class="<?= ($page == 'about') ? 'active' : '' ?>">About Us</a></li>
                    <li><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'projects']) ?>" class="<?= ($page == 'projects') ? 'active' : '' ?>">Projects</a></li>
                    <li><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'join']) ?>" class="<?= ($page == 'join') ? 'active' : '' ?>">Join Us</a></li>
                    <li><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'donate']) ?>" class="<?= ($page == 'donate') ? 'active' : '' ?>">Donate</a></li>
                    <li><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'contact']) ?>" class="<?= ($page == 'contact') ? 'active' : '' ?>">Contact Us</a></li>
                    <li><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'gallery']) ?>" class="<?= ($page == 'gallery') ? 'active' : '' ?>">Gallery</a></li>

                </div>
                <li class="menuButton"><a href="#" class="dropbtn" onclick="showMenu()">&Congruent;</a></li>
            </ul>
            <hr>
            <div class="dropdown-content figure-caption" id="dropdown-menu">
                <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'home']) ?>" class="<?= ($page == 'home') ? 'active' : '' ?>">Home</a>
                <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'about']) ?>" class="<?= ($page == 'about') ? 'active' : '' ?>">About Us</a>
                <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'projects']) ?>" class="<?= ($page == 'projects') ? 'active' : '' ?>">Projects</a>
                <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'join']) ?>" class="<?= ($page == 'join') ? 'active' : '' ?>">Join Us</a>
                <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'donate']) ?>" class="<?= ($page == 'donate') ? 'active' : '' ?>">Donate</a>
                <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'contact']) ?>" class="<?= ($page == 'contact') ? 'active' : '' ?>">Contact Us</a>
                <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'gallery']) ?>" class="<?= ($page == 'gallery') ? 'active' : '' ?>">Gallery</a>
            </div>
        </div>
    </div>    
</header>
<!--End Navigation-->
