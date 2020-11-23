<div class="row">
    <div class="row"><h5 class="section-sub-title"><?= $directors[$num]['title'] ?></h5></div>    
    <?php

    use Cake\Chronos\Chronos;

$start_date = Chronos::parse('01-01-2019');
    $now = Chronos::now();
    $age = $directors[$num]['age'] + $now->diffInYears($start_date);
    $sex = $directors[$num]['sex'];
    ?>

    <div class="row section-text">
        <div class="col c2">
            <?= $this->element('picture', ['alt' => '', 'extension' => $directors[$num]['extension'], 'path' => $directors[$num]['path']]) ?>    
        </div>
        <div class="col c10" style="padding: 10px">
            <?= $directors[$num]['description'] . ' ' . (($num == 1) ? '' : $sex . ' is ' . $age . '  years old') ?>
            <?php if ($num == 1): ?>
                <div class='row section-text'>
                    <div class='col c9'>
                        <p> Leonarda is the Head of Married Couples in St Luke Sub-parish and Chairperson Projects Committee for Catholic Women's Guild -Jinja Karoli Parish.<br>  She is the author of <a href='http://e.paulinesafrica.org/index.php/book/bookDetails/361'>A Guide To A Happy Marriage(click here)</a> by pauline publications. <br><?= $sex . ' is ' . $age . '  years old' ?></p>
                    </div>
                    <div class='col c3'><?= $this->element('book') ?></div>
                </div>
            <?php endif; ?>

        </div>
    </div>

</div>