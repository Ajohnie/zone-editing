<div class="container">
    <?= $this->Form->create($photo, ['type' => 'file', 'id' => 'editPhoto', 'url' => '/galleries/add']) ?>
    <fieldset>
        <div class="form-row">
            <div class="form-group">
                <label for="photo">Name</label>
                <?= $this->Form->file('photo', ['class' => 'form-control', 'style' => 'color:black', 'placeholder' => 'add photo', 'label' => '', 'required' => true]); ?>
            </div>
        </div>
        <div class="form-row">
            <?= $this->Form->control('property_id', ['class' => 'form-control', 'style' => 'color:black', 'default' => $photo->property_id, 'placeholder' => 'select property', 'type' => 'hidden', 'label' => '', 'required' => true]); ?>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="photo">Description</label>
                    <?= $this->Form->control('photoAlias', ['class' => 'form-control', 'style' => 'color:black', 'placeholder' => 'description', 'label' => '', 'required' => false]); ?>
                </div>
            </div>
            <div class="col-md-6 pt-3">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn  btn-raised btn-submit', 'style' => 'background-color: #1f1f6e;display: block;padding: 12px;width: 100%;color: #fff;border:0;margin-top: 40px;']) ?>
            </div>

        </div>
    </fieldset>

    <?= $this->Form->end() ?>
    <div class="row bg-info">
        <p>*Allowed file Formats are *.jpg,*.jpeg,*.png</p>
        <p>*Maximum file size is 150KB</p>
        <p>*Maximum Image height must be 600px(900x600)</p>
    </div>
</div>
