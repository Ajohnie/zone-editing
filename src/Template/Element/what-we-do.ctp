<?php

use Cake\Routing\Router ?>
<section class="section bg-theme-light before-theme-light secondary-text">
    <div class="container">
        <div class="row"><h3 class="section-title">What We Do</h3></div>
        <div class="row">
            <div class="col c8">

                <div class="row section-text">
                    <p>We help orphans and vulnerable children access education. Our assistance is in terms of school fees and scholastic materials.</p>
                    <p>With help from sponsors, we built a primary school dedicated to this cause(St Claver Primary School since 2008).By the close of 2018, the school had a total enrollment of 531 pupils and out of these, 185 access partial scholarship within the school.</p>
                    <p>Those on partial schoolarship include, refugees from South Sudan, orphans, and children from poor families.</p>
                </div>
                <div class="row">
                    <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'projects']) ?>" class="button button-close">Learn More</a>
                </div> 
            </div>
            <div class="col c4">
                <?= $this->element('picture',['alt'=>'vulnerable children from south sudan','extension'=>'jpg','path'=>'what-we-do/do']) ?>
            </div>
        </div>
    </div>
</section>