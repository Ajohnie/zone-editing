<div class="row figure">
    <picture>
        <source srcset="<?= $this->Url->image($path . '.webp') ?>" type="image/webp" media="(max-width: 767px)">
        <source srcset="<?= $this->Url->image($path . '.webp') ?>" type="image/webp" media="(max-width: 767px and orientation:landscape)">
        <source srcset="<?= $this->Url->image($path . '.webp') ?>" type="image/webp" media="(min-width: 768px and max-width: 991px)">
        <source srcset="<?= $this->Url->image($path . '.webp') ?>" type="image/webp" media="(min-width: 992px)">

        <source srcset="<?= $this->Url->image($path . '-sm.' . $extension) ?>" type="image/jpeg" media="(max-width: 767px)">
        <source srcset="<?= $this->Url->image($path . '-sm-l.' . $extension) ?>" type="image/jpeg" media="(max-width: 767px and orientation:landscape)">
        <source srcset="<?= $this->Url->image($path . '-md.' . $extension) ?>" type="image/jpeg" media="(min-width: 768px and max-width: 991px)">
        <source srcset="<?= $this->Url->image($path . '.' . $extension) ?>" type="image/jpeg" media="(min-width: 992px)">
        <?= $this->Html->image($path . '.' . $extension, ['class' => 'section-img', 'alt' => isset($alt) ? $alt : '']) ?>
    </picture> 
    <div class="row caption"><?= isset($alt) ? $alt : '' ?></div>    
</div>
