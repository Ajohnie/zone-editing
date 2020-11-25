<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->element('css') ?>
</head>
<body class="w3-flat-silver">
<div class="w3-container">
    <div class="w3-panel w3-red">
        <h3><?= __('Oops !, An Error Occurred') ?></h3>
        <p>
            <?= $this->Flash->render() ?>
        </p>
        <p>
            <?= $this->fetch('content') ?>
        </p>
        <p><?= $this->Html->link(__('Back'), 'javascript:history.back()') ?></p>
    </div>
</div>
</body>
</html>
