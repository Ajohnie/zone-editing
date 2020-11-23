<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallery $gallery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gallery'), ['action' => 'edit', $gallery->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gallery'), ['action' => 'delete', $gallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gallery->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Galleries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gallery'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galleries view large-9 medium-8 columns content">
    <h3><?= h($gallery->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Property') ?></th>
            <td><?= $gallery->has('property') ? $this->Html->link($gallery->property->id, ['controller' => 'Properties', 'action' => 'view', $gallery->property->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($gallery->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PhotoDir') ?></th>
            <td><?= h($gallery->photoDir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PhotoType') ?></th>
            <td><?= h($gallery->photoType) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PhotoAlias') ?></th>
            <td><?= h($gallery->photoAlias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gallery->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PhotoSize') ?></th>
            <td><?= $this->Number->format($gallery->photoSize) ?></td>
        </tr>
    </table>
</div>
