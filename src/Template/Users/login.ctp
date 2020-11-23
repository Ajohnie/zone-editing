<?php
$this->assign('title', 'login');

use Cake\Routing\Router;
?>
<section id="login" class="section secondary-text text-center">
    <div class="container">
        <div class="row"><h3 class="section-title">BCF Login</h3></div>
        <div class="container">
            <div class="row">
                <?= $this->Form->create('', ['class' => 'section-text']) ?>
                <div class="col c4">
                    <?= $this->Form->control('email', ['label' => 'Email', 'class' => 'form-control', 'placeholder' => 'Enter Email', 'required' => true]) ?>
                </div>
                <div class="col c4">
                    <?= $this->Form->control('password', ['label' => 'Password', 'class' => 'form-control', 'placeholder' => 'Enter Password', 'required' => true]) ?>
                </div>
                <div class="col c3">
                    <?= $this->Form->button(__('Login'), ['class' => 'button button-outline button-block','style'=>'margin-top:46px']) ?>
                </div>

                <?= $this->Form->end() ?>
            </div>    
        </div>

    </div>

    <div class="container section-text">
        <div class="row">Copyright &copy;<script>document.write(new Date().getFullYear());</script></div>
        <div class="row"><a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'home']) ?>">Return to web site</a></div>
    </div>
</section><!--/#login-->