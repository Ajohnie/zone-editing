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
        <?= $this->element('css') ?>
    </head>
    <body  id="contact">
        <style>
            .hidden{
                display: none;
            }
        </style>
        <div class="container">
            <div id="content">
                <?= $this->Flash->render() ?>

                <?= $this->fetch('content') ?>
                <?= $this->Html->link(__('Back'), 'javascript:history.back()',['class'=>'btn btn-danger bg-info']) ?>
            </div>
            <?= $this->element('footer')?>
            <?= $this->Html->css('font-awesome.min.css', ['fullBase' => true]) ?>
            <?= $this->element('js')?>
        </div>
    </body>
</html>
