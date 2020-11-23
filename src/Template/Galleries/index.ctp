<?php

use Cake\Routing\Router;
?>
<section class="section secondary-text">
    <div class="row"><h3 class="section-title text-center">Gallery</h3></div>
    <hr>

    <div class="container">
        <ul class="grid figure-caption">
            <?php foreach ($galleries as $gallery): ?>
                <li>
                    <figure class="grid__figure">
                        <?php
                        $file = str_replace('webroot', '', str_replace('\\', '/', $gallery->photoDir) . $gallery->photo);
                        $extension = pathinfo($file, PATHINFO_EXTENSION);
                        $name = pathinfo($file, PATHINFO_FILENAME);
                        $path = pathinfo($file, PATHINFO_DIRNAME);
                        $wp = $this->Url->image($path . '/' . $name . '.webp');
                        $default = $this->Url->image($path . '/' . $name . '.' . $extension);
                        ?>
                        <picture>
                            <source srcset="<?= $wp ?>" type="image/webp">
                            <source srcset="<?= $default ?>" type="<?= 'image/' . $extension ?>">
                            <?= $this->Html->image($file, ['alt' => $gallery->photoAlias, 'id' => $gallery->id]); ?>
                        </picture>                        
                        <figcaption><?= $gallery->photoAlias ?></figcaption>

                        <figcaption><a href="<?= Router::url(['controller' => 'galleries', 'action' => 'delete', $gallery->id]) ?>">Delete</a></figcaption>
                    </figure>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<hr>
<div class="container section-text">
    <div class="row"><h5 class="section-sub-title text-center">Upload A Photo</h5></div>
    <div class="container">
        <?= $this->Form->create($photo, ['type' => 'file', 'id' => 'addPhoto', 'url' => ['controller' => 'galleries', 'action' => 'save']]) ?>

        <div class="row">
            <div class="col c3">
                <label for="photo">Photo (click browse)</label>
                <?= $this->Form->file('photo', ['placeholder' => 'add photo', 'accept' => 'image/*', 'label' => '', 'required' => true]); ?>
            </div>
            <div class="col c5">
                <?= $this->Form->control('photoAlias', ['rows' => 1, 'style' => 'width:100%;margin-top:8px;padding-top:0px', 'placeholder' => 'type description of the photo', 'label' => 'Description', 'required' => true]); ?>
            </div>
            <div class="col c3">
                <?= $this->Form->button(__('Upload'), ['style' => 'margin-top:52px', 'class' => 'button button-block']) ?>
            </div>
        </div>

        <?= $this->Form->end() ?>
        <ul class="ul">
            <li>Allowed file Formats are *.jpg,*.jpeg,*.png,*.webp</li>
            <li>Maximum file size 10MB</li>
            <li>Maintain few images in the gallery to improve on page load speed(preferably less than 10)</li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col c4">
                <button type="button" class="button-danger button-outline  button-block disabled" id="DelBtn" onclick="window.location = '<?= Router::url(['controller' => 'users', 'action' => 'index']) ?>'">USERS</button>
            </div>    
            <div class="col c4">
                <button class="button-light  button-block disabled" onclick="window.location = '<?= Router::url(['controller' => 'users', 'action' => 'logout']) ?>'" >LOG OUT</button>
            </div> 
            <div class="col c4" style="text-align: center"><h3 id="time" class="section-sub-title"></h3></div> 
        </div>  
    </div>

</div>
