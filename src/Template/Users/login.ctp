<?php
$this->assign('title', 'login');

use Cake\Routing\Router;

?>
<section id="login" class="w3-display-container w3-center">
    <div class="w3-container">
        <div class="w3-row"><h1 class="w3-xxlarge">Zone Pricing Login</h1></div>
        <div class="w3-container">
            <div class="w3-row">
                <?= $this->Form->create('', ['class' => 'section-text']) ?>
                <div class="w3-third">
                    <?= $this->Form->control('email', ['label' => 'Email', 'class' => 'w3-input w3-margin', 'placeholder' => 'Enter Email', 'required' => true]) ?>
                </div>
                <div class="w3-third w3-margin-left">
                    <?= $this->Form->control('password', ['label' => 'Password', 'class' => 'w3-input w3-margin', 'placeholder' => 'Enter Password', 'required' => true]) ?>
                </div>
                <div class="w3-quarter">
                    <?= $this->Form->button(__('Login'), ['class' => 'w3-btn w3-black w3-round-large w3-margin-left', 'style' => 'margin-top: 3.5rem']) ?>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>

    </div>

    <div class="w3-container w3-section">
        <div class="w3-row">Copyright &copy;<script>document.write((new Date()).getFullYear().toString());</script>
        </div>
        <div class="w3-row"><a href="<?= Router::url($homeUrl) ?>">Return to web site</a></div>
    </div>
</section><!--/#login-->
