<?php $this->assign('title', 'donate') ?>
<?= $this->element('header-general', ['title' => 'Donate', 'subtitle' => '...with diligence and discipline for a better world...', 'class' => 'header-general header-general-img']) ?>
<section class="section before-tertiary secondary-text">
    <div class="container">
        <div class="row"><h5 class="section-sub-title">Fill In This Form</h5></div>    
        <div class="row"><p class="section-text">Tell us about yourself, and we will get back to you as soon as possible.</p></div>    
        <?= $this->Form->create($donate_form, ['id' => 'donate','class'=>'section-text', 'url' => ['controller' => 'messages', 'action' => 'donate'],'onsubmit'=>"send(this,'waitDonate');event.preventDefault()"]) ?>

        <div class="row">
            <div class="container">
                <div class="col c5">
                    <?= $this->Form->control('fname', ['class' => 'form-control', 'placeholder' => 'Enter First Name', 'label' => 'First Name', 'required' => true]); ?>
                </div>
                <div class="col c5">
                    <?= $this->Form->control('lname', ['class' => 'form-control', 'placeholder' => 'Enter Last Name', 'label' => 'Last Name', 'required' => true]); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col c5">
                    <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'your@mail.com', 'label' => 'Email', 'required' => true]); ?>
                </div>
                <div class="col c5">
                    <?= $this->Form->control('contact', ['class' => 'form-control', 'placeholder' => 'your phone number', 'label' => 'Phone No', 'required' => true]); ?>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col c10"><?= $this->Form->control('amount', ['type' => 'number','min'=>1, 'class' => 'form-control', 'placeholder' => 'enter amount in dollars', 'label' => 'Prefered Amount', 'required' => true]); ?></div>
            </div>
        </div>


        <div class="container">
            <div class="row"><p class="secondary-text animated zoomIn" id="waitDonate"  style="display: none">please wait...</p></div>
        </div>

        <div class="row">
            <div class="container">
                <div class="col c5">
                    <button type="submit" class="button button-outline button-block">Send Now</button>        
                </div>
                <div class="col c5">
                    <button class="button-light button-block" type="reset">Clear</button>        
                </div>
            </div>
        </div>


        <?= $this->Form->end() ?>

    </div>
</section>
<?= $this->element('contact') ?>