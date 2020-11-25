<?php

?>
<div class="w3-display-container">
    <div class="w3-display-middle">
        <div class="main-admin w3-flat-clouds">
            <!--DIV FOR HEADER-->
            <?= $this->element('nav', ['title' => 'USERS', 'controller' => $controller]) ?>
            <!--DIV FOR ADDING USERS FORM-->
            <div class="w3-container">
                <div class="w3-row">
                    <?= $this->Form->create($newUser, ['class' => 'section-text', 'id' => 'addUserForm']) ?>
                    <table class="w3-table">
                        <thead class="w3-border-bottom">
                        <th>Email</th>
                        <th>Password</th>
                        <th></th>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="margin-top: 0;margin-left -3rem !important;">
                                <?= $this->Form->control('email', [
                                    'class' => 'w3-input w3-margin',
                                    'required' => true,
                                    'type' => 'email',
                                    'label' => '',
                                ]) ?>
                            </td>
                            <td>
                                <?= $this->Form->control('password', [
                                    'class' => 'w3-input w3-margin',
                                    'required' => true,
                                    'type' => 'password',
                                    'label' => '',
                                ]) ?>
                            </td>
                            <td><?= $this->Form->button(__('Add'), ['class' => 'w3-btn w3-black w3-round-large', 'style' => 'margin-top: 1rem;margin-left: 1rem']) ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <?= $this->Form->end() ?>
                </div>
            </div>
            <!-- DIV FOR ZONE TABLE-->
            <div class="w3-cell-row">
                <div class="w3-cell-middle">
                    <div class="tableDiv">
                        <table class="w3-table">
                            <thead class="w3-border-bottom">
                            <th>Email</th>
                            <th></th>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $user->email?></td>
                                    <td><?= $this->Html->link(__('Delete'), ['controller' => 'Users', 'action' => 'delete', 'id' => $user->id], ['class' => 'w3-btn w3-black w3-round-large', 'style' => 'margin-top: 0']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
