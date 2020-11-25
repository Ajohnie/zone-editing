<?php

use Cake\Routing\Router;

?>
<div class="w3-row">
    <div class="search-header w3-panel w3-cell-row w3-flat-concrete">
        <div class="logo w3-container w3-cell" style="width: 20%">
            <a href="<?= Router::url(['controller' => 'search', 'action' => 'index']) ?>"><?= $this->Html->image('favicon.png') ?></a>
        </div>
        <div class="w3-container w3-cell" style="width: 100%">
            <div class="admin-header"><?= $title ?></div>
        </div>
        <div class="w3-container w3-cell" style="width: 20%">
            <div class="admin-header">
                <div class="w3-dropdown-hover">
                    <button class="w3-btn w3-flat-asbestos">Menu</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4"
                         style="z-index: 1000;width: 2rem;min-width: 12rem">
                        <?= $this->Html->link(__('LOG OUT'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'w3-bar-item w3-button']) ?>
                        <?= $this->Html->link(__('USERS'), ['controller' => 'Users', 'action' => 'index'], ['style' => ($controller === 'users') ? 'display:none' : 'display:block', 'class' => 'w3-bar-item w3-button']) ?>
                        <?= $this->Html->link(__('ZONE DAYS'), ['controller' => 'Zonedays', 'action' => 'index'], ['style' => ($controller === 'zonedays') ? 'display:none' : 'display:block', 'class' => 'w3-bar-item w3-button']) ?>
                        <?= $this->Html->link(__('POSTAL CODES'), ['controller' => 'Postcodemappings', 'action' => 'index'], ['style' => ($controller === 'postcodemappings') ? 'display:none' : 'display:block', 'class' => 'w3-bar-item w3-button']) ?>
                        <?= $this->Html->link(__('ADD DATES'), ['controller' => 'Zonedates', 'action' => 'index'], ['style' => ($controller === 'zonedates') ? 'display:none' : 'display:block', 'class' => 'w3-bar-item w3-button']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
