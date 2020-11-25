<?php

use Cake\Routing\Router;

?>
<div class="w3-display-container">
    <div class="w3-display-middle">
        <div class="main w3-flat-clouds">
            <!--DIV FOR HEADER-->
            <div class="w3-row">
                <!-- w3-flat-belize-hole-->
                <div class="search-header w3-panel w3-cell-row">
                    <div class="logo w3-container w3-cell" style="width: 20%">
                        <a href="<?= Router::url(['controller' => 'search', 'action' => 'index']) ?>"><?= $this->Html->image('favicon.png') ?></a>
                    </div>
                    <div class="w3-container w3-cell" style="width: 100%">
                        <!--SEARCH FORM-->
                        <?= $this->Form->create('', ['class' => '', 'id' => 'searchForm']) ?>
                        <div class="w3-cell-row" style="margin: 2rem">
                            <div class="w3-cell search-label">enter postcode</div>
                            <div class="w3-cell" style="width: 15%">
                                <?= $this->Form->control($postcodeInputName, [
                                    'class' => 'w3-input w3-round-large',
                                    'type' => 'text',
                                    'label' => '',
                                    'maxLength' => $postcodeInputNameLength,
                                    'required' => true]) ?>
                            </div>
                            <div class="w3-cell">
                                <?= $this->Form->button(__('search'), [
                                    'class' => 'w3-btn w3-black w3-round-large w3-margin-left']) ?>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
            <!-- DIV FOR SEARCH TABLE-->
            <div class="w3-cell-row">
                <div class="w3-cell-middle">
                    <div class="tableDiv">
                        <table class="w3-table">
                            <thead class="w3-border-bottom">
                            <th>Zone Day</th>
                            <th>Year</th>
                            <th>Month</th>
                            <th>Days</th>
                            <th>Area</th>
                            </thead>
                            <tbody>
                            <?php foreach ($zoneDates as $zoneDate): ?>
                                <tr>
                                    <td><?= $zoneDate->zoneday->day ?></td>
                                    <td><?= $zoneDate->year ?></td>
                                    <td><?= $zoneDate->month ?></td>
                                    <td><?= $zoneDate->days ?></td>
                                    <td><?= $zoneDate->zoneday->area ?></td>
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
