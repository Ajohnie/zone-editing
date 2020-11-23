<?php use Cake\Routing\Router ?>
<div class="row">
    <div class="col c2">
        <button type="button" class="button button-outline button-block" id="<?= $label.'AddBtn' ?>" onclick="<?= $actionAdd ?>">ADD</button>
    </div>    
    <div class="col c2">
        <button type="button" class="button-success button-outline  button-block disabled" id="<?= $label.'EditBtn' ?>" onclick="<?= $actionEdit ?>">EDIT</button>
    </div>    
    <div class="col c2">
        <button type="button" class="button-info button-outline  button-block disabled" id="<?= $label.'DelBtn' ?>" onclick="<?= $actionDel ?>">DELETE</button>
    </div>    
    <div class="col c2">
        <button type="button" class="button-danger button-outline  button-block disabled" id="<?= $label.'DelBtn' ?>" onclick="window.location = '<?= Router::url(['controller' => 'users', 'action' => 'index']) ?>'">USERS</button>
    </div>    
    <div class="col c2">
        <button class="button-light  button-block disabled" onclick="window.location = '<?= Router::url(['controller' => 'users', 'action' => 'logout']) ?>'" >LOG OUT</button>
    </div>    
</div>


