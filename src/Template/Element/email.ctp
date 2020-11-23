<div class="container">
    <?= $this->Form->create($email, ['id' => 'emailForm', 'url' => ['controller' => 'Messages', 'action' => 'email'], 'onsubmit' => 'sendEmail();event.preventDefault();']) ?>
    <?= $this->Form->control('_csrfToken', ['type' => 'hidden', 'value' => (isset($token)) ? $token : null, 'required' => true]); ?>
    <?= $this->Form->control('_method', ['type' => 'hidden', 'value' => 'POST', 'required' => true]); ?>
    <?= $this->Form->control('email', ['class' => 'smooth', 'placeholder' => 'your-email@mail.com', 'label' => '', 'required' => true]); ?>
    <button type="submit" class="button button-outline">Submit</button>

    <?= $this->Form->end() ?>
    <div class="container">
        <div class="row"><h6 class="animated zoomIn" id="waitEmail"  style="display: none;color: white">please wait...</h6></div>
        <div id="loaderEmail" class="row" style="display: none;color: white"></div>
    </div>
</div>
